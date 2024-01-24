@extends('backend.master');
@section('title')
    committee
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
                            <li class="breadcrumb-item"><a href="#">Committee</a></li>
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
                            @if(isset($committee))
                                <div class="card-header">
                                    <h3 class="card-title">Edit Committee</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('committee.update',$committee->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control">
                                                    <option value="">--Select Committee--</option>
                                                    <option value="executive" {{$committee->type == 'executive'? 'selected': ''}}>Executive Committee 2022-23</option>
                                                    <option value="previous" {{$committee->type == 'previous'? 'selected': ''}}>Previous Committee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3">File (Only PDF)</label>
                                            <div class="col-md-9">
                                                <input type="file" name="file" class="form-control">
                                                <iframe src="{{asset($committee->file)}}" frameborder="0" class="mt-4"></iframe>

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label  class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <input type="submit" class="btn btn-outline-primary" value="Update Committee">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="card-header">
                                    <h3 class="card-title">Add Committee</h3>
                                    @if(session()->has('message'))
                                        <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{route('committee.save')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label  class="col-md-3">Select Type</label>
                                            <div class="col-md-9">
                                                <select name="type" class="form-control" required>
                                                    <option value="">--Select Committee--</option>
                                                    <option value="executive">Executive Committee 2022-23</option>
                                                    <option value="previous">Previous Committee</option>
                                                </select>
                                                @error('type')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
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
                                                <input type="submit" class="btn btn-outline-primary" value="Save Committee">

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
