@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-light p-4 rounded-3">
                @if (session('status'))
                    <div class="alert alert-danger alert-dismissible fade show"
                         role="alert">
                        {{ session('status') }}
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <h2 class="display-6 text-center">Log In</h2>
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
                    <div>
                        <button type="submit" class="btn btn-primary px-3 py-2 rounded-3 font-bold w-100">Log In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(session('status'))
        <script>
            setTimeout(() => {
                const closeBtn = document.querySelector('.btn-close');
                closeBtn.click();
            }, 3000);
        </script>
    @endif
@endsection
