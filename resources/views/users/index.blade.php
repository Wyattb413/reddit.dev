@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <form class="navbar-form navbar-right" role="search" method="GET" action="{{action('UsersController@index')}}" id="searchPosts">
              <div class="form-group">
                  <input type="text" name="search" class="form-control searchField" placeholder="Search Users">
                  <button type="submit" class="btn btn-default">Submit</button>
              </div>
          </form>
        </div>
        <div class="row">
            @foreach ($users as $user)
                  <div class="well">
                      <div class="media">
                      	<a class="pull-left" href="/users/{{$user->id}}">
                    		<img class="media-object" src="http://placekitten.com/200/200">
                  		</a>
                  		<div class="media-body">
                            <a class="" href="/users/{{$user->id}}">
                        		<h4 class="media-heading">{{$user->name}}</h4>
                            </a>
                          <p class="text-left">{{$user->email}}</p>
                          <ul class="list-inline list-unstyled">
                  			<li><span><i class="glyphicon glyphicon-calendar"></i>Created On: {{$user->created_at->setTimezone('America/Chicago')->format('l, F jS Y')}}</span></li>
                            <li>|</li>
                            <a href="/users/{{$user->id}}" class="btn btn-default">View User's Posts</a>
                			</ul>
                       </div>
                    </div>
                  </div>
            @endforeach
            <div class="row">
                <div class="text-center">{!! $users->render() !!}</div>
            </div>
        </div>
    </div>
@stop
