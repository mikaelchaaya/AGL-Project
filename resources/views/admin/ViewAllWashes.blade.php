@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table col-1">
        <thead>
        <tr>
            <th>Id</th>
            <th></th>
           <th>Description</th>
            <th></th>
            <th>Client</th>
            <th></th>
            <th>Store</th>
            <th></th>
            <th>Driver</th>
            <th></th>
            <th>Status</th>
            <th></th>
            <th>Created</th>
            <th></th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if ($washes)
            @foreach ($washes as $wash)
                <tr>
                     <td >{{$wash->id}}</td>
                    <td></td>
                     <td> {{$wash->Description}}</td>
                    <td></td>
                     <td>{{$wash->Client->name }}</td>
                    <td></td>
                     <td>{{$wash->Store->name }}</td>
                    <td></td>
                    <td>{{$wash->Driverid  == NULL ? 'Driver not assigned yet' :$wash->Driver->name}}</td>
                    <td></td>
                     <td>{{$wash->Status}}</td>
                    <td></td>
                    <td>{{$wash->created_at->diffForHumans()}}</td>
                    <td></td>
                    <td>{{$wash->updated_at->diffForHumans()}}</td>
                </tr>

    @endforeach
    @endif
        </tbody>
    </table>


@endsection
