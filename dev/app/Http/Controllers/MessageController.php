<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class MessageController extends Controller
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

    //display unicast message page
     public function unicastmessage()
     {
         return view('message.unicastMessage');
     }

     //display broadcast message page
    public function broadcastmessage()
    {
        return view('message.broadcastMessage');
    }

    //send unicast message
    public function sendunicastmessage(Request $request)
    {

        $email=$request->email;
        $subject=$request->subject;
        $data=array('msg'=>"Message : ".$request->message,'email'=>$email,'subject'=>$subject);

        Mail::send('message.unicastmm', $data, function($message) use($data){
            $message->to($data['email'])->subject($data['subject']);
            $message->from('ramadasystem@gmail.com','Ramada Hotel');
        });
        return view('message.getMemberEmail');
    }

    //view to get the email of the member
    public function getmemberEmail()
    {
        return view('message.getMemberEmail');
    }

    //get email of the member
    public function getunicastemail(Request $request)
    {
        $email=db::table('members')
            ->where ('epfNumber',$request->epfNumber)->First();
        return view('message.unicastMessage',compact('email'));

    }

    //send broadcast message
    public function sendbroadcastmessage()
    {

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
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
