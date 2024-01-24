@extends('backend.master');
@section('title')
    Committee view
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
                            <li class="breadcrumb-item"><a href="#">View All Committee</a></li>
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
                                <h3 class="card-title">Committee List</h3>
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
                                        <th>E.Name</th>
                                        <th>B.Name</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Affiliation</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($committees as $committee)

                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$committee->e_name}}</td>
                                            <td>{{$committee->b_name}}</td>
                                            <td>{{$committee->email}}</td>
                                            <td>{{$committee->phone}}</td>
                                            <td>{{$committee->affiliation}}</td>
                                            <td>{{$committee->type}}</td>
                                            <td>
                                                <a href="{{route('edit.committee',$committee->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('delete.committee',$committee->id)}}" class="btn btn-sm btn-danger" title="delete" onclick=" return confirm('Are you sure you want to delete this committee?');"><i class="fa fa-times"></i></a>
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

@push('page_js')

@if(session('message'))
    <script>
        toastr.success('{{ session('message') }}');
    </script>
    @endif

@endpush
