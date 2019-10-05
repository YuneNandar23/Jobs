<?php

namespace App\Http\Controllers;

use App\Post;
use App\Company;
use App\Bank;
use App\Employee;
use App\Employee_Post;
use Auth;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            $posts = Post::all();        
            $emp = count(Employee::where('user_id', Auth::user()->id)->get());
            
            return view ("posts.index",[
                "posts" => $posts,            
                "emp" => $emp,
            ]);
        }else{
            $posts = Post::all();                    
            
            return view ("posts.index",[
                "posts" => $posts,  
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showcompany = Company::where('user_id', Auth::user()->id)->get();

        return view ("posts.create",[
            "showcompany" => $showcompany,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $bank = new Bank();

        $company = Company::where('user_id', Auth::user()->id)->get();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->post = $request->posts;
        $post->gender = $request->gender;
        $post->salary = $request->salary;
        $post->officetime = $request->time;
        $post->company_id = $company[0]->id;
        $post->save();

        $mybank = Bank::where('user_id', Auth::user()->id)->get();
        $admbank = Bank::where('id', 1)->get();

        DB::table('banks')
            ->where('id', $mybank[0]->id)
            ->update(['balance' => (($mybank[0]->balance)-500)]);

        DB::table('banks')
        ->where('id', 1)
        ->update(['balance' => (($admbank[0]->balance)+500)]);

        return view("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if(Auth::user()){
            $emp = count(Employee::where('user_id', Auth::user()->id)->get());

            return view ("posts.show",[
                "post" => $post,
                "emp" => $emp,
            ]);
        }else{
            return view ("posts.show",[
                "post" => $post,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
