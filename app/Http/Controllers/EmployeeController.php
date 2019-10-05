<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Employee_Post;
use App\Bank;
use DB;
use Auth;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Employee::where('user_id', Auth::user()->id)->first();
        $posts = Employee_Post::where('employee_id', $emp->id)->get();

        return view ("employees.index",[
            "emp" => $emp,
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bank = count(Bank::where('user_id', Auth::user()->id)->get());
        
        return view ("employees.create",[
            "bank" => $bank,
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
        $employee = new Employee();
        $bank = new Bank();

        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->gender = $request->gender;
        $employee->nrc = $request->nrc;
        $employee->age = $request->age;
        $employee->dob = $request->dob;
        $employee->address = $request->address;
        $employee->user_id = Auth::user()->id;
        $employee->save();

        $bankcount = count(Bank::where('user_id', Auth::user()->id)->get());

        if($bankcount==0){
            $bank->number = $request->card;
            $bank->cvv = $request->cvv;
            $bank->balance = 10000000;
            $bank->expired = $request->exp;
            $bank->user_id = Auth::user()->id;
            $bank->save();
        }

        $mybank = Bank::where('user_id', Auth::user()->id)->get();
        $admbank = Bank::where('id', 1)->get();

        DB::table('banks')
            ->where('id', $mybank[0]->id)
            ->update(['balance' => (($mybank[0]->balance)-15000)]);

        DB::table('banks')
        ->where('id', 1)
        ->update(['balance' => (($admbank[0]->balance)+15000)]);

        return view("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
