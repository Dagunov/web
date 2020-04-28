@extends('page')

@section('title')
Items
@endsection

@section('content')
<form action="\lr-laravel\public\item" method="post">
	@csrf
	<div>
		<label for="find">Enter id of the item, which you want to find:</label>
		<input name="id" value="index">
	</div>
	<div>
		<button>Find!</button>
	</div>
</form>
<form action="\lr-laravel\public\price-search" method="post">
	@csrf
	<div>
		<label for="find">Enter price of the item you are looking for:</label>
		<input name="val" value="price">
	</div>
	<div>
		<button>Search!</button>
	</div>
</form>
@endsection