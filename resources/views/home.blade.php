@extends('layouts.app')


@section('content')
  <h1>home</h1>
@endsection

@section('sidebar')
  @parent
  <p>this is appended to the sidebar</p>
@endsection
