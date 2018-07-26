@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header"><h2>{{ __('Edit Post') }}</h2></div>
                <div class="card-body">
{{-- Opening Form --}}
                    <form method="POST" action="{{action('PostsController@update', $post->id)}}" >
                        @csrf
                    {{-- <input type="hidden" name="_method" > --}}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group row">
                      <label for="title" >{{ __('Name') }}</label>
                      <input  type="text" name="title" class="form-control"  value="{{$post->title }}" >
                       </div>

                        <div class="form-group row">
                            <label for="body">{{ __('body') }}</label>
                            <textarea name="body" class="form-control">{{$post->body }}</textarea>
                        </div>
                                  
                        <div class="form-group">
                            <input type="file" name="cover_image">
                        </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary" name="submit" >
                                    {{ __('submit') }}
                                </button>
                            </div>        
                        </div>
                    </form>
                    {{-- Closing Form --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
