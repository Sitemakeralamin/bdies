@extends('backend.master');
@section('title')
    Meetting
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Meetting</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <div class="card">
                            @if(isset($meetting))
                                <div class="card-header">
                                    <h3 class="card-title">Edit Meetting</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('meetting.update',$meetting->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row mb-3">
                                            <label  class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" class="form-control" value="{{$meetting->title}}">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">File (Only PDF)</label>
                                            <div class="col-md-9">
                                                <input type="file" name="file" class="form-control">
                                                <iframe src="{{asset($meetting->file)}}" frameborder="0" class="mt-4"></iframe>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Update Meetting">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="card-header">
                                    <h3 class="card-title">Add Meetting</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('meetting.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" class="form-control" value="{{old('title')}}">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">File (Only PDF)</label>
                                            <div class="col-md-9">
                                                <input type="file" name="file" class="form-control" required>
                                                @error('file')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Save Meetting">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif

                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
