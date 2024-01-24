@extends('backend.master');
@section('title')
    View Message
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
                            <li class="breadcrumb-item"><a href="#">View Message</a></li>
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
                    <div class="col-md-6 offset-2">


                        <div class="card card-body">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$seenMessage->name}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$seenMessage->phone}}</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <td>{{$seenMessage->email}}</td>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <td>{{$seenMessage->message}}</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td><a href="{{route('message')}}" class="btn btn-outline-primary">Back</a></td>
                                </tr>
                            </table>

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
