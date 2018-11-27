<?php

namespace App\Http\Controllers;

use App\TotalBalance;
use Illuminate\Http\Request;
use App\Income;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Income.newIncome');
    }


    /**
     * Show the managable form with created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function manage()
    {
        $data = Income::all();
        return view('Income.manageIncome', ['Incomes' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(TotalBalance::all()->last()->total);
        $request->validate([
            'category'=>'required',
            'amount'=>'required',
            'chequenum'=>'unique:incomes,chequenum',
            'discription'=>'required'
        ]);// Validate the value...

        $Income = new Income;
        $Income->amount = $request->amount;
        $Income->chequenum = $request->chequenum;
        $Income->discription = $request->discription;
        $Income->category = $request->category;

        $Income->save();
        $total=TotalBalance::all()->last()->total;
        TotalBalance::create([
            'total' => $total+$request->amount,
            'operationvalue' => $request->amount,
            'type' => "Income",
        ]);
        $data = Income::all();
        $message="Added Success..!";
        return view('Income.manageIncome', ['Incomes' => $data])->with('message');
        //
    }

    public function save(Request $request, Income $Income)
    {

        $request->validate([
            'category'=>'required',
            'amount'=>'required',
            'chequenum'=>'exists:incomes,chequenum',
            'discription'=>'required'
        ]);// Validate the value...


        $Income->category = $request->category;
        $Income->amount = $request->amount;
        $Income->chequenum = $request->chequenum;
        $Income->discription = $request->discription;

        $Income->save();

        $data = Income::all();
        $message="Added Success..!";
        return view('Income.manageIncome', ['Incomes' => $data])->with('message');
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    **/
    public function update(Request $request, Income $Income)
    {
        return view('Income.update', ['Incomes' => $Income]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
    public function destroy(Income $Income)
    {
        $total=TotalBalance::all()->last()->total;
        TotalBalance::create([
            'total' => $total-$Income->amount,
            'operationvalue' => $Income->amount,
            'type' => "Expense",
        ]);
        $Income->delete();
        $data = Income::all();
        $message="Added Success..!";
        return view('Income.manageIncome', ['Incomes' => $data])->with('message');
    }

}
