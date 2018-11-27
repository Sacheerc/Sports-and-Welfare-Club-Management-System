@extends('layouts.app')
<?php
use Illuminate\Support\Facades\DB;
?>

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br><br>
    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/sendunicastmessage" method="POST" >
            @csrf

            <div class="row">
                <div class="col-md-3">
                    Email
                </div>
                <div class="col-md-6">
                    <input id="email" required class="form-control" type="email" name="email" value={{$email->email}}   placeholder="Email" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Subject
                </div>
                <div class="col-md-6">
                    <input id="subject" required class="form-control" type="text" name="subject"  placeholder="Subject" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">
                    Message
                </div>
                <div class="col-md-6">
                    <input id="message" required class="form-control" type="text" name="message"  placeholder="Message" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3 text-center">
                    <button type="submit" class="btn btn-success" style="width: 100px">Proceed</button>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9 text-center">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-danger">{{$error}}</div>
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>


        </form>
    </div>

@endsection
