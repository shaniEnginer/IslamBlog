<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UsmanAppication') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
            <div id="app">
                    
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2>{{ config('app.name', 'UsmanApplication') }}</h2>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- Left Side Of Navbar -->
<ul class="nav nav-tabs">
<ul class="nav navbar-nav">.
        <li class="nav-item">
            <strong> <a class="nav-link" href="/AsadApplication/public/">Home</a></strong>
            </li>
        
            <li class="nav-item">
                <strong> <a class="nav-link" href="/AsadApplication/public/services">Services</a></strong>                
                </li>


            <li class="nav-item">
            <strong> <a class="nav-link" href="/AsadApplication/public/about">About</a></strong>                
            </li>

            

                <li class="nav-item">
                    <strong> <a class="nav-link" href="/AsadApplication/public/posts">Blog</a></strong>                
                    </li>


                <li class="nav-item">
                    <strong> <a class="nav-link" href="/AsadApplication/public/posts/create">Create Post</a></strong>                
                    </li>
                </ul>                      
                    </ul>

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<strong>                {{ Auth::user()->name }}</strong> <span class="caret"></span>
            </a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" href="/AsadApplication/public/home">Dashboard</a>
        <a class="dropdown-item" href="{{route('profile.Update')}}">Update Profile</a>
                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @include('part.messages');
            @yield('content')
        </div>    
        </main>
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

</body>
</html>
