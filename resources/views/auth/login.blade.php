
@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12" style="float:left;">
                <font size="6">                 
                    <label style="margin-top:10px;"> Find your new career now! button </label>
                </font>  &nbsp
                <a href="{{ route('posts.index') }}"> <button style="background-color:#ebfffb; width:200px; height:30px;"> Find Job </button> </a>
            </div>
            
            <div class="col-md-6">
                @guest
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-12" style="text-align:right;">
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Register Now
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <font size="6">                 
                    <label style="margin-top:10px;"> You're now logged in as! </label>
                </font>  &nbsp <br>
                Go to admin panel:
                    <a href="{{ route('banks.index') }}"> <button style="background-color:#ebfffb; width:200px; height:30px;"> Enter </button> </a>
                @endguest
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-md-5 col-sm-12" style="float:left;">
                <h3> Top Employers Of 2018: </h3>
                <table width="auto" height="auto" border="1" style="margin-left:20px; background-color:#ffdbc7;">
                    <tr>
                        <td>
                            <a href="https://www.cbbank.com.mm"> <img src="/images/cb.png" width="200px" height="100px"> </a>
                        </td>
                        <td>
                            <a href="https://www.ayabank.com/en_US/"> <img src="/images/aya.png" width="200px" height="100px"> </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://trifinitymyanmar.com/"> <img src="/images/trifinity.png" width="200px" height="100px"> </a>
                        </td>
                        <td>
                            <a href="https://strategyfirst.edu.mm/"> <img src="/images/sf.png" width="200px" height="100px"> </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6 col-sm-12" style="float:left;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uuVaDRDCwpc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-1 col-sm-12" style="float:left;">
                <a href="https://ooredoo.com.mm/portal/en/index"> <img src="/images/ad.jpg"> </a>
            </div>
        </div>
    </div>    
@endsection

