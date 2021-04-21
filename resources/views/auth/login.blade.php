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
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
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