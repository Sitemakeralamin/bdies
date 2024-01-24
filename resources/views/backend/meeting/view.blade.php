@extends('backend.master');
@section('title')
    Meetting view
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
                            <li class="breadcrumb-item"><a href="#">View All Meetting</a></li>
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
                    <div class="col-md-12">


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Meetting List</h3>
                                @if(session()->has('message'))
                                    <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($meettings as $meetting)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$meetting->title}}</td>
                                            <td>
                                                <iframe src="{{asset($meetting->file)}}" frameborder="0"></iframe>
                                            </td>
                                            <td>
                                                <a href="{{route('edit.meetting',$meetting->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.meetting',$meetting->id)}}" class="btn btn-danger" title="delete" onclick=" return confirm('Are you sure you want to delete this meetting?');"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
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
