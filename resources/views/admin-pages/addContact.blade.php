@extends('layouts/admin')

@section('admin_layout')
<div class="container-fluid">
    <h1 class="mt-4">Add Contact</h1>

    <div class="add-contact-form">
        {{-- Register Form --}}
        <form method="post" action="{{ route('addContact') }}">
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
                <label for="sec_phone">Secondary Phone Number</label>
                <input type="text" name="sec_phone" class="form-control" id="sec_phone" placeholder="Enter Secondary Phone Number">

                @error('sec_phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="country">Country</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country">

                @error('country')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company">

                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Save Contact</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection