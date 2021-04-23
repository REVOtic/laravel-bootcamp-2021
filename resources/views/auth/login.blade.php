@extends('layouts/auth')

@section('auth_layout')
<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card mx-auto my-5" style="width: 32rem;">
                <div class="card-body">
                    <h2 class="display-4 mb-4">Login</h2>

                    {{-- Login Form --}}
                    <form method="post" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">

                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="remeberme" name="remeberme" value="yes">
                            <label class="form-check-label" for="remeberme">Remember Me</label>
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="{{ route('register') }}" class="text-transform-uppercase text-decoration-none float-end">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection