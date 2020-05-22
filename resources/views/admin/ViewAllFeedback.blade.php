@extends('layouts.admin')

@section('content')

    <h1>Feedbacks</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th></th>
           <th>Comment</th>
            <th></th>
           <th>Rating</th>
            <th></th>
            <th>User</th>
            <th></th>
            <th>Store</th>
            <th></th>
            <th>Driver</th>
            <th></th>
           <th>Created</th>
            <th></th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if ($feedbacks)
            @foreach ($feedbacks as $feedback)
                <tr>

                    <th scope="row">{{$feedback->id}}</th>
                    <td></td>
                    <td> {{$feedback->comment}}</td>
                    <td></td>
                    <td>{{$feedback->rating}}/5</td>
                    <td></td>
                    <td>{{$feedback->Wash->Client->name }}</td>
                    <td></td>
                    <td>{{$feedback->Wash->Store->name }}</td>
                    <td></td>
                    <td>{{$feedback->Wash->Driver->name }}</td>
                    <td></td>
                    <td>{{$feedback->created_at}}</td>
                    <td></td>
                    <td>{{$feedback->updated_at}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
