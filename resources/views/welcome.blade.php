@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12" style="float:left;">
                <font size="6">                 
                    <label style="margin-top:10px;"> Find your new career now! button </label>
                </font>  &nbsp
                <a href="{{ route('posts.index') }}"> <button style="background-color:#ebfffb; width:200px; height:30px;"> Find Job </button> </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12" style="float:left;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uuVaDRDCwpc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
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
            <div class="col-md-1 col-sm-12" style="float:left;">
                <a href="https://ooredoo.com.mm/portal/en/index"> <img src="/images/ad.jpg"> </a>
            </div>
        </div>
    </div>    
@endsection

