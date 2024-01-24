@extends('forntend.master')
@section('title')
    | Home
@endsection
@section('content')
    <section class="py-5">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-9">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @if(isset($sliders))
                                @foreach($sliders as $slider)
                                    <div class="carousel-item active">
                                        <img src="{{asset($slider->image)}}" class="d-block w-100" alt="slider 01">
                                    </div>

                                @endforeach
                            @endif

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <h3 >I Want to..</h3>
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-9 mt-2">
                    <img src="{{asset('frontend/conferennce.jpg')}}" alt="" class="d-block w-100">
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <h3>Upcomming Meetings..</h3>
                        <ol class="list-group">
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                            <li class="list-group-item" style="background-color: #F4F2ED"><a href="" class="nav-link">A second item</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div class="container p-0">
            <div class="row">
                <div class="col-md-9" style="display: block;">
                    <div class="displayContent">
                        <img src="{{asset('frontend/image01.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">APS Letter Regarding Access to Reproductive Health Care</a></p>
                    </div>
                    <div class="displayContent">
                        <img src="{{asset('frontend/image05.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">At APS meeting, physicists urge nuclear weapons advocacy
                            </a></p>
                    </div>
                    <div class="displayContent">
                        <img src="{{asset('frontend/image03.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">1945: Six Women Programmers of ENIAC</a></p>
                    </div>
                    <div class="displayContent">
                        <img src="{{asset('frontend/image04.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">Opinion: Pay PhDs Living Wages</a></p>
                    </div>
                    <div class="displayContent">
                        <img src="{{asset('frontend/image05.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">At APS meeting, physicists urge nuclear weapons advocacy
                            </a></p>
                    </div>
                    <div class="displayContent">
                        <img src="{{asset('frontend/image06.jpg')}}" alt="" class="w-100">
                        <p class="custom_para"><a href="#" class="nav-link">Apker Awards for Slime Mold, Black Holes</a></p>
                    </div>

                    <a href="#" class="float-end">News Archive</a>

                </div>



            </div>
        </div>
    </section>
@endsection
