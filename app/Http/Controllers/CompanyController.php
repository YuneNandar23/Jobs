<?php

namespace App\Http\Controllers;

use App\Company;
use App\Bank;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showcompany = Company::where('user_id', Auth::user()->id)->get();
        $posts = Post::where('company_id', $showcompany[0]->id)->get();

        return view ("companies.index",[
            "showcompany" => $showcompany,
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

        return view ("companies.create",[
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
        $company = new Company();
        $bank = new Bank();

        $company->photo = "/images/com.png";
        $company->name = $request->name;
        $company->phone = $request->phone;
        $company->description = $request->about;
        $company->address = $request->address;
        $company->user_id = Auth::user()->id;
        $company->save();

        $showcompany = Company::where('user_id', Auth::user()->id)->get();

        $bankcount = count(Bank::where('user_id', Auth::user()->id)->get());

        if($bankcount==0){
            $bank->number = $request->card;
            $bank->cvv = $request->cvv;
            $bank->balance = 10000000;
            $bank->expired = $request->exp;
            $bank->user_id = Auth::user()->id;
            $bank->save();
        }

        return view("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
