@extends('forntend.master')
@section('title')
    | Meetting
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Our Latest Meetting List</h3>
                        </div>
                        <div class="card-body">
                            @if(isset($meetting))
                            <iframe src="{{asset($meetting->file)}}" frameborder="0" class="d-block w-100" style="height: 1000px"></iframe>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
