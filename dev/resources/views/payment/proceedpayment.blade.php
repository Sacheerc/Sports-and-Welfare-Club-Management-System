@extends('layouts.appindex')
<div id="paymentform">
    <form action="/makepayment" method="POST">
        {{ csrf_field() }}
        <input name="firstName" type="hidden" value="{{$firstName}}">
        <input name="lastName" type="hidden" value="{{$lastName}}">
        <input name="email" type="hidden" value="{{$email}}">
        <input name="contact" type="hidden" value="{{$contact}}">
        <input name="amount" type="hidden" value="{{$amount}}">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ env('STRIPE_PUB_KEY') }}"
                data-amount="{{$amount*100}}"
                data-name="Hotel Ramada"
                data-description="Donations"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-zip-code="true">
        </script>
    </form>
</div>

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
                    <div class="row">
                        <div class="col-md-3">
                            First Name:
                        </div>
                        <div id="previewdata" class="col-md-6">
                            {{$firstName}}
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-3">
                            Last Name:
                        </div>
                        <div id="previewdata" class="col-md-6">
                            {{$lastName}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Email Address:
                        </div>
                        <div id="previewdata" class="col-md-6">
                            {{$email}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Contact:
                        </div>
                        <div id="previewdata" class="col-md-6">
                            {{$contact}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            Amount in USD:
                        </div>
                        <div id="previewdata" class="col-md-6">
                            {{$amount}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

                        </div>
                    </div>
            </div>
        </div>

    </div>


@endsection
