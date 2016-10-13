@extends('layout.master')

@section('content')
    <div class="container">
        @foreach ($users as $user)
              <div class="well">
                  <div class="media">
                  	<a class="pull-left" href="#">
                		<img class="media-object" src="http://placekitten.com/200/200">
              		</a>
              		<div class="media-body">
                		<h4 class="media-heading">{{$user->name}}</h4>
                      <p class="text-left">{{$user->email}}</p>
                      {{-- <p>{{$post->content}}</p> --}}
                      <ul class="list-inline list-unstyled">
              			<li><span><i class="glyphicon glyphicon-calendar"></i>Created On: {{$user->created_at->setTimezone('America/Chicago')->format('l, F jS Y')}}</span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i></span>
                        <li>|</li>
                        <li>
                           <span class="glyphicon glyphicon-triangle-top"></span>
                           <span class="glyphicon glyphicon-triangle-bottom"></span>
                        </li>
                        <li>|</li>
                        <li>
                        <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
                          <span><i class="fa fa-facebook-square"></i></span>
                          <span><i class="fa fa-twitter-square"></i></span>
                          <span><i class="fa fa-google-plus-square"></i></span>
                        </li>
            			</ul>
                   </div>
                </div>
              </div>
        @endforeach
        <div class="row">
            <div class="text-center">{!! $users->render() !!}</div>
        </div>
    </div>
@stop
