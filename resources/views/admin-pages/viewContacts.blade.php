@extends('layouts/admin')

@section('admin_layout')
<div class="container-fluid">
    <h1 class="mt-4">View Contact</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Secondary Phone</th>
                <th scope="col">Country</th>
                <th scope="col">Company</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th>{{ $contact['name'] }}</th>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['phone'] }}</td>
                <td>{{ $contact['sec_phone'] }}</td>
                <td>{{ $contact['country'] }}</td>
                <td>{{ $contact['company'] }}</td>
                <td>
                    <a class="btn btn-sm rounded btn-danger" data-bs-toggle="modal" data-bs-target="#UIE-{{ $contact['phone'] }}"><i class="fas fa-pen"></i></a>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="UIE-{{ $contact['phone'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Register Form --}}
                                    <form method="post" action="{{ route('editContact', $contact) }}">
                                        @csrf
                                        {{-- Delete Method For Laravel --}}
                                        @method('PUT')

                                        <div class="form-group mb-3">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" name="full_name" class="form-control" id="full_name" laceholder="Enter Your name" value="{{ $contact['name'] }}">

                                            @error('full_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="email">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $contact['email'] }}">

                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="phone" laceholder="Enter Your Phone Number" value="{{ $contact['phone'] }}">

                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="sec_phone">Secondary Phone Number</label>
                                            <input type="text" name="sec_phone" class="form-control" id="sec_phone" placeholder="Enter Secondary Phone Number" value="{{ $contact['sec_phone'] }}">

                                            @error('sec_phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="country">Country</label>
                                            <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country" value="{{ $contact['country'] }}">

                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="company">Company</label>
                                            <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company" value="{{ $contact['company'] }}">

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
                    </div>
                    

                    <a class="btn btn-sm rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#UID-{{ $contact['phone'] }}"><i class="fas fa-trash"></i></a>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="UID-{{ $contact['phone'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="w-100 mb-3">
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $contact['name'] }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>{{ $contact['phone'] }}</td>
                                        </tr>
                                    </table>
                                    <form method="post" action="{{ route('deleteContact', $contact) }}">
                                        @csrf
                                        {{-- Delete Method For Laravel --}}
                                        @method('DELETE')

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Delete Contact</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
@endsection