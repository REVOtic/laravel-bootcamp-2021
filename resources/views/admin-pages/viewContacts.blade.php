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
                    {{-- <a class="btn btn-sm rounded btn-danger" href="{{ route('editContact') }}"><i class="fas fa-pen"></i></a> --}}
                    <a class="btn btn-sm rounded btn-secondary" data-bs-toggle="modal" data-bs-target="#UID-{{ $contact['phone'] }}"><i class="fas fa-trash"></i></a>

                    <!-- Modal -->
                    <div class="modal fade" id="UID-{{ $contact['phone'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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