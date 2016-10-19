@extends('layout.master')

@section('content')
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
    	<div class="row panel">
    		<div class="col-md-4 bg_blur ">
    		</div>
            <div class="col-md-8  col-xs-12">
               <img src="https://unsplash.it/200/200?random" class="img-thumbnail picture hidden-xs" />
               <img src="https://unsplash.it/200/200?random" class="img-thumbnail visible-xs picture_mob" />
               <div class="header">
                    <h1>{{$user->name}}</h1>
                    <h4>{{$user->email}}</h4>
                    <span>User Since: {{$user->created_at->diffForHumans()}}</span>
                    @if (Auth::check() && $user->id == Auth::id())
                        <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit User</a>
                    @endif
               </div>
            </div>
        </div>
    </div>
    <div class="container">
      {{-- <div class="well">
          <div class="media">
            <a class="pull-left" href="/users/{{$user->id}}">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="/users/{{$user->id}}">{{$user->name}}</a></h4>
              <p class="text-left">{{$user->email}}</p>
              <ul class="list-inline list-unstyled">
                <li>User Since: {{$user->created_at}}</span></li>
                <li>|</li>
                </ul>
                @if (Auth::check() && $user->id == Auth::id())
                    <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit User</a>
                @endif
           </div>
        </div>
      </div> --}}
      <br>
      <br>
      <br>
          @foreach ($posts as $post)
              <div class="well">
                  <div class="media">
                    <a class="pull-left" href="/posts/{{$post->id}}">
                        <img class="media-object" src="https://unsplash.it/200/200?image={{$i++}}">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                      <p class="text-left">{{$post->url}}</p>
                      <p class="text-left">{{$post->user->name}}</p>
                      <p>{{$post->content}}</p>
                      <ul class="list-inline list-unstyled">
                        <li><span><i class="glyphicon glyphicon-calendar"></i>{{$post->created_at}}</span></li>
                        <li>|</li>
                        <span><i class="glyphicon glyphicon-comment"></i></span>
                        <li>|</li>
                        <li>
                           <span class="glyphicon glyphicon-triangle-top"></span>
                           {{$post->getUpVotes()}}
                           <span class="glyphicon glyphicon-triangle-bottom"></span>
                           {{$post->getDownVotes()}}
                        </li>
                        <li>|</li>
                        </ul>
                        @if (Auth::check() && $post->created_by == Auth::id())
                        <button class="btn btn-default"><a href="/posts/{{$post->id}}/edit">Edit Post</a></button>
                        @endif
                   </div>
                </div>
              </div>
          @endforeach
          <div class="row">
              <div class="text-center">{!! $posts->render() !!}</div>
          </div>
    </div>
@stop
