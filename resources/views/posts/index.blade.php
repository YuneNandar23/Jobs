
@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">        
            <div class="row">
                @foreach($posts as $post)
                        <div class="col-md-4 col-sm-12" style="background:white; padding-top:50px; padding-bottom:10px;">                        
                            <b> Title : </b> {{$post->title}} <br>
                            <b> Description : </b> {{$post->description}} <br>
                            <b> Posts : </b> {{$post->post}} persons <br>
                            <b> Genders : </b> {{$post->gender}} <br>

                            @if($post->salary==0)
                                Salary: N/A
                            @else
                                Salary: {{$post->salary}}
                            @endif
                            <br>
                            <a href="{{ route('posts.show', $post->id) }}"> <button style="background-color:#ffdbc7; width:200px; height:30px;"> View Post </button> </a>
                        </div>
                @endforeach
            </div>
        </div>   
@endsection

