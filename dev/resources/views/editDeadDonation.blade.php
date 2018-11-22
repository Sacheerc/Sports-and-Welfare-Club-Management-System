@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')

    <br><br>

    <div class="container-fluid col-md-8 col-md-offset-1 text-light border" style="border-radius: 10px;padding:30px">
        <form action="/updatedeaddonation/{{$donation->epfnum}}" method="POST" >
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-3">
                    Enter the EPF Number:
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" name="epfnum" value="{{$donation->epfnum}}"  placeholder="EPF Number" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">
                    Reason for the Donation:
                </div>
                <div class="col-md-6">
                    <input id="reason" required class="form-control" type="text"  name="reason" value="{{$donation->reason}}"  placeholder="Enter the Reason" >

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Donated Amount:
                </div>
                <div class="col-md-6">
                    <input id="amount" required class="form-control" type="number"  name="amount" value="{{$donation->amount}}"  placeholder="Total Amount" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Payment Cheque No:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" name="chequenum" value="{{$donation->chequenum}}"  placeholder="Cheque No" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3 text-center">
                    <button type="submit" class="btn btn-success" name="update" style="width: 100px">Update</button>
                </div>
            </div>
            @isset($message)
                <script>
                    window.alert("Updated Success..!");
                </script>
            @endisset

        </form>
    </div>

@endsection