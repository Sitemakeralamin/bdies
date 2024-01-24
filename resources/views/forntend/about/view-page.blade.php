@extends('forntend.master')
@section('title')
    | About-us
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(isset($about_us))
                        <h3 style="color: #0f6674;text-align: center; font-family: 'Playfair Display', serif; border-bottom: 1px solid #c0c0c0">{{$about_us->title}}</h3>

                            @if($about_us->short_description)
                                <p>{{ $about_us->short_description }}</p>
                            @endif
                    @if($about_us->image)
                            <img src="{{asset($about_us->image)}}" alt="" width="100%">
                    @endif

                        <p>{!! $about_us->long_description !!}</p>
                    @endif

                        @if(isset($mission))
                            <h3 style="color: #0f6674;text-align: center; font-family: 'Playfair Display', serif; border-bottom: 1px solid #c0c0c0">{{$mission->title}}</h3>

                            @if($mission->short_description)
                                <p>{{ $mission->short_description }}</p>
                            @endif
                        @if($mission->image)
                                <img src="{{asset($mission->image)}}" alt="" width="100%">
                        @endif

                            <p>{!! $mission->long_description !!}</p>
                        @endif

                        @if(isset($vision))
                            <h3 style="color: #0f6674;text-align: center; font-family: 'Playfair Display', serif; border-bottom: 1px solid #c0c0c0">{{$vision->title}}</h3>

                            @if($vision->short_description)
                                <p>{{ $vision->short_description }}</p>
                            @endif
                        @if($vision->image)
                                <img src="{{asset($vision->image)}}" alt="" width="100%">
                        @endif
                            <p>{!! $vision->long_description !!}</p>
                        @endif
                </div>

            </div>
        </div>

    </section>
@endsection
