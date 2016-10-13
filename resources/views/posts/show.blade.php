@extends('layout.master')

@section('content')
    <div class="container">
      <div class="well">
          <div class="media">
            <a class="pull-left" href="/posts/{{$post->id}}">
                <img class="media-object" src="http://placekitten.com/150/150">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
              <p class="text-left">{{$post->url}}</p>
              <p>{{$post->content}}</p>
              <ul class="list-inline list-unstyled">
                <li><span><i class="glyphicon glyphicon-calendar"></i>{{$post->created_at}}</span></li>
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
                <button class="btn btn-default"><a href="/posts/{{$post->id}}/edit">Edit Post</a></button>
           </div>
        </div>
      </div>
    </div>
@stop
