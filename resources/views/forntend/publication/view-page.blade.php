@extends('forntend.master')
@section('title')
    | publication
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                @if(isset($journals))
                <div class="col-md-8">
                    <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;" >All Journal Publication List</h2>
                    @foreach($journals as $journal)
                        @if($journal->file)
                            <iframe src="{{asset($journal->file)}}" frameborder="0" class="d-block w-100" style="height: 600px"></iframe>

                        @endif
                        <br/>
                        <br/>

                    @endforeach

                </div>

                <div class="col-md-4">
                    <div class="card card-body">
                    <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">Journal Name</h3>
                    @foreach($journals as $journal)
                       <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('journal.singlePage',['journal'=>'journal','id'=>$journal->id])}}">{{$journal->name}}</a></p>
                    @endforeach


                    </div>

                </div>
                @endif

                @if(isset($abstracts))
                        <div class="col-md-8">
                            <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;" >All Abstract Book Publication List</h2>
                            @foreach($abstracts as $abstract)
                                @if($abstract->file)
                                    <iframe src="{{asset($abstract->file)}}" frameborder="0" class="d-block w-100" style="height: 600px"></iframe>

                                @endif
                                <br/>
                                <br/>

                            @endforeach

                        </div>

                        <div class="col-md-4">
                            <div class="card card-body"style="border:none" >
                                <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">Abstract Book Name</h3>
                                @foreach($abstracts as $abstract)
                                    <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('abstract.singlePage',['abstract'=>'abstract','id'=>$abstract->id])}}">{{$abstract->name}}</a></p>
                                @endforeach


                            </div>

                        </div>
                @endif

                @if(isset($news))
                        <div class="col-md-8">
                            <h2 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;" >All News Letter Publication List</h2>
                            @foreach($news as $new)
                                @if($new->file)
                                    <iframe src="{{asset($new->file)}}" frameborder="0" class="d-block w-100" style="height: 600px"></iframe>

                                @endif
                                <br/>
                                <br/>

                            @endforeach

                        </div>

                        <div class="col-md-4">
                            <div class="card card-body">
                                <h3 style="border-bottom: 1px solid #000;color: #0f6674; font-family: 'Playfair Display', serif;">News Letter Name</h3>
                                @foreach($news as $new)
                                    <p style="color: #0f6674; font-family: 'Playfair Display', serif;"><a href="{{route('news.singlePage',['news'=>'news','id'=>$new->id])}}">{{$new->name}}</a></p>
                                @endforeach


                            </div>

                        </div>
                @endif

            </div>
        </div>

    </section>
@endsection
