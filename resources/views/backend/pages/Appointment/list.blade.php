
@extends('backend.master')
@section('content')
<h2>Appointment</h2>
<a class="btn btn-primary" href="{{route('appointment.create')}}">Add new</a>
<table class="table">
    <thead>
    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
    </thead>
    <tbody>
        @foreach($appo as $key => $data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>
            <a class="btn btn-info" href="{{route('appointment.edit', $data->id)}}">Edit</a>
            <a class="btn btn-danger" href="{{route('appointment.delete', $data->id)}}">delete</a>
            <!-- <a class="btn btn-success" href="{{route('appointment.view', $data->id)}}">view</a> -->
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection