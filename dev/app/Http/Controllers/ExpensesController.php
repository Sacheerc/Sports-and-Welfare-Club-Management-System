<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ExpensesController extends Controller
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
    //addExpenses form view

    public function addExpensesFormView(){
        return view('expenses.addExpensesForm');
    }

    //addExpenses
    public function addExpenses(Request $request){
        $expense=new Expenses();
        $expense->category=$request->category;
        $expense->description=$request->description;
        $expense->chequeNo=$request->chequeNo;
        $expense->amount=$request->amount;
        $expense->exDateTime=Carbon::now();

        $expense->save();
        return view('expenses.addExpensesForm');

    }
    //viewExpenses
    public function viewExpenses(){
        $expenses=db::table('expenses')->get();
        return view('expenses.viewExpenses',compact('expenses'));
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenses $expenses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenses $expenses)
    {
        //
    }
}
