@extends('layouts/auth')

@section('auth_layout')
<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card mx-auto my-5" style="width: 32rem;">
                <div class="card-body">
                    <h2 class="display-4 mb-4">Register</h2>

                    {{-- Register Form --}}
                    <form method="post" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="full_name" laceholder="Enter Your name" value="{{ old('full_name') }}">

                            @error('full_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">

                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phone" laceholder="Enter Your Phone Number" value="{{ old('phone') }}">

                            @error('phone')
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

                        <div class="form-group mb-3">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="{{ route('login') }}" class="text-transform-uppercase text-decoration-none float-end">Login to Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection