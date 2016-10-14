@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
        	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
        		{!! csrf_field() !!}
        		<input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Title">
                @if ($errors->has('title'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('title')}}
                    </div>
                @endif
        		<input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="URL">
                @if ($errors->has('url'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('url')}}
                    </div>
                @endif
        		<textarea class="form-control" name="content" rows="5" cols="40" placeholder="Content">{{ old('content') }}</textarea>
                @if ($errors->has('content'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('content')}}
                    </div>
                @endif
                <input class="btn-success btn customSubmitBtn" type="submit">
        	</form>
        </div>
    </div>
@stop
