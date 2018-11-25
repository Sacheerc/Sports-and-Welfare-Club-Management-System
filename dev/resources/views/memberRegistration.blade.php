@extends('layouts.app')

@section('sidemenu')
    @include('layouts.adminSideMenu')
@endsection

@section('content')
    <br>
    <div class="container-fluid col-md-10 col-md-offset-1 ">

        <div class=" bg-dark text-light border" style="border-radius: 10px">
            <h4 class="text-light "  style="padding: 10px;border-top-right-radius: 10px;border-top-left-radius: 10px">Member Registration</h4>
            <br>
            <form action="/store" method="POST" style="padding:20px">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        EPF Number:
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="text" name="epfNumber"  placeholder="EPF Number" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        First Name:
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="text"  name="firstName" placeholder="First Name">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        Last Name:
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="text" name="lastName"  placeholder="Last Name">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        Gender:
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                    <input type="radio" name="gender" value="Male" checked  />
                                    <span>Male</span>
                                </label>
                            </div>

                            <div class="col-md-4">
                                <label>
                                    <input type="radio" name="gender" value="Female"  />
                                    <span>Female</span>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        Department:
                    </div>
                    <div class="col-md-9">
                        <select class="form-control" name="department"  placeholder="department">
                            <option value="Department1">Department1</option>
                            <option value="Department2">Department2</option>
                            <option value="Department3">Department3</option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        Email :
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="email" name="email" placeholder="Email" >
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        Phone :
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="text" name="contact" placeholder="Phone No" >
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        Personal Address:
                    </div>
                    <div class="col-md-9">
                        <input required class="form-control" type="text" name="address"  placeholder="Address">
                    </div>
                </div>
                <br>

                <div class="row ">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        <input  type="checkbox" name="terms" value="checked"> I agree to the Terms and Conditions
                    </div>
                </div>
                <br>

                <div class=' row'>
                    <div class="col-md-8  " style="color: lawngreen">

                    </div>
                    <div class=" col-md-2 ">
                        <button  type="submit" class="form-control btn btn-success" value="submit" name="submit">Submit</button>
                    </div>
                    <div class="col-md-2">
                        <button  type="reset" class="form-control btn btn-danger" value="cancel">Cancel</button>
                    </div>
                </div>
            </form>
            <br>
            <h4 class="boder" style="height:40px;margin-bottom:5px;background-color:maroon;-webkit-border-bottom-right-radius:10px;-webkit-border-bottom-left-radius:10px;"><br></h4>
        </div>


    </div>
@endsection