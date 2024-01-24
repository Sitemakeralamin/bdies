@extends('backend.master');
@section('title')
   Message
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
                            <li class="breadcrumb-item"><a href="#">View All Message</a></li>
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
                                <h3 class="card-title">Message List</h3>
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
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($message as $message)
                                        <tr class="@if($message->status == '0') {{ 'bg-warning' }} @endif">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->phone}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->message}}</td>
                                            <td>
                                                <a href="{{route('message.view',$message->id)}}" class="btn btn-primary" title="View Details"><i class="fa fa-book"></i></a>

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
