
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CRUD</div>

                    <div class="card-body">
                        <h2> {{Session::get('message')}} </h2>

                        <form action="{{route('contacts.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input name="phone" type="number" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea name="message" id="" cols="10" rows="5"></textarea>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-warning" type="submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
