@extends('layouts.app')
@section('content')
<div class="jumbotron">
<a class="btn btn-primary" href="/AsadApplication/public/posts">Go back</a>
<hr>
<h1>{{$myposts->title}}</h1>
<img style="width:100%" src="/storage/cover_images/{{$myposts->cover_image}}">

<p>{{$myposts->body}}</p>
<small> written at :{{$myposts->created_at}} </small>
{{-- by {{$post->User->name}}
  :{{auth()->user()->id}} </small> --}} 
<hr>
@if(!Auth::guest())
@if(Auth::user()->id ==$myposts->User_id)
<a class="btn btn-primary" href="/AsadApplication/public/posts/{{$myposts->id}}/edit">Edit</a>
{{-- <a class="btn btn-primary" href="/posts/{{$myposts->id}}/edit">Edit</a> --}}
<form style="float:right " action="{{action('PostsController@destroy', $myposts->id)}}" method="post" >
    @csrf
    <input name="_method" type="hidden" value="DELETE">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
  @endif
  @endif
</div>

@endsection