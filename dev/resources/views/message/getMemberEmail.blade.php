@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br><br>
    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/getunicastemail" method="POST" >
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

@endsection
