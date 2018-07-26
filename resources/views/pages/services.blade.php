@extends('layouts.app')
@section('content')
@if($menu)
<div class="col-md-8">
        
<h1>We provide  Services in following programing Languages</h1>
</div>
@foreach( $menu as $mn)
<ul class="list-group">
<li class="list-group-item">{{$mn}}</li>
</ul>
@endforeach
@else
<p>Noting Found</p>

@endif
<hr>
<div class="row">
        <div class="col-lg-4">
          <h2>C++</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="index.html#" role="button">C++ &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>JAVASCRIPT</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="index.html#" role="button">Javascript &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>PHP 7</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="index.html#" role="button">php &raquo;</a></p>
        </div>
      </div>

@endsection