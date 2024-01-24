@extends('forntend.master')
@section('title')
    | member-view
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(isset($fellow_members))
                   <div class="card">
                       <div class="card-header">
                           <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Fellow member list</h3>
                       </div>
                       <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                               <thead>
                               <tr>
                                   <th>S.N</th>
                                   <th>Name</th>
                                   <th>Father's Name</th>
                                   <th>Phone</th>
                                   <th>E-mail</th>
                                   <th>View</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($fellow_members as $fellow_member)
                                   <tr>
                                       <td>{{$loop->iteration}}</td>
                                       <td>{{$fellow_member->name}}</td>
                                       <td>{{$fellow_member->father_name}}</td>
                                       <td>{{$fellow_member->mobile}}</td>
                                       <td>{{$fellow_member->email}}</td>
                                       <td><a href="{{route('fellow-details',['id'=>$fellow_member->id,'fellow'=>'fellow'])}}" class="btn btn-success btn-sm">view details</a></td>
                                   </tr>
                               @endforeach

                               </tbody>
                           </table>
                       </div>
                   </div>
                    @elseif(isset($life_members))
                        <div class="card">
                            <div class="card-header">
                                <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Life member list</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($life_members as $life_member)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$life_member->name}}</td>
                                            <td>{{$life_member->father_name}}</td>
                                            <td>{{$life_member->mobile}}</td>
                                            <td>{{$life_member->email}}</td>
                                            <td><a href="{{route('life-details',['id'=>$life_member->id,'life'=>'life'])}}" class="btn btn-success btn-sm">view details</a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @elseif(isset($student_members))
                        <div class="card">
                            <div class="card-header">
                                <h3 style="color: #0f6674; font-family: 'Playfair Display', serif;">Student member list</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($student_members as $student_member)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$student_member->name}}</td>
                                            <td>{{$student_member->father_name}}</td>
                                            <td>{{$student_member->mobile}}</td>
                                            <td>{{$student_member->email}}</td>
                                            <td><a href="{{route('student-details',['id'=>$student_member->id,'student'=>'student'])}}" class="btn btn-success btn-sm">view details</a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        <span class="text-center text-danger">No Member Available</span>
                    @endif
                </div>
            </div>
        </div>

    </section>
@endsection
