<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('loans.offerloan');
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
        $guarantor1=Loan::where('epfnum','=',$request->guarantor01)->where('status','=','active')->get();
        $guarantor2=Loan::where('epfnum','=',$request->guarantor02)->where('status','=','active')->get();
        $isvalid=Loan::where('epfnum','=',$request->epfnum)->where('status','=','active')->get();

        if($guarantor1->isEmpty()&&$guarantor2->isEmpty()&&$isvalid->isEmpty()){
//            Loan::create($request->all);
            Loan::create([
                'epfnum' => $request['epfnum'],
                'chequenum' => $request['chequenum'],
                'guarantor01' => $request['guarantor01'],
                'guarantor02' => $request['guarantor02'],
            ]);
            return redirect()->back();
        }
        else
            $err="This Employee doesn't eligible for the loan. Please recheck with the HR depatment";
            return view('loans.offerloan',compact('err'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
