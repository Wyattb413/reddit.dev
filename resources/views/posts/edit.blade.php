@extends('layouts.master')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', 1) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
        Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
		URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
		Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content') }}</textarea>
		<input class="btn-success btn" type="submit">
	</form>
@stop
