@extends('page')

@section('title')
@if(count($obj) === 0)
Error!
@elseif(count($obj) === 1)
{{$obj[0]->name}}
@else
Results
@endif
@endsection

@section('content')
@if(count($obj) === 0)
<h1>Error!</h1><br>Try different price!
@endif
@foreach($obj as $o)
Item: {{$o->name}}.<br>
Description of the item:<br>
{{$o->descr}}<br>
You can buy it for only {{$o->price}}!
<br><br>
@endforeach
@endsection