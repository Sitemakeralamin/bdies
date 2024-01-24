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
                                <h3 class="card-title">View Member</h3>
                                @if(session()->has('message'))
                                    <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                @endif
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div style="width: 48%; float: left;padding: 10px">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$member->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Father Name</th>
                                            <td>{{$member->father_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>E-mail</th>
                                            <td>{{$member->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Member Type</th>
                                            <td>
                                                @if($member->member_type == 'student member')
                                                    {{$member->member_type}}
                                                @elseif($member->member_type == 'life member')
                                                    {{$member->member_type}}
                                                @elseif($member->member_type == 'fellow member')
                                                    {{$member->member_type}}
                                                @endif

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nationality</th>
                                            <td>{{$member->nationality}}</td>
                                        </tr>
                                        <tr>
                                            <th>Mobile</th>
                                            <td>{{$member->mobile}}</td>
                                        </tr>
                                        <tr>
                                            <th>Date of Birth</th>
                                            <td>{{$member->date_of_birth}}</td>
                                        </tr>
                                        <tr>
                                            <th>Application date</th>
                                            <td>{{$member->applicant_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Present Address</th>
                                            <td>{{$member->present_address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Telephone</th>
                                            <td>{{$member->telephone}}</td>
                                        </tr>
                                        <tr>
                                            <th>Residiansial Number</th>
                                            <td>{{$member->res}}</td>
                                        </tr>
                                        <tr>
                                            <th>Malling Address</th>
                                            <td>{{$member->malling_address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Degree</th>
                                            <td>{{$member->degree}}</td>
                                        </tr>
                                        <tr>
                                            <th>University</th>
                                            <td>{{$member->university}}</td>
                                        </tr>
                                        <tr>
                                            <th>Year</th>
                                            <td>{{$member->year}}</td>
                                        </tr>

                                    </table>
                                </div>
                                <div  style="width: 48%; float: left; padding: 10px;">
                                    <table class="table">
                                        <tr>
                                            <th>Position</th>
                                            <td>{{$member->position}}</td>
                                        </tr>
                                        <tr>
                                            <th>Organization</th>
                                            <td>{{$member->organization}}</td>
                                        </tr>
                                        <tr>
                                            <th>Service Year</th>
                                            <td>{{$member->service_year}}</td>
                                        </tr>
                                        <tr>
                                            <th>Job Nature</th>
                                            <td>{{$member->job_nature}}</td>

                                        <tr>
                                            <th>Bodies</th>
                                            <td>{{$member->bodies}}</td>
                                        </tr>
                                        <tr>
                                            <th>Publication File</th>
                                            <td>
                                                <img src="{{asset($member->publication_file)}}" alt="" height="150" width="150">
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Signature File</th>
                                            <td>
                                                <img src="{{ asset($member->signature_file)}}" alt="" height="150" width="150">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if($member->status == '1')
                                                    {{'active'}}
                                                @else
                                                    {{'Inactive'}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td>
                                                <a href="{{route('approve.member',$member->id)}}" class="btn btn-primary"> @if($member->status == '1')
                                                        {{'UnApproved'}}
                                                    @else
                                                        {{'Approved'}}
                                                    @endif</a>
                                            </td>
                                        </tr>
                                    </table>

                                </div>


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
