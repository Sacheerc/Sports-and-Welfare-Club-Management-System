@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>

    <div class="container-fluid text-light justify-content-center col-md-12 " style="min-height: 552px">
        <table class="table form">
            <tr>
                {{--<th>id</th>--}}
                <th>Total(Rs)</th>
                <th>Operation Value</th>
                <th>Type</th>
                <th>Created at</th>
            </tr>
            <tbody>
            @foreach($balances as $balance)
                <tr>
                    {{--<td>{{$loan->id}} </td>--}}
                    <td>{{$balance->total}} </td>
                    <td>{{$balance->operationvalue}}</td>
                    <td>{{$balance->type}}</td>
                    <td>{{$balance->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection