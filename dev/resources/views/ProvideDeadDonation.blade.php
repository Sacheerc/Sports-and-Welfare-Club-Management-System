@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <script>
        function settotal(value){
            // window.alert(value);
            if(value=="Father"||value=="Mother"){
                amount=document.getElementById("amount");
                amount.value=25000;
            }
            else if(value=="Employee"){
                amount=document.getElementById("amount");
                amount.value=50000;
            }
            else{
                amount=document.getElementById("amount");
                amount.value=0;
            }
        }
    </script>


    <br><br>
    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/validatemember" method="POST" >
            @csrf
            <div class="row">
                <div class="col-md-3">
                    Enter the EPF Number:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" name="epfNumber"  placeholder="EPF Number" >
                </div>
                <div class="col-md-3 text-center">
                    <button type="submit" class="btn btn-danger" style="width: 100px">Check</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9  text-danger">@isset($error){{$error}}@endisset</div>
            </div>
        </form>
    </div>
    <br>

    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/storedonation" method="POST" >
            @csrf

            <div class="row">
                <div class="col-md-3">
                    Enter the EPF Number:
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" name="epfnum" @isset($epfnum)value={{$epfnum}}@endisset   placeholder="EPF Number" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3">
                    Reason for the Donation:
                </div>
                <div class="col-md-6">
                    <select onchange="settotal(this.value)" class="form-control" name="reason"  placeholder="reason">
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Donated Amount:
                </div>
                <div class="col-md-6">
                    <input id="amount" required class="form-control" type="number"  name="amount"   placeholder="Total Amount" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    Payment Cheque No:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" name="chequenum"  placeholder="Cheque No" >
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-3 text-center">
                    <button type="submit" class="btn btn-success" name="deadsubmit" style="width: 100px">Proceed</button>
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