@extends('layout.master')

@section('form')
<h2>Forms</h2>

{{ Form::open(array('url' => 'foo/bar')) }}

{{ Form::close() }}


@endsection
