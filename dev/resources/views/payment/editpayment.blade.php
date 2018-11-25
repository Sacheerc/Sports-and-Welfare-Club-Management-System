@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')

    <br><br>

    <div class=" form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/updatepayment/{{$payment->id}}" method="post">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-3">
                    First Name:
                </div>
                <div class="col-md-6">
                    <input id="firstName" required class="form-control" type="text" name="firstName" value="{{$payment->firstName}}" placeholder="First Name" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">
                    Last Name:
                </div>
                <div class="col-md-6">
                    <input id="lastName" required class="form-control" type="text" name="lastName" value="{{$payment->lastName}}" placeholder="Last Name" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Email Address:
                </div>
                <div class="col-md-6">
                    <input id="email" required class="form-control" type="email"  name="email" value="{{$payment->email}}"  placeholder="Email Address" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Contact:
                </div>
                <div class="col-md-6">
                    <input id="contact" required class="form-control" type="text"  name="contact" value="{{$payment->contact}}"  placeholder="Contact Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Amount in USD:
                </div>
                <div class="col-md-6">
                    <input id="amount" required class="form-control" type="number"  name="amount" value="{{$payment->amount}}"  placeholder="Amount" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button id="indexbtn" class="btn btn-success" type="submit" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection
