@extends('layout.master')

@section('content')
	<form class="form" method="POST" action="{{ action('UsersController@update', $user->id) }}">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}
        <input class="form-control" type="text" name="username" value="{{ (old('username') == null) ? $user->name : old('username') }}">
		<input class="form-control" type="text" name="email" value="{{ (old('email') == null) ? $user->email : old('email') }}">
		<input class="form-control" type="text" name="password" placeholder="Enter Password">
        <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password">
		<input class="btn-success btn customSubmitBtn" type="submit">
	</form>
    <form class="form" method="POST" action="{{ action('UsersController@destroy', $user->id) }}">
        {!! csrf_field() !!}
		{!! method_field('DELETE') !!}
        <button class="btn btn-danger deleteButton" type="submit">Delete User</button>
    </form>
@stop
