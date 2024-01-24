@extends('forntend.master')
@section('title')
    | message
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
               <div class="col-md-4">

                <img src="{{ asset('/frontend/message_pic.jpg') }}" alt="" style="margin: 0 auto;" height="300" width="300" >


               </div>

               <div class="col-md-8">
                <iframe src="{{asset('/frontend/message.pdf')}}" frameborder="0" class="d-block w-100" style="height: 1000px"></iframe>
               </div>
            </div>
        </div>

    </section>
@endsection
