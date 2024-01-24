@extends('backend.master');
@section('title')
    Programe
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
                            <li class="breadcrumb-item"><a href="#">Programe</a></li>
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
                            @if(isset($programe))
                                <div class="card-header">
                                    <h3 class="card-title">Edit Programe</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('programe.update',$programe->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control">
                                                    <option value="">--Select Publication--</option>
                                                    <option value="journal" {{$programe->type == 'workshop'? 'selected': ''}}>workshop</option>
                                                    <option value="abstract" {{$programe->type == 'Seminar'? 'selected': ''}}>Seminar</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" class="form-control" value="{{$programe->name}}">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">File (Only PDF)</label>
                                            <div class="col-md-9">
                                                <input type="file" name="file" class="form-control">
                                                <iframe src="{{asset($programe->file)}}" frameborder="0"></iframe>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Update programe">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="card-header">
                                    <h3 class="card-title">Add Programe</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('programe.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control" required>
                                                    <option value="">--Select Programe--</option>
                                                    <option value="workshop">workshop</option>
                                                    <option value="Seminar">Seminar</option>
                                                </select>
                                                @error('type')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" class="form-control" value="{{old('name')}}">

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
                                                <input type="submit" class="btn btn-outline-primary" value="Save Programe">

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
