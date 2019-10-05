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
        body {
            background-image: url("images/bg.png");
            background-size: 100% 700px;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="row">
            @if($company>=1)
                <div class="col-md-6 col-sm-12" style="padding-top:100px; padding-left:50px; height:400px">
                    <img src="/images/com.png" width="100px" height="100px"> <br>
                    <font size="6">                 
                        <label style="margin-top:10px;"> ENTER YOUR COMPANY PANEL: </label>
                    </font>  <br>
                    <a href="{{ route('companies.index') }}"> <button style="background-color:#ffdbc7; width:200px; height:30px;"> Enter Company </button> </a>
                </div>
            @else
                <div class="col-md-6 col-sm-12" style="padding-top:100px; padding-left:50px; height:400px">
                    <img src="/images/com.png" width="100px" height="100px"> <br>
                    <font size="6">                 
                        <label style="margin-top:10px;"> REGISTER AS COMPANY: </label>
                    </font>  <br>
                    <a href="{{ route('companies.create') }}"> <button style="background-color:#ffdbc7; width:200px; height:30px;"> Register Company </button> </a>
                </div>
            @endif

            @if($employee>=1)
                <div class="col-md-6 col-sm-12" style="padding-top:100px; padding-left:50px; height:300px">
                    <img src="/images/emp.png" width="100px" height="100px"> <br>
                    <font size="6">                 
                        <label style="margin-top:10px;"> ENTER EMPLOYEE: </label>
                    </font>  <br>
                    <a href="{{ route('employees.index') }}"> <button style="background-color:#ebfffb; width:200px; height:30px;"> Enter Employee </button> </a>
                </div>
            @else
                <div class="col-md-6 col-sm-12" style="padding-top:100px; padding-left:50px; height:300px">
                    <img src="/images/emp.png" width="100px" height="100px"> <br>
                    <font size="6">                 
                        <label style="margin-top:10px;"> REGISTER AS EMPLOYEE: </label>
                    </font>  <br>
                    <a href="{{ route('employees.create') }}"> <button style="background-color:#ebfffb; width:200px; height:30px;"> Register Employee </button> </a>
                </div>
            @endif
        </div>
        <div class="row" style="background-color:#ebfffb;">
            <div class="col-md-6 col-sm-12" style="float:left; padding-left:100px; padding-top;50px;">
                
            </div>
            <div class="col-md-1 col-sm-12" style="float:left;"></div>
            <div class="col-md-5 col-sm-12" style="float:left; padding-top:10px;">
                <br>
                <b> Address: </b> No.20, Pyay Road, Sanchaung, Yangon, Myanmar.
                <br>
                <b> E-mail: </b> helper-office@gmail.com
                <br>
                <b> Phone: </b> +959 779 921 001
            </div>
        </div>
    </div>
</body>
</html>
