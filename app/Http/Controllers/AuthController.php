<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function loginVerify(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        try {
            $credentials = $request->only(['email', 'password']);

            if (Auth::attempt($credentials)) {
                $user = User::where('email', $request->email)->first();

                toastr()->success(['success' ,'Login Success ']);
                if ($user->role == 'admin') {
                    return redirect()->route('home')->with('success', 'Login successfully as admin');
                } else {
                    return redirect()->route('home')->with('success', 'Login successfully as user');
                }
            } else {
                return redirect()->back()->with('error', 'Email or Password is wrong');
            }
        } catch (Exception $e) {
            toastr()->error('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function registerVerify(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'confirm_password.required' => 'Confirm Password is required',
            'confirm_password.same' => 'Password and Confirm Password must be same',
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user'
            ]);

            auth()->login($user);
            toastr()->success('Register successfully');
            return redirect()->route('/')->with('success', 'Register successfully');
        } catch (Exception $e) {
            toastr()->error('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function logout(){
        try {
            $user = auth()->user();
            Auth::logout($user);

            toastr()->success('Log successfully');
            return redirect()->route('auth.login')->with('success', 'Logout successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
