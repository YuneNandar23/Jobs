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
            background-color: #ebfffb !important;
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
                        Welcome, {{$emp->name}}
                        &nbsp &nbsp
                        <a href="{{ route('employees.index') }}"> 
                            <font style="color:black"> 
                               <b> Dashboard </b>
                            </font>
                        </a>
                        &nbsp | &nbsp
                        <a href="{{ route('posts.index') }}"> 
                            <font style="color:black"> 
                                <b> View Jobs </b>
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
            <div class="col-md-6 col-sm-12" style="padding-left:50px; padding-top:50px;">
                <h3> Saved Posts: </h3>
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr style="background-color:#ebfffb; color:black;">
                        <th> Post Id. </th>
                        <th> Applied At. </th>
                        <th> View Post. </th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td> {{$post->post_id}} </td>
                        <td> {{$post->created_at}} </td>
                        <td> <a href="{{ route('posts.show', $post->id) }}"> <button style="background-color:#ebfffb; color:black;"> View </button> </a> </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</body>
</html>
