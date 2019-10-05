
@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('employee_post.store') }}">
            @csrf
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    <h4> Description: </h4> {{$post->description}}
                    <br>
                    <hr>
                    <b> Total Posts: </b> <font color="green"> {{$post->post}} </font>
                    <br>
                    <b> Gender: </b> <font color="black"> {{$post->gender}} </font>
                    <br>
                    @if(($post->salary)==0)
                        <b> Salary: </b> <font color="black"> N/A </font>
                    @else
                        <b> Salary: </b> <font color="black"> {{$post->gender}} </font>
                    @endif
                    <br>
                    <b> Working Hours: </b> <font color="black"> {{$post->officetime}} </font>
                    <input type="text" id="postid" name="postid" value="{{$post->id}}" hidden>
                    <br> <hr>
                    @guest
                        <font color="red"> You can't apply a job as long as you register an employee panel</font>
                        &nbsp <a href="{{ route('login') }}"> Login Here </a> or <a href="{{ route('register') }}"> Register Here</a>                                          
                    @else
                        @if($emp!=0)
                            <button style="background-color:#ebfffb; width:200px; height:30px;"> Apply </button>
                        @else
                            <font color="red"> You can't apply a job as long as you register an employee panel</font>
                            &nbsp <a href="{{ route('employees.create') }}"> Register Employee Account Here</a>
                        @endif
                    @endguest
                    
                </div>
            </div>
            </form>
        </div>
    </div>
</div> 
@endsection

