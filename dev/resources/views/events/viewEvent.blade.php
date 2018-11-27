@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
                <div class="form container-fluid col-md-8 col-md-offset-1 text-light border" style="border-radius: 10px">
                    <h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Event</h4>
                    <br>
                    <form action="/updateEventView" method="get" style="padding:20px">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                Event Name
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="eventName" value="{{$event->eventName}}" placeholder="Event Name" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Date
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" value="{{$event->eventDate}}"name="eventDate" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Venue
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="venue" value="{{$event->venue}}"placeholder="Venue" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Start Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="startTime" value="{{$event->startTime}}" readonly>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                End Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="endTime" value="{{$event->endTime}}" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Details
                            </div>
                            <div class="col-md-7 form-group">
                                <textarea class="form-control" type="text" name="details"  placeholder="Details of the event" rows="3" readonly>{{$event->details}}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class=' row'>
                            <div class="col-md-4  " style="color: lawngreen">

                            </div>
                            <div class=" col-md-3 ">
                                <button  type="submit" class="form-control btn btn-success" style="" value="update" name="submit">Update</button>
                            </div>

                            <div class=" col-md-3 ">
                                <button  type="submit" class="form-control btn btn-danger" value="delete" name="submit">Delete</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


