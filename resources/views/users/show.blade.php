@extends('layout.master')

@section('content')
    <div class="container">
      <div class="well">
          <div class="media">
            <a class="pull-left" href="/users/{{$user->id}}">
                <img class="media-object" src="http://placekitten.com/200/200">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="/users/{{$user->id}}">{{$user->name}}</a></h4>
              <p class="text-left">{{$user->email}}</p>
              <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"></i>{{$user->created_at}}</span></li>
                <li>|</li>
                <span><i class="glyphicon glyphicon-comment"></i></span>
                <li>|</li>
                <li>
                   <span class="glyphicon glyphicon-triangle-top"></span>
                   <span class="glyphicon glyphicon-triangle-bottom"></span>
                </li>
                <li>|</li>
                <li>
                </li>
                </ul>
                @if (Auth::check() && $user->id == Auth::id())
                    <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit User</a>
                @endif
           </div>
        </div>
      </div>
    </div>
@stop
