@extends('page')

@section('title')
@if($obj->bad_param)
Error!
@else
{{$obj->name}}
@endif
@endsection

@section('content')
@if($obj->bad_param)
<h1>Error!</h1><br>Try different id!
@else
This is a page for a {{$obj->name}}.<br>
Description of an item:<br>
{{$obj->descr}}<br>
You can buy it for only {{$obj->price}}!
@endif
@endsection