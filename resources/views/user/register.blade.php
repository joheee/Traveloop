@extends('layout.bootstrap')

@section('title', 'Register | Traveloop')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <h1>Register</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('user.login') }}" type="submit" class="btn btn-primary">Login</a>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
