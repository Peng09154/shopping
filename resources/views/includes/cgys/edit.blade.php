@extends('layouts.site')

@section('title','分類編輯')

@section('content')
	{{Form::model($cgy,['method'=>'put','url'=>'cgys/'.$cgy->id,'role'=>'form','files'=>true])}}
		@include('includes.cgys._form')
	{{Form::close()}}
@stop



@extends('layouts.site')

@section('title','分類編輯')

@section('content')
	{{Form::model($cgy,['method'=>'put','url'=>'cgys/'.$cgy->id,'role'=>'form','files'=>true])}}
		@include('includes.cgys._form')
	{{Form::close()}}
@stop



