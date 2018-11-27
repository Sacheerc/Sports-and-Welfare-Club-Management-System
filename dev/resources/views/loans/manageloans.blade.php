@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="form container-fluid col-md-8 col-md-offset-1 text-light border">
        <form action="/filterloans" method="POST" >
            @csrf
            <div class="row">
                <div class="col-md-3">
                    EPF Number:
                </div>
                <div class="col-md-5">
                    <input id="myInput" class="form-control" type="text" name="epfnum" placeholder="EPF Number" >
                </div>

                <div class="col-md-3 text-center">
                    <button id="indexbtn" class="btn btn-success" type="submit" name="filter">Filter</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div class="container-fluid text-light text-center col-md-12 " style="min-height: 552px">
        <table>
            <tr>
                {{--<th>id</th>--}}
                <th>EPF No</th>
                <th>Cheque No</th>
                <th>Rest Amount</th>
                <th>Time Left</th>
                <th>Status</th>
                <th>Guarantor01</th>
                <th>Guarantor02</th>
                <th></th>
            </tr>
            <tbody>
            @foreach($loans as $loan)
                <tr>
                    {{--<td>{{$loan->id}} </td>--}}
                    <td>{{$loan->epfnum}} </td>
                    <td>{{$loan->chequenum}}</td>
                    <td>{{$loan->restamount}} </td>
                    <td>{{$loan->timeleft}} </td>
                    <td>{{$loan->status}} </td>
                    <td>{{$loan->guarantor01}} </td>
                    <td>{{$loan->guarantor02}} </td>
                    <td class="text-right" style='width: 350px'>
                        @if($loan->status=="active")<a href="/claimloan/{{$loan->id}}"  class='btn btn-success'>Claim</a>@endif
                        <a href="/editloans/{{$loan->id}}" class='btn btn-primary'>Edit</a>
                        <a href="/removeloans/{{$loan->id}}"  class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection