@extends('layouts.app')

@section('content')
    <h1>Editing the request</h1>
    <div class="row">
    <div class="col-sm-3">
    {!! Form::model($wash, ['method'=>'PATCH','action'=>['WashController@update',$wash->id]]) !!}
        <div class='form-group'>
    {!! Form::label('Status','Status:') !!}
    {!! Form::select('Status',['Accepted'=>'Accepted','Declined'=>'Declined'],null,['class'=>'form-control']) !!}
        </div>
        <div class='form-group'>

            {!! Form::label('Driver','Driver:') !!}
            {!! Form::select('Driver',[''=>'Choose Options']+$drivers,null,['class'=>'form-control']) !!}
        </div>

    <div class='form-group'>

        {!! Form::submit('Update request',['class'=>'btn btn-primary col-sm-6']) !!}

 </div>
        <div class='form-group'>
        <a class="btn btn-primary form-control col-sm-6"  href="{{ route('home') }}">cancel</a>
        </div>

 {!! Form::close() !!}
    </div>
    </div>
    <div class="row">

        @include('includes.form_error')
    </div>
    @endsection
