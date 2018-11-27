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


        $memberslist = db::table('members')->get();

        $data = array('heading'=>"Ramada Hotel",'eventName'=>"Event : ".$request->eventName,
            'eventDate'=>"Date : ".$request->eventDate,'venue'=>"Venue : ".$request->venue,
            'startTime'=>"Start Time : ".$request->startTime,'endTime'=>"End Time : ".$request->endTime,
            'details'=>"Details : ".$request->details,
            'thank'=>"Join with the event..Thank You!"
        );

        foreach ($memberslist as $member){
            $email=$member->email;

            Mail::send(['text'=>'events.createEventEmail'], $data, function($message) use ($email) {
                $message->to($email)->subject
                ('Event Notice');
                $message->from('ramadasystem@gmail.com','Ramada Hotel');
            });

        }
        $event->creator=$request=Auth::User()->name;

        $event->save();
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
        if($res ){
            if($request->deleteMessage!=null){
                $memberslist = db::table('members')->get();

                $data = array('heading'=>"Ramada Hotel",'msg'=>"Event cancelled!",'usermsg'=>$request->deleteMessage,'eventName'=>"Event : ".$request->eventName,
                    'eventDate'=>"Date : ".$request->eventDate,'venue'=>"Venue : ".$request->venue,
                    'thank'=>"Sorry for the inconvinence!..Thank You!"
                );

                foreach ($memberslist as $member){
                    $email=$member->email;

                    Mail::send(['text'=>'events.deleteEventEmail'], $data, function($message) use ($email) {
                        $message->to($email)->subject
                        ('Event Notice');
                        $message->from('ramadasystem@gmail.com','Ramada Hotel');
                    });

                }
            }

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

        $memberslist = db::table('members')->get();

        $data = array('heading'=>"Ramada Hotel",'updateMsg'=>"Event updated.Please check this out!",'eventName'=>"Event : ".$request->eventName,
            'eventDate'=>"Date : ".$request->eventDate,'venue'=>"Venue : ".$request->venue,
            'startTime'=>"Start Time : ".$request->startTime,'endTime'=>"End Time : ".$request->endTime,
            'details'=>"Details : ".$request->details,
            'thank'=>"Join with the event..Thank You!"
        );

        foreach ($memberslist as $member){
            $email=$member->email;

            Mail::send(['text'=>'events.updateEventEmail'], $data, function($message) use ($email) {
                $message->to($email)->subject
                ('Event Notice');
                $message->from('ramadasystem@gmail.com','Ramada Hotel');
            });

        }
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
