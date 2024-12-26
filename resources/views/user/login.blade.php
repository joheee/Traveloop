@extends('layout.bootstrap')

@section('title', 'Login | Traveloop')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <h1>Login</h1>
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
            <div class="d-flex justify-content-between">
                <a href="{{ route('user.register') }}" type="submit" class="btn btn-primary">Register</a>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
