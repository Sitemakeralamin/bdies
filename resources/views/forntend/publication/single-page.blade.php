@extends('forntend.master')
@section('title')
    | publication singlepage
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @if(isset($journals))
                <div class="col-md-8">
                    <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">  {{$singlePage->name}} Journal Publication List</h2>

                        @if($singlePage->file)
                            <iframe src="{{asset($singlePage->file)}}" frameborder="0" class="d-block w-100" style="height: 1000px"></iframe>
                        @endif



                </div>
                <div class="col-md-4">
                    <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">Journal Name</h3>
                    @foreach($journals as $journal)
                        <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('journal.singlePage',['journal'=>'journal','id'=>$journal->id])}}">{{$journal->name}}</a></p>
                    @endforeach
                    <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('journalPage',['journal'=>'journal'])}}">View All</a></p>

                </div>
                @endif


                @if(isset($abstracts))
                        <div class="col-md-8">
                            <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">  {{$singlePage->name}} Abstract Book Publication List</h2>

                            @if($singlePage->file)
                                <iframe src="{{asset($singlePage->file)}}" frameborder="0" class="d-block w-100" style="height: 1000px"></iframe>
                            @endif



                        </div>
                        <div class="col-md-4">
                            <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">Abstract Book Name</h3>
                            @foreach($abstracts as $abstract)
                                <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('abstract.singlePage',['abstract'=>'abstract','id'=>$abstract->id])}}">{{$abstract->name}}</a></p>
                            @endforeach
                            <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('abstractPage',['abstract'=>'abstract'])}}">View All</a></p>

                        </div>
                @endif

                    @if(isset($news))
                        <div class="col-md-8">
                            <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">  {{$singlePage->name}} News Letter Publication List</h2>

                            @if($singlePage->file)
                                <iframe src="{{asset($singlePage->file)}}" frameborder="0" class="d-block w-100" style="height: 1000px"></iframe>
                            @endif



                        </div>
                        <div class="col-md-4">
                            <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">News Letter Name</h3>
                            @foreach($news as $new)
                                <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('news.singlePage',['news'=>'news','id'=>$new->id])}}">{{$new->name}}</a></p>
                            @endforeach
                            <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('newsPage',['news'=>'news'])}}">View All</a></p>

                        </div>
                    @endif

            </div>
        </div>

    </section>
@endsection
