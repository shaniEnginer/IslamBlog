@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header"><h2>{{ __('Create Post') }}</h2></div>
                <div class="card-body">

{{-- Opening Form --}}
                    <form method="POST" action="{{url('posts')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
    <label for="title" >{{ __('title') }}</label>
                      <input  type="text" name="title" class="form-control"  value="{{ old('title') }}" >
                       </div>

                        <div class="form-group row">
                            <label for="body">{{ __('body') }}</label>
                            <textarea name="body" id="article-ckeditor" class="form-control" cols="20" rows="5">{{ old('body') }}</textarea>
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
