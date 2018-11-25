@extends('layouts.appindex')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="max-height: 552px">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
                    <div id="caption" class="carousel-caption text-dark">
                        <h1>Main Description 01</h1>
                        <br>
                        <h3>Description content</h3>
                        <br>
                       <a href="/paymentdetails" id='indexbtn' class="btn-lg btn-primary" >Donate</a>
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption text-dark" >
                    <h1>Main Description 03</h1>
                    <br>
                    <h3>Description content</h3>
                    <br>
                    <a href="/paymentdetails" id="indexbtn" class="btn-lg btn-primary">Donate</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
                <div class="carousel-caption text-dark" >
                    <h1>Main Description 03</h1>
                    <br>
                    <h3>Description content</h3>
                    <br>
                    <a href="paymentdetails" id="indexbtn" class="btn-lg btn-primary">Donate</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection


