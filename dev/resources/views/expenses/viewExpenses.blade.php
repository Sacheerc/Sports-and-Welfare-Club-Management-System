@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <input class="form-control" id="myInput" type="text" placeholder="Search an event..">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 offset-1">
                <table class="table text-light bg-dark">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Cheque No</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date and Time</th>
                    </tr>
                    </thead>
                    <tbody id="expns">
                    @foreach($expenses as $expens)
                    <tr>
                        <th scope="row">{{$expens->category}}</th>
                        <td>{{$expens->description}}</td>
                        <td>{{$expens->chequeNo}}</td>
                        <td>{{$expens->amount}}</td>
                        <td>{{$expens->exDateTime}}</td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#expns tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

@endsection


