@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="row">

 {!! Form::model($user, ['method'=>'PUT','action'=>['Admin\AdminUserController@update',$user->id]]) !!}
            <div class='form-group'>
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null,['class'=>'form-control']) !!}
            </div>

        <div class='form-group'>
            {!! Form::label('rolename','Role:') !!}
            {!! Form::select('rolename',[''=>'Choose Options']+['admin','client','store'],null,['class'=>'form-control']) !!}
        </div>



            <div class='form-group'>
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>



            <div class='form-group'>
                {!! Form::submit('Update User',['class'=>'btn btn-primary col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE','action'=>['Admin\AdminUserController@destroy',$user->id] ]) !!}
            <div class='form-group'>
                {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}

        </div>



    <div class="row">
        @include('includes.form_error')
    </div>

@stop
