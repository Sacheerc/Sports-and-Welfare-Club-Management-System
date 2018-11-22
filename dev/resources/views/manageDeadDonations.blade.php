@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <div class="container text-light text-center">
        <br>
        <table>
            <tr>
                <th>EPF No</th>
                <th>Reason</th>
                <th>Amount</th>
                <th>Cheque No</th>
                <th></th>
            </tr>

            @foreach($donations as $donation)
                <tr>
                    <td>{{$donation->epfnum}} </td>
                    <td>{{$donation->reason}}</td>
                    <td>{{$donation->amount}} </td>
                    <td>{{$donation->chequenum}} </td>
                    <td style='width: 250px'>
                        <a href="/editdeaddonation/{{$donation->epfnum}}" class='btn btn-primary'>Edit</a>
                        <a href="/removedeaddonation/{{$donation->epfnum}}"  class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
                <br>
            @endforeach

        </table>
    </div>


@endsection