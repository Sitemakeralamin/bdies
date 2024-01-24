@extends('backend.master');
@section('title')
    Fellow Member
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
                            <li class="breadcrumb-item"><a href="#">Student Member</a></li>
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
                                <h3 class="card-title">Student Member List</h3>
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
                                        <th>Contact</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($members as $member)
                                        <tr class=" @if($member->status == 0){{ 'bg-warning' }} @endif">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->mobile}}</td>
                                            <td>{{$member->email}}</td>
                                            <td>
                                                <a href="{{route('view.member',$member->id)}}" class="btn btn-success" title="view"><i class="fa fa-book"></i></a>
                                                <a href="{{route('approve.member',$member->id)}}" class="btn btn-primary" title="@if($member->status == 0){{ 'approved' }}@else 'Unapproved' @endif"><i class="fa fa-check"></i></a>
                                                <a href="{{route('delete.member',$member->id)}}" class="btn btn-danger" title="delete" onclick=" return confirm('Are you sure you want to delete this member?');"><i class="fa fa-times"></i></a>
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
