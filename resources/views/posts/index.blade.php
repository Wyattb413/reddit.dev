@extends('layout.master')

@section('content')
	<div class="container">
		@if(Request::has('search'))
		<div class="row showingResults">
			Showing Results {{$posts->firstItem()}} - {{$posts->lastItem()}} of {{$posts->total()}}
		</div>
		@endif
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
			  			<li><span><i class="glyphicon glyphicon-calendar"></i>Posted On: {{$post->created_at->diffForHumans()}}</span></li>
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
				   </div>
				</div>
			  </div>
		@endforeach
		<div class="row">
			<div class="text-center">{!! $posts->appends(['search' => Request::get('search')])->render() !!}</div>
		</div>
	</div>
@stop
