@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/updateloan/{{$loan->id}}" method="POST" >
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-4">
                    EPF Number:
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->epfnum}}" name="epfnum" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Payment Cheque No:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" value="{{$loan->chequenum}}" name="chequenum"  placeholder="Cheque No" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Guarantor01 EPF N0 :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->guarantor01}}" name="guarantor01" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Guarantor02 EPF N0 :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->guarantor02}}" name="guarantor02" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Rest Amount :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->restamount}}" name="restamount" placeholder="Rest Amount" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Time left in Months :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->timeleft}}" name="timeleft" placeholder="Time Left" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Status :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" value="{{$loan->status}}" name="status" placeholder="Status" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success" name="loanupdate" style="width: 100px">update</button>
                </div>
            </div>

            <br>

        </form>
    </div>
@endsection

