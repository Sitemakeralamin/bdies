@extends('forntend.master')
@section('title')
    | workshop
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(isset($workpage))
                    <div class="card">
                        <div class="card-header">
                            <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Our Latest Workshop Programme List</h3>
                        </div>
                        <div class="card-body">
                                @foreach($workpage as $work)
                                    <iframe src="{{asset($work->file)}}" frameborder="0" class="d-block w-100" style="height: 600px"></iframe>
                                    <br/>
                                    <br/>
                                @endforeach


                        </div>
                    </div>
                    @elseif(isset($seminar))
                        <div class="card">
                            <div class="card-header">
                                <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Our Latest Seminar Programme List</h3>
                            </div>
                            <div class="card-body">
                                @foreach($seminar as $semi)
                                    <iframe src="{{asset($semi->file)}}" frameborder="0" class="d-block w-100" style="height: 600px"></iframe>
                                    <br/>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                    @else
                       <h1 class="text-center text-danger"> No Data Available</h1>
                    @endif

                </div>
            </div>
        </div>

    </section>
@endsection
