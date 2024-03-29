@extends('layouts.appindex')

@section('content')
    <div id="background">
        <br>
        <div class="text-center" style="background: rgba(255,255,255,0.3);padding: 15px">
            <h2>Alhambra Sports and Welfare Club <br>Donation Area</h2>
        </div>
        <br>
        <div class="container-fluid row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background: rgba(255,255,255,0.8);padding:10px 30px 30px;border-radius: 20px">
                <form action="/proceed" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            First Name:
                        </div>
                        <div class="col-md-6">
                            <input id="firstName" required class="form-control" type="text" name="firstName" placeholder="First Name" >
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-3">
                            Last Name:
                        </div>
                        <div class="col-md-6">
                            <input id="lastName" required class="form-control" type="text" name="lastName" placeholder="Last Name" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Email Address:
                        </div>
                        <div class="col-md-6">
                            <input id="email" required class="form-control" type="email"  name="email"  placeholder="Email Address" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Contact:
                        </div>
                        <div class="col-md-6">
                            <input id="contact" required class="form-control" type="text"  name="contact"  placeholder="Contact Number" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Amount in USD:
                        </div>
                        <div class="col-md-6">
                            <input id="amount" required class="form-control" type="number"  name="amount"  placeholder="Amount" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button id="indexbtn" class="btn btn-primary" type="submit" name="update">Checkout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
