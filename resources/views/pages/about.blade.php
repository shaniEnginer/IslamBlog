@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
    
<h1>EXPERIMENT WEBSIT</h1>
<aside> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sequi dolores beatae quos earum aperiam quis qui, maxime temporibus recusandae nobis inventore vero doloremque. Fugiat deserunt doloremque quia recusandae nam. </aside>
<hr>
<h2>Need some help ?</h2>
<h2>Email Us</h2>

<form action="">

<div class="form-group row">
    <label for="email">Email</label>
    <input class="form-control" type="email" name="email" >
</div>

<div class="form-group row">
        <label for="email">Message</label>
        <textarea name="body" class="form-control" cols="20" rows="5"></textarea>
    </div>
    <button class="btn btn-default" name="submit">send</button>
</form>
</div>
        </div>
    </div>
@endsection