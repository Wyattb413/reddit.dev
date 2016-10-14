@extends('layout.master')

@section('content')
	<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
        <input class="form-control" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
		<input class="form-control" type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
		<textarea class="form-control" name="content" rows="5" cols="40">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
		<input class="btn-success btn customSubmitBtn" type="submit">
	</form>
    <form class="form" method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
        {!! csrf_field() !!}
		{!! method_field('DELETE') !!}
        <button class="btn btn-danger deleteButton" type="submit">Delete Post</button>
    </form>
@stop
