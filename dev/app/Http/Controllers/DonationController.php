<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Members;
use App\TotalBalance;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ProvideDeadDonation');
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

    public function check(Request $request){
        $request->all();
        $epfnum=Members::find($request)->first();
        $error="Entered Number Doesn't match with our database..!";
        if($epfnum===null){
            return view('ProvideDeadDonation',compact('error'));
        }
        else {
            $epfnum=$epfnum->epfNumber;
            return view('ProvideDeadDonation',compact('epfnum'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'epfnum'=>'required|max:8|unique:donations',
            'reason'=>'required',
            'amount'=>'required',
            'chequenum'=>'required'
        ]);
        Donation::create($request->all());
        $total=TotalBalance::all()->last()->total;
        TotalBalance::create([
            'total' => $total-$request->amount,
            'operationvalue' => $request->amount,
            'type' => "Expense",
        ]);
        $message="Added Success..!";
//        return redirect()->back();
        return view('ProvideDeadDonation',compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        $donations=$donation->all();
        return view('manageDeadDonations',compact('donations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('editDeadDonation',compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
//        dd($request->all());
        $donation->fill($request->all())->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->back();
    }
}
