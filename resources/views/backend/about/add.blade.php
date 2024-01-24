@extends('backend.master');
@section('title')
    About
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
                            <li class="breadcrumb-item"><a href="#">About</a></li>
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
                            @if(isset($about))
                                <div class="card-header">
                                    <h3 class="card-title">Edit about</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control">
                                                    <option value="">--Select About--</option>
                                                    <option value="mission"  {{$about->type == 'mission'? 'selected': ''}}>mission</option>
                                                    <option value="vision"  {{$about->type == 'vision'? 'selected': ''}}>vision</option>
                                                    <option value="about_us"  {{$about->type == 'about_us'? 'selected': ''}}>about bdies</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" class="form-control" value="{{$about->title}}" required>
                                                @error('title')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Short Description</label>
                                            <div class="col-md-9">
                                                <textarea name="short_description" class="form-control">{{$about->short_description}}</textarea>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label  class="col-md-3"> Long Description</label>
                                            <div class="col-md-9">
                                                <textarea name="long_description" id="summernote" cols="30" rows="50" class="form-control">{{$about->long_description}}</textarea>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label  class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" name="image" class="form-control">
                                                <img src="{{asset($about->image)}}" alt="" height="200" width="200">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Update About Section">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="card-header">
                                    <h3 class="card-title">About Company</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('about.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control" required>
                                                    <option value="">--Select Type--</option>
                                                    <option value="mission">mission</option>
                                                    <option value="vision">vision</option>
                                                    <option value="about_us">about bdies</option>
                                                </select>
                                                @error('type')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Title</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title" class="form-control" required>
                                                @error('title')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Short Description</label>
                                            <div class="col-md-9">
                                                <textarea name="short_description" class="form-control"></textarea>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label  class="col-md-3"> Long Description</label>
                                            <div class="col-md-9">
                                                <textarea name="long_description" id="summernote" cols="30" rows="50" class="form-control"></textarea>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label  class="col-md-3">Image</label>
                                            <div class="col-md-9">
                                                <input type="file" name="image" class="form-control">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Save About">

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
