@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')

    <br><br>

    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/saveloans" method="POST" >
            @csrf

            <div class="row">
                <div class="col-md-4">
                    EPF Number:
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" name="epfnum" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Payment Cheque No:
                </div>
                <div class="col-md-6">
                    <input required class="form-control" type="text" name="chequenum"  placeholder="Cheque No" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Guarantor01 EPF N0 :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" name="guarantor01" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    Guarantor02 EPF N0 :
                </div>
                <div class="col-md-6">
                    <input id="epf" required class="form-control" type="text" name="guarantor02" placeholder="EPF Number" >
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success" name="loansubmit" style="width: 100px">Offer</button>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-9 text-danger">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-danger">{{$error}}</div>
                            <br>
                        @endforeach
                    @endif
                    @isset($err){{$err}}<br>@endisset
                </div>
            </div>


        </form>
    </div>

@endsection