@extends('forntend.master')
@section('title')
    | single member-view
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <div class="card card-body">
                       @if(isset($fellow_details))
                       <table class="table">
                           <tr>
                               <th>Name</th>
                               <td>{{$fellow_details->name}}</td>
                           </tr>
                           <tr>
                               <th>Father Name</th>
                               <td>{{$fellow_details->father_name}}</td>
                           </tr>
                           <tr>
                               <th>Nationality</th>
                               <td>{{$fellow_details->nationality}}</td>
                           </tr>
                           <tr>
                               <th>Mobille</th>
                               <td>{{$fellow_details->mobile}}</td>
                           </tr>
                           <tr>
                               <th>E-mail</th>
                               <td>{{$fellow_details->email}}</td>
                           </tr>
                           <tr>
                               <th>Date of Birth</th>
                               <td>{{$fellow_details->date_of_birth}}</td>
                           </tr>
                           <tr>
                               <th>Application Date</th>
                               <td>{{$fellow_details->applicant_date}}</td>
                           </tr>
                           <tr>
                               <th>Present Address</th>
                               <td>{{$fellow_details->present_address}}</td>
                           </tr>
                           <tr>
                               <th>Member Type</th>
                               <td>{{$fellow_details->member_type}}</td>
                           </tr>
                           <tr>
                               <th>Telephone</th>
                               <td>{{$fellow_details->telephone}}</td>
                           </tr>
                           <tr>
                               <th>Residiansial Number</th>
                               <td>{{$fellow_details->res}}</td>
                           </tr>
                           <tr>
                               <th>Malling Address</th>
                               <td>{{$fellow_details->malling_address}}</td>
                           </tr>
                           <tr>
                               <th>Degree</th>
                               <td>{{$fellow_details->degree}}</td>
                           </tr>
                           <tr>
                               <th>University</th>
                               <td>{{$fellow_details->university}}</td>
                           </tr>
                           <tr>
                               <th>Year</th>
                               <td>{{$fellow_details->year}}</td>
                           </tr>
                           <tr>
                               <th>Position</th>
                               <td>{{$fellow_details->position}}</td>
                           </tr>
                           <tr>
                               <th>Organization</th>
                               <td>{{$fellow_details->organization}}</td>
                           </tr>
                           <tr>
                               <th>Service Year</th>
                               <td>{{$fellow_details->service_year}}</td>
                           </tr>
                           <tr>
                               <th>Job Nature</th>
                               <td>{{$fellow_details->job_nature}}</td>
                           </tr>
                           <tr>
                               <th>Bodies</th>
                               <td>{{$fellow_details->bodies}}</td>
                           </tr>
                           <tr>
                               <th>Publication</th>
                               <td><img src="{{asset($fellow_details->publication_file)}}" alt="" height="150" width="150"></td>
                           </tr>
                           <tr>
                               <th>Signature</th>
                               <td><img src="{{asset($fellow_details->signature_file)}}" alt="" height="150" width="150"></td>
                           </tr>
                           <tr>
                               <th></th>
                               <td><a href="{{route('frontend.fellow-member',['fellow'=>'fellow'])}}" class="btn btn-success"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></td>
                           </tr>
                       </table>

                       @elseif(isset($life_details))
                               <table class="table">
                                   <tr>
                                       <th>Name</th>
                                       <td>{{$life_details->name}}</td>
                                   </tr>
                                   <tr>
                                       <th>Father Name</th>
                                       <td>{{$life_details->father_name}}</td>
                                   </tr>
                                   <tr>
                                       <th>Nationality</th>
                                       <td>{{$life_details->nationality}}</td>
                                   </tr>
                                   <tr>
                                       <th>Mobille</th>
                                       <td>{{$life_details->mobile}}</td>
                                   </tr>
                                   <tr>
                                       <th>E-mail</th>
                                       <td>{{$life_details->email}}</td>
                                   </tr>
                                   <tr>
                                       <th>Date of Birth</th>
                                       <td>{{$life_details->date_of_birth}}</td>
                                   </tr>
                                   <tr>
                                       <th>Application Date</th>
                                       <td>{{$life_details->applicant_date}}</td>
                                   </tr>
                                   <tr>
                                       <th>Present Address</th>
                                       <td>{{$life_details->present_address}}</td>
                                   </tr>
                                   <tr>
                                       <th>Member Type</th>
                                       <td>{{$life_details->member_type}}</td>
                                   </tr>
                                   <tr>
                                       <th>Telephone</th>
                                       <td>{{$life_details->telephone}}</td>
                                   </tr>
                                   <tr>
                                       <th>Residiansial Number</th>
                                       <td>{{$life_details->res}}</td>
                                   </tr>
                                   <tr>
                                       <th>Malling Address</th>
                                       <td>{{$life_details->malling_address}}</td>
                                   </tr>
                                   <tr>
                                       <th>Degree</th>
                                       <td>{{$life_details->degree}}</td>
                                   </tr>
                                   <tr>
                                       <th>University</th>
                                       <td>{{$life_details->university}}</td>
                                   </tr>
                                   <tr>
                                       <th>Year</th>
                                       <td>{{$life_details->year}}</td>
                                   </tr>
                                   <tr>
                                       <th>Position</th>
                                       <td>{{$life_details->position}}</td>
                                   </tr>
                                   <tr>
                                       <th>Organization</th>
                                       <td>{{$life_details->organization}}</td>
                                   </tr>
                                   <tr>
                                       <th>Service Year</th>
                                       <td>{{$life_details->service_year}}</td>
                                   </tr>
                                   <tr>
                                       <th>Job Nature</th>
                                       <td>{{$life_details->job_nature}}</td>
                                   </tr>
                                   <tr>
                                       <th>Bodies</th>
                                       <td>{{$life_details->bodies}}</td>
                                   </tr>
                                   <tr>
                                       <th>Publication</th>
                                       <td><img src="{{asset($life_details->publication_file)}}" alt="" height="150" width="150"></td>
                                   </tr>
                                   <tr>
                                       <th>Signature</th>
                                       <td><img src="{{asset($life_details->signature_file)}}" alt="" height="150" width="150"></td>
                                   </tr>
                                   <tr>
                                       <th></th>
                                       <td><a href="{{route('frontend.life-member',['life'=>'life'])}}" class="btn btn-success"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></td>
                                   </tr>
                               </table>

                       @elseif(isset($student_details))
                           <table class="table">
                               <tr>
                                   <th>Name</th>
                                   <td>{{$student_details->name}}</td>
                               </tr>
                               <tr>
                                   <th>Father Name</th>
                                   <td>{{$student_details->father_name}}</td>
                               </tr>
                               <tr>
                                   <th>Nationality</th>
                                   <td>{{$student_details->nationality}}</td>
                               </tr>
                               <tr>
                                   <th>Mobille</th>
                                   <td>{{$student_details->mobile}}</td>
                               </tr>
                               <tr>
                                   <th>E-mail</th>
                                   <td>{{$student_details->email}}</td>
                               </tr>
                               <tr>
                                   <th>Date of Birth</th>
                                   <td>{{$student_details->date_of_birth}}</td>
                               </tr>
                               <tr>
                                   <th>Application Date</th>
                                   <td>{{$student_details->applicant_date}}</td>
                               </tr>
                               <tr>
                                   <th>Present Address</th>
                                   <td>{{$student_details->present_address}}</td>
                               </tr>
                               <tr>
                                   <th>Member Type</th>
                                   <td>{{$student_details->member_type}}</td>
                               </tr>
                               <tr>
                                   <th>Telephone</th>
                                   <td>{{$student_details->telephone}}</td>
                               </tr>
                               <tr>
                                   <th>Residiansial Number</th>
                                   <td>{{$student_details->res}}</td>
                               </tr>
                               <tr>
                                   <th>Malling Address</th>
                                   <td>{{$student_details->malling_address}}</td>
                               </tr>
                               <tr>
                                   <th>Degree</th>
                                   <td>{{$student_details->degree}}</td>
                               </tr>
                               <tr>
                                   <th>University</th>
                                   <td>{{$student_details->university}}</td>
                               </tr>
                               <tr>
                                   <th>Year</th>
                                   <td>{{$student_details->year}}</td>
                               </tr>
                               <tr>
                                   <th>Position</th>
                                   <td>{{$student_details->position}}</td>
                               </tr>
                               <tr>
                                   <th>Organization</th>
                                   <td>{{$student_details->organization}}</td>
                               </tr>
                               <tr>
                                   <th>Service Year</th>
                                   <td>{{$student_details->service_year}}</td>
                               </tr>
                               <tr>
                                   <th>Job Nature</th>
                                   <td>{{$student_details->job_nature}}</td>
                               </tr>
                               <tr>
                                   <th>Bodies</th>
                                   <td>{{$student_details->bodies}}</td>
                               </tr>
                               <tr>
                                   <th>Publication</th>
                                   <td><img src="{{asset($student_details->publication_file)}}" alt="" height="150" width="150"></td>
                               </tr>
                               <tr>
                                   <th>Signature</th>
                                   <td><img src="{{asset($student_details->signature_file)}}" alt="" height="150" width="150"></td>
                               </tr>
                               <tr>
                                   <th></th>
                                   <td><a href="{{route('frontend.student-member',['student'=>'student'])}}" class="btn btn-success"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></td>
                               </tr>
                           </table>
                       @else
                           <span class="text-danger text-center">Somethings error! Please check this route.</span>
                       @endif
                   </div>
               </div>
            </div>
        </div>

    </section>
@endsection
