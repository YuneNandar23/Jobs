<?php

namespace App\Http\Controllers;

use App\Employee_Post;
use App\Employee;
use Auth;
use Illuminate\Http\Request;

class EmployeePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee_post = new Employee_Post();
        $employee = Employee::where('user_id', Auth::user()->id)->get();
        $employee_post->employee_id = $employee[0]->id;
        $employee_post->post_id = $request->postid;
        $employee_post->save();

        return view("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee_Post  $employee_Post
     * @return \Illuminate\Http\Response
     */
    public function show(Employee_Post $employee_Post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee_Post  $employee_Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee_Post $employee_Post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee_Post  $employee_Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee_Post $employee_Post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee_Post  $employee_Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee_Post $employee_Post)
    {
        //
    }
}
