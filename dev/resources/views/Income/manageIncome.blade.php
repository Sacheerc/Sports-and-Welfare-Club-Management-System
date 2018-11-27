@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <div class="container text-light text-center col-md-8 " style="min-height: 700px">
        <br>
        <table >
            <tr>
                <th>Donate Id</th>
                <th>Reason</th>
                <th>Amount</th>
                <th>Cheque No</th>
                <th>Discription</th>
                <th>Created Date</th>
            </tr>

            @foreach($Incomes as $Income)
                <tr>
                    <td>{{$Income->id}}</td>
                    <td>{{$Income->category}}</td>
                    <td>{{$Income->amount}} </td>
                    <td>{{$Income->chequenum}}</td>
                    <td>{{$Income->discription}}</td>
                    <td>{{$Income->created_at}} </td>
                    <td style='width: 250px'>
                        <a href="{{route('Income.update', $Income)}}" class='btn btn-primary'>Edit</a>
                        <a href="{{route('Income.remove', $Income)}}"  class='btn btn-danger'>Delete</a>

                    </td>
                </tr>
            @endforeach


        </table>
    </div>


@endsection