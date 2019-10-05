<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        .navbar{
            background-color: #ffdbc7 !important;
        }

        .nav-link{
            color: white !important;
            font-size: 20px;            
        }

        a:hover { 
            background-color: none;
        }

        body {
            background-image: url("images/bg.png");
            background-size: 100% 700px;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logo.jpg" width="70px" height="70px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        Welcome, {{$showcompany[0]->name}}
                        &nbsp &nbsp
                        <a href="{{ route('companies.index') }}"> 
                            <font style="color:black"> 
                               <b> Dashboard </b>
                            </font>
                        </a>
                        &nbsp | &nbsp
                        <a href="{{ route('posts.create') }}"> 
                            <font style="color:black"> 
                                <b> Create New Posts </b>
                            </font>
                        </a>
                    </ul> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>            
        </nav>
        <div class="row">
            <div class="col-md-12 col-sm-12" style="padding-left:50px; padding-top:50px;">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <h3> Create Post: </h3>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-8">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-8">
                            <input style="height:200px" id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="posts" class="col-md-2 col-form-label text-md-right">{{ __('Posts') }}</label>

                        <div class="col-md-2">
                            <input id="posts" type="text" class="form-control" name="posts" value="{{ old('posts') }}">
                        </div>

                        <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Gender') }}</label>

                        <div class="col-md-2">
                            <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="salary" class="col-md-2 col-form-label text-md-right">{{ __('Salary') }}</label>

                        <div class="col-md-2">
                            <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}">
                        </div>

                        <label for="time" class="col-md-2 col-form-label text-md-right">{{ __('Time') }}</label>

                        <div class="col-md-2">
                            <input id="time" type="text" class="form-control" name="time" value="{{ old('time') }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-12 offset-md-2">
                            <button style="width:200px;" type="submit" class="btn btn-primary">
                                {{ __('Post') }}
                            </button>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
</body>
</html>
