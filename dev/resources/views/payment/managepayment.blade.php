@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <div class="container text-light text-center col-md-11 ">
        <br>
        <table>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Amount(USD)</th>
                <th></th>
            </tr>

            @foreach($payments as $payment)
                <tr>
                    <td>{{$payment->firstName}} </td>
                    <td>{{$payment->lastName}}</td>
                    <td>{{$payment->email}} </td>
                    <td>{{$payment->contact}} </td>
                    <td>{{$payment->amount}} </td>
                    <td style='width: 250px'>
                        <a href="/editpayment/{{$payment->id}}" class='btn btn-primary'>Edit</a>
                        <a href="/removepayment/{{$payment->id}}"  class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection