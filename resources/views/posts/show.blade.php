@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="well">
                <h1 class="">{{$post->title}}</h1>
                <h4>By: <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></h4>
                <span><i class="glyphicon glyphicon-calendar"></i> {{$post->created_at->diffForHumans()}}</span>
                <ul class="list-inline list-unstyled">
                    <li>|</li>
                    <li>
                        <form method="POST" action="{{action('PostsController@vote')}}">
                          {!! csrf_field() !!}
                          <input class="inputPostId" type="text" name="postId" value="{{$post->id}}">
                          <button id="voteUpButton" name="vote" type="submit" value="1" class="voteButton"><span class="glyphicon glyphicon-triangle-top"></span></button>
                          {{$post->getUpVotes()}}
                          <button id="voteDownButton" name="vote" type="submit" value="0" class="voteButton"><span class="glyphicon glyphicon-triangle-bottom"></span></button>
                          {{$post->getDownVotes()}}
                       </form>
                    </li>
                    <li>|</li>
                </ul>
                @if (Auth::check() && $post->created_by == Auth::id())
                <button class="btn btn-default"><a href="/posts/{{$post->id}}/edit">Edit Post</a></button>
                @endif
                <hr class="style2">
                <img class="center-block" src="https://unsplash.it/1000/300?image={{$i = rand(0, 1084)}}">
                <p class="text-center">URL: <a href="{{$post->url}}">{{$post->url}}</a></p>
                <p class="text-center">{{$post->content}}</p>
            <div>
        <div>
    </div>
@stop
