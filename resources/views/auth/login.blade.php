@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
        	<form class="form" method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
        		{!! csrf_field() !!}
                <h1 class="createAnAccountHeader">Login</h1>
        		<input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('email')}}
                    </div>
                @endif
        		<input class="form-control" type="password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('password')}}
                    </div>
                @endif
                <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password">
                @if ($errors->has('confirmPassword'))
                    <div class="alert alert-danger">
                      <strong>Warning:</strong> {{$errors->first('confirmPassword')}}
                    </div>
                @endif
                <input class="btn-success btn customSubmitBtn" type="submit">
        	</form>
        </div>
    </div>
@stop
