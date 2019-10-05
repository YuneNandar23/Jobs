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
        <div class="row" style="padding-left:150px; padding-top:50px;">
        <form method="POST" action="{{ route('employees.store') }}">
            @csrf
            <h3> Register Employee: </h3>
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-10">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-2 col-form-label text-md-right">{{ __('Phone') }}</label>

                <div class="col-md-10">
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Gender') }}</label>

                <div class="col-md-10">
                    <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="dob" class="col-md-2 col-form-label text-md-right">{{ __('D.O.B') }}</label>

                <div class="col-md-10">
                    <input id="dob" type="text" class="form-control" name="dob" value="{{ old('dob') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="age" class="col-md-2 col-form-label text-md-right">{{ __('Age') }}</label>

                <div class="col-md-10">
                    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="nrc" class="col-md-2 col-form-label text-md-right">{{ __('N.R.C') }}</label>

                <div class="col-md-10">
                    <input id="nrc" type="text" class="form-control" name="nrc" value="{{ old('nrc') }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="col-md-12">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
                </div>
            </div>

            @if($bank==0)            
                <h3> Payment Method: </h3>
                <div class="form-group row">
                    <label for="card" class="col-md-2 col-form-label text-md-right">{{ __('Card') }}</label>

                    <div class="col-md-10">
                        <input id="card" type="text" class="form-control" name="card" value="{{ old('card') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cvv" class="col-md-2 col-form-label text-md-right">{{ __('CVV') }}</label>

                    <div class="col-md-4">
                        <input id="cvv" type="text" class="form-control" name="cvv" value="{{ old('cvv') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exp" class="col-md-2 col-form-label text-md-right">{{ __('EXP') }}</label>

                    <div class="col-md-4">
                        <input id="exp" type="text" class="form-control" name="exp" value="{{ old('exp') }}">
                    </div>
                </div>
            @endif

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
        </div>
        <br>
        <div class="row" style="background-color:#ffdbc7;">
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
