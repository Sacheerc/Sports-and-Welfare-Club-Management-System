@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class=" bg-dark text-light" style="border-radius: 10px">
                    <h4 class="text-light border" style="background-color: rgb(230,0,0);padding: 10px;border-top-right-radius: 10px;border-top-left-radius:10px">Past Events</h4>
                    <br>

                </div>
            </div>
            <div class="col-md-6">

                <div class=" bg-dark text-light" style="border-radius: 10px">
                    <h4 class="text-light border" style="background-color: rgb(230,0,0);padding: 10px;border-top-right-radius: 10px;border-top-left-radius:10px">Create Event</h4>
                    <br>
                    <form action="createEvent" method="POST" style="padding:20px">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                Event Name
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="eventName" placeholder="Event Name">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Date
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="date" name="eventDate">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Venue
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="venue" placeholder="Venue">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Start Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="time" name="startTime" >
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                End Time
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="time" name="endTime" >
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                Details
                            </div>
                            <div class="col-md-7">
                                <input required class="form-control" type="text" name="details" placeholder="Details of the event">
                            </div>
                        </div>
                        <br>
                        <div class=' row'>
                            <div class="col-md-4  " style="color: lawngreen">

                            </div>
                            <div class=" col-md-3 ">
                                <button  type="submit" class="form-control btn btn-success" value="submit" name="submit">Submit</button>
                            </div>
                            <div class="col-md-3">
                                <button  type="reset" class="form-control btn btn-danger" value="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-3">
                <div class=" bg-dark text-light" style="border-radius: 10px">
                    <h4 class="text-light border" style="background-color: rgb(230,0,0);padding: 10px;border-top-right-radius: 10px;border-top-left-radius:10px">Coming Up Events</h4>
                    <br>

                </div>
            </div>

        </div>
    </div>
@endsection


