
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CRUD</div>

                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                    <button class="btn btn-outline-info">Edit</button>
                                    <button class="btn btn-outline-warning">Delete</button>

                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
