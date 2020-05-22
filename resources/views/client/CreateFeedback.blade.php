@extends('layouts.app')

@section('content')
    <h1>Requesting a wash </h1>
    {{--<div class="row">--}}
    {!! Form::open(['method'=>'POST','action'=>'FeedbackController@store']) !!}

    <input type="hidden" value="{{$wash->id}}" name="wash_id">
    <div class='form-group'>
        {!! Form::label('comment','Comment:') !!}
        {!! Form::text('comment',null,['class'=>'form-control']) !!}
    </div>
    <div class='form-group'>

        {!! Form::label('rating','Rating:') !!}
        {!! Form::select('rating',[''=>'Choose Rating']+['1','2','3','4','5'],null,['class'=>'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::submit('Create ',['class'=>'btn btn-primary']) !!}
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
