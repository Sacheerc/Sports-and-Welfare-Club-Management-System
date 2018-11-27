@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="form container-fluid col-md-8 col-md-offset-1 text-light border" style="border-radius: 10px">
                <h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Delete Event</h4>
                <br>
                <form action="deleteEvent" method="POST" style="padding:20px">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            Event Name
                        </div>
                        <div class="col-md-7">
                            <input type="hidden" name="eventId" value="{{$event->eventId}}">
                            <input required class="form-control" type="text" name="eventName" value="{{$event->eventName}}" placeholder="Event Name" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Message to Members
                        </div>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="deleteMessage" placeholder="Message">
                        </div>
                    </div>
                    <br>
                    <div class=' row'>
                        <div class="col-md-4  " style="color: lawngreen">

                        </div>
                        <div class=" col-md-3 ">
                            <button  type="submit" class="form-control btn btn-success" value="submit" name="submit">Delete</button>
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


