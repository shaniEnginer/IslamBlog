@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
<h1>Welcome to UsmanApplication</h1>
<p> This is the Test Web site and created by form the Different Youtubers  </p>
<p> <span>   <a  class="btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }}</a>
</span>                           
    <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a></span> </p> 
</div>


@endsection     