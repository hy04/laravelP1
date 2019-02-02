@extends('layouts.app')


@section('content')
<h1>Contact</h1>
<!-- using laravel collective form  -->
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter email'])}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter your message'])}}
    </div>
    <div>
      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection
