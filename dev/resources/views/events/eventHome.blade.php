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


