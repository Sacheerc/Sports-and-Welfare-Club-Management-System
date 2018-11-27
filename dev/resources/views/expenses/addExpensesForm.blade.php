@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    $table->integer('amount');
    $table->date('exDate');
    $table->time('exTime');
    <div class="container-fluid">
        <div class="form container-fluid col-md-8 col-md-offset-1 text-light border" style="border-radius: 10px">
            <h4 class="text-light border" style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Add Expense</h4>
            <br>
            <form action="createEvent" method="POST" style="padding:20px">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        Category
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="category" >
                            <option value="Father">Stationary</option>
                            <option value="Mother">Outdoor</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        Description
                    </div>
                    <div class="col-md-7 form-group">
                        <textarea class="form-control" type="text" name="description"  placeholder="Descriptiont" rows="2"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        Cheque No
                    </div>
                    <div class="col-md-7">
                        <input required class="form-control" type="text" name="chequeNo" placeholder="Cheque No">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        Amount
                    </div>
                    <div class="col-md-7">
                        <input required class="form-control" type="number" name="amount" placeholder="Amount">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-3">
                        End Time
                    </div>
                    <div class="col-md-7">
                        <input required class="form-control" type="time" name="endTime" >
                    </div>
                </div>
                <br>

                <br>
                <div class=' row'>
                    <div class="col-md-4  " style="color: lawngreen">

                    </div>
                    <div class=" col-md-3 ">
                        <button  type="submit" class="form-control btn btn-success" value="submit" name="submit">Submit</button>
                    </div>
                    <div class="col-md-3">
                        <button  type="reset" class="form-control btn btn-danger" value="cancel">Cancel</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection


