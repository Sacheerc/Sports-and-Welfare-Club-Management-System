<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.createEvent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $event=new Event();
        $event->eventName=$request->eventName;
        $event->eventDate=$request->eventDate;
        $event->eventDate=$request->eventDate;
        $event->venue=$request->venue;
        $event->startTime=$request->startTime;
        $event->endTime=$request->endTime;
        $event->details=$request->details;
        $event->creator=$request=Auth::User()->name;

        $event->save();

        $email = db::table('members')->where('eventDate','<',$today)->get();

        $data = array('heading'=>"Welcome to Crime Reporting System",'fullName'=>"Full Name: ".$request->fullName,'name'=>
            "Name with initials: ".$request->name,'nic'=>"NIC: ".$request->nic,
            'msg'=>"Complete your Registration at $request->policeStation by showing NIC",'thank'=>"Thank You!"
        );


        Mail::send(['text'=>'mail'], $data, function($message) use ($em) {
            $message->to($em)->subject
            ('SL Police System Citizen Registration');
            $message->from('slpolicesystem@gmail.com','SL Police');
        });
        return redirect("/viewEvents");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    //Return the events
    public function viewEvents(){
        $dt = Carbon::now();
        $today=$dt->toDateString();
        $pastEvents = db::table('events')->where('eventDate','<',$today)->get();
        $todayEvents = db::table('events')->where('eventDate','=',$today)->get();
        $upcomingEvents = db::table('events')->where('eventDate','>',$today)->get();
        return view('events.eventHome',compact('pastEvents','todayEvents','upcomingEvents'));
    }

    //View an event
    public function viewEvent(Request $request){
        $event = db::table('events')->where('eventName',$request->eventName)->First();
        return view('events.viewEvent',compact('event'));
    }
    //update an Event

    public function updateEventView(Request $request){
        if($request->submit=="update"){

            $event = db::table('events')->where('eventName',$request->eventName)->First();
            return view('events.updateEvent',compact('event'));

        }

        else{
            $event = db::table('events')->where('eventName',$request->eventName)->First();
            return view('events.deleteEvent',compact('event'));
        }

    }

    //deleteEvent

    public function deleteEvent(Request $request){
        $res=db::table('events')->where('eventId',$request->eventId)->delete();
        if($res){
            return redirect("/viewEvents");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEvent(Request $request)
    {
        DB::table('events')
        ->where('eventId',$request->eventId)
        ->update(['eventName'=>$request->eventName,'eventDate'=>$request->eventDate,'venue'=>$request->venue,
            'startTime'=>$request->startTime,'endTime'=>$request->endTime,'details'=>$request->details]);
        return redirect("/viewEvents");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
