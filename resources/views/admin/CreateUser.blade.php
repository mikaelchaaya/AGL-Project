@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    <div class="row">

        {!! Form::open(['method'=>'POST','action'=>'Admin\AdminUserController@store']) !!}
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
            {!! Form::select('rolename',[''=>'Choose Options']+['admin','client','driver','store'],null,['class'=>'form-control']) !!}




        <div class='form-group'>
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>



        <div class='form-group'>
            {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}

    </div>

    <div class="row">

        @include('includes.form_error')
    </div>


@stop
