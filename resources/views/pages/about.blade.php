@extends('layouts.layout')
@section('title')
	About Us
@stop

@section('body')
	<h1> This is about page. </h1>
	<p>{{$companyName}}</p>

	@if($isUserRegistered == true)
		Hello mate!
	@else 
		Please register!
	@endif
	<br>
	@foreach($users as $data)
		{{$data}}<br>

	@endforeach
@stop

