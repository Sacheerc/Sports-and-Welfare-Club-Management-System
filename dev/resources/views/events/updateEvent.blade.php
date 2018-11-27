@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="form container-fluid col-md-8 col-md-offset-1 text-light border" style="border-radius: 10px">
                    <h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Update Event</h4>
                    <br>
                    <form action="updateEvent" method="POST" style="padding:20px">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                Event Name
                            </div>
                            <div class="col-md-7">
                                <input type="hidden" name="eventId" value="{{$event->eventId}}">
                                <input required class="form-control" type="text" name="eventName" value="{{$event->eventName}}" placeholder="Event Name">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Date
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="date" value="{{$event->eventDate}}"name="eventDate">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Venue
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="venue" value="{{$event->venue}}"placeholder="Venue">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Start Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="time" name="startTime" value="{{$event->startTime}}">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                End Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="time" name="endTime" value="{{$event->endTime}}" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Details
                            </div>
                            <div class="col-md-7 form-group">
                                <textarea class="form-control" type="text" name="details"  placeholder="Details of the event" rows="3">{{$event->details}}</textarea>
                            </div>
                            {{--<div class="col-md-7">--}}
                                {{--<input required class="form-control" type="text" name="details" placeholder="Details of the event" value="{{$event->details}}">--}}
                            {{--</div>--}}
                        </div>


                        <br>
                        <div class=' row'>
                            <div class="col-md-4  " style="color: lawngreen">

                            </div>
                            <div class=" col-md-3 ">
                                <button  type="submit" class="form-control btn btn-success" value="submit" name="submit">Update</button>
                            </div>
                            <div class="col-md-3">
                                <button  type="reset" class="form-control btn btn-danger" value="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>

        </div>
    </div>
@endsection


