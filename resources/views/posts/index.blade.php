@extends('layouts.app')
@section('content')

<h1>Posts</h1>
@if(count($myposts)>0)
@foreach($myposts as $post)
<h3><a href="/AsadApplication/public/posts/{{$post->id}}">{{$post->title}}</a></h3>


{{-- <div class="row">
    <div class="col-md-4 col-sm-4">
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    </div> --}}




<p>{{$post->body}}</p>
<small><strong> Created at :{{ date('M j,Y h:ia',strtotime($post->created_at))}}</strong> 
   
   <span style="color:red"> By {{$post->User->name}}</span> 
    {{-- {{$post->user->name}} --}}
</small>
<hr>
@endforeach
{{$myposts->links()}}
@else
<h3>no Post Found yet !</h3>
@endif
@endsection