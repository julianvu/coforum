@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-light p-4 rounded-3">
                <form action="{{ route('register') }}" method="post">
                    <h2 class="display-6 text-center">Register</h2>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" id="username"
                               class="form-control bg-gray-200 p-2 rounded-3" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Your email" id="email"
                               class="form-control bg-gray-200 p-2 rounded-3" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Choose a password" id="password"
                               class="form-control bg-gray-200 p-2 rounded-3" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                        <input type="password" name="password_confirmation" placeholder="Repeat your password"
                               id="password_confirmation"
                               class="form-control bg-gray-200 p-2 rounded-3" value="">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary px-3 py-2 rounded-3 font-bold w-100">Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
