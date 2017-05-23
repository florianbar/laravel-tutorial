@extends('layout')

@section('content')
	<h1>Create a post</h1>

	<form method="POST" action="/posts">
		{{ csrf_field() }}

		<label>Title:</label><br>
		<input type="text" name="title"><br><br>
		
		<label>Body:</label><br>
		<input type="text" name="body"><br><br>
		
		<input type="submit" value="Publish">
	</form>

	@include('form-errors')
@endsection