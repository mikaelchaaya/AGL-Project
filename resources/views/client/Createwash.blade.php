@extends('layouts.app')

@section('content')
    <h1>Requesting a wash </h1>
{{--<div class="row">--}}
    {!! Form::open(['method'=>'POST','action'=>'WashController@store']) !!}
    <div class='form-group'>
        {!! Form::label('Description','Description:') !!}
        {!! Form::text('Description',null,['class'=>'form-control']) !!}
    </div>
    <div class='form-group'>

        {!! Form::label('Storeid','Store:') !!}
        {!! Form::select('Storeid',[''=>'Choose Options']+$stores,null,['class'=>'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::submit('Request ',['class'=>'btn btn-primary']) !!}
        <a class="btn btn-primary form-control col-sm-1"  href="{{ route('home') }}">cancel</a>
    </div>
    <div class='form-group'>

    </div>

    {!! Form::close() !!}
{{--</div>--}}
    <div class="row">

        @include('includes.form_error')
    </div>
@endsection
