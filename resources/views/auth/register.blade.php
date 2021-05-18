@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-light p-4 rounded-3">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <h2 class="display-6 text-center">Register</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" placeholder="Your name" id="name"
                               class="form-control bg-gray-200 p-2 rounded-3 @error('name') is-invalid @enderror"
                               value="{{ old('name') }}">
                        @error('name')
                        <small class="text-danger mt-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username" id="username"
                               class="form-control bg-gray-200 p-2 rounded-3 @error('username') is-invalid @enderror"
                               value="{{ old('username') }}">
                        @error('username')
                        <small class="text-danger mt-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" placeholder="Your email" id="email"
                               class="form-control bg-gray-200 p-2 rounded-3 @error('email') is-invalid @enderror"
                               value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger mt-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Choose a password" id="password"
                               class="form-control bg-gray-200 p-2 rounded-3 @error('password') is-invalid @enderror"
                               value="">
                        @error('password')
                        <small class="text-danger mt-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                        <input type="password" name="password_confirmation" placeholder="Repeat your password"
                               id="password_confirmation"
                               class="form-control bg-gray-200 p-2 rounded-3"
                               value="">
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
