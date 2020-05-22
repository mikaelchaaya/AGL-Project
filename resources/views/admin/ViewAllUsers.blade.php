@extends('layouts.admin')

@section('content')

    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th></th>
            <th>Name</th>
            <th></th>
            <th>Email</th>
            <th></th>
            <th>Role</th>
            <th></th>
            <th>Created</th>
            <th></th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if ($users)
            @foreach ($users as $user)
                <tr>

                    <th scope="row">{{$user->id}}</th>
                    <td></td>
                    <td> <a href="./AdminUpdateUser/{{$user->id}}">{{$user->name}}</a></td>
                    <td></td>
                    <td>{{$user->email}}</td>
                    <td></td>
                    <td>{{$user->rolename }}</td>
                    <td></td>
                    <td>{{$user->created_at}}</td>
                    <td></td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
    @endforeach
    @endif

        </tbody>
    </table>

@endsection
