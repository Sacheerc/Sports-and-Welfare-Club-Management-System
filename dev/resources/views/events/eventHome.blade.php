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
            <div class="col-md-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Past Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pastEvents as $event)
                    <tr>
                        <td>
                            <form action="/viewEvent" method="get">
                                @csrf
                                <input type="hidden" name="eventName" value="{{$event->eventName}}">
                                <button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                {{--<div class=" text-light border" style="border-radius: 10px">--}}
                    {{--<h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Past Events</h4>--}}
                    {{--<br>--}}
                    {{--@foreach($pastEvents as $event)--}}
                        {{--<form action="/viewEvent" method="get">--}}
                            {{--@csrf--}}
                            {{--<input type="hidden" name="eventName" value="{{$event->eventName}}">--}}
                            {{--<button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>--}}
                        {{--</form>--}}
                        {{--<br>--}}
                        {{--@endforeach--}}
                {{--</div>--}}
            </div>
            <div class="col-md-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Today Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($todayEvents as $event)
                        <tr>
                            <td>
                                <form action="/viewEvent" method="get">
                                    @csrf
                                    <input type="hidden" name="eventName" value="{{$event->eventName}}">
                                    <button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{--<div class="text-light border" style="border-radius: 10px">--}}
                    {{--<h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Today Events</h4>--}}
                    {{--<br>--}}
                    {{--@foreach($todayEvents as $event)--}}
                        {{--<form action="/viewEvent" method="get">--}}
                            {{--@csrf--}}
                            {{--<input type="hidden" name="eventName" value="{{$event->eventName}}">--}}
                            {{--<button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>--}}
                        {{--</form>--}}
                        {{--<br>--}}

                    {{--@endforeach--}}

                {{--</div>--}}
            </div>
            <div class="col-md-4">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Coming Up Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($upcomingEvents as $event)
                        <tr>
                            <td>
                                <form action="/viewEvent" method="get">
                                    @csrf
                                    <input type="hidden" name="eventName" value="{{$event->eventName}}">
                                    <button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                {{--<div class="text-light border" style="border-radius: 10px">--}}
                    {{--<h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;text-align:center;border-top-left-radius: 10px">Coming Up Events</h4>--}}
                    {{--<br>--}}
                    {{--@foreach($upcomingEvents as $event)--}}
                        {{--<form action="/viewEvent" method="get">--}}
                            {{--@csrf--}}
                            {{--<input type="hidden" name="eventName" value="{{$event->eventName}}">--}}
                            {{--<button  type="submit" class="form-control btn btn-dark" value="submit" name="submit">{{$event->eventName}}</button>--}}
                        {{--</form>--}}
                        {{--<br>--}}
                    {{--@endforeach--}}

                {{--</div>--}}
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".table tbody").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

@endsection


