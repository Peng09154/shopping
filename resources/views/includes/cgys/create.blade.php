@extends('layouts.site')

@section('title','新增分類')
 
@section('content')

{{Form::open(['action'=>'CgyController@store','role'=>'form','files'=>true])}}	
	@include('includes.cgys._form')
{{Form::close()}}

@stop


