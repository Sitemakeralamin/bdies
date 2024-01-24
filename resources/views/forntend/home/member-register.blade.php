@extends('forntend.master')
@section('title')
    | Register Member
@endsection
@section('content')
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3 class="text-center fw-bold text-primary">APPLICATION FORM FOR MEMBERSHIP</h3>
                    <div class="card card-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{route('save.member')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label  class="col-md-3" for="name">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                                    @error('name')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Father's Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="father_name" class="form-control" value="{{old('father_name')}}">
                                    @error('father_name')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Date of Birth</label>
                                <div class="col-md-9">
                                    <input type="date" name="date_of_birth" class="form-control" value="{{old('date_of_birth')}}">
                                    @error('date_of_birth')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Nationality</label>
                                <div class="col-md-9">
                                    <input type="text" name="nationality" class="form-control" value="{{old('nationality')}}">
                                    @error('nationality')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Malling Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="malling_address" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Present Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="present_address" class="form-control" value="{{old('present_address')}}">
                                    @error('present_address')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Telephone(Office)</label>
                                <div class="col-md-9">
                                    <input type="text" name="telephone" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}">
                                    @error('mobile')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">E-mail</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-3">Res:</label>
                                <div class="col-md-9">
                                    <input type="text" name="res" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Type of Membership applied for:</label>
                                <div class="col-md-9">
                                    <label for="student_member"><input type="radio" name="member_type" id="student_member" value="student member" class="me-2">Student Member</label>
                                    <label for="life_member"><input type="radio" id="life_member" name="member_type" value="life member" class="me-2">Life Member</label>
                                    <label for="life_member"><input type="radio" id="life_member" name="member_type" value="fellow member" class="me-2">fellow Member</label>
                                    @error('member_type')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label  class="col-md-3">Academic Qualification</label>
                                <div class="col-md-9">
                                    <div id="academicQualification" class="input-group hdtuto control-group lst increment">
                                    <div class="custom_field">
                                        Degree<input type="text" name="degrees[]" class="form-control">
                                    </div>
                                    <div class="custom_field">
                                        Institute/University<input type="text" name="univercities[]" class="form-control">
                                    </div>
                                    <div class="custom_field">
                                       Year<input type="text" name="years[]" class="form-control">
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="btn btn-success addQualification" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add more</button>
                                    </div>
                                    </div>

                                    <div class="cloneQualification d-none">
                                        <div class="removeQualification control-group lst2 input-group" style="margin-top:10px">
                                            <div class="custom_field">
                                                Degree<input type="text" name="degrees[]" class="form-control">
                                            </div>
                                            <div class="custom_field">
                                                Institute/University<input type="text" name="univercities[]" class="form-control">
                                            </div>
                                            <div class="custom_field">
                                                Year<input type="text" name="years[]" class="form-control">
                                            </div>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger removeQualificationBtn" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3"></label>
                                <div class="col-md-9">
                                  <p>Field of specialization (if any) with current academic/research/ technological interest (if other
                                      than specialization):</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Service record:</label>
                                <div class="col-md-9">
                                    <div id="jobPosition" class="input-group hdtuto control-group lst incrementJobPosition">
                                    <div class="custom02_field">
                                        Position<input type="text" name="positions[]" class="form-control">
                                    </div>
                                    <div class="custom02_field">
                                       Organization<input type="text" name="organizations[]" class="form-control">
                                    </div>
                                    <div class="custom02_field">
                                        Year<input type="text" name="service_years[]" class="form-control">
                                    </div>
                                    <div class="custom02_field">
                                        Nature of Job<input type="text" name="jobs[]" class="form-control">
                                    </div>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success addJobPosition" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add more</button>
                                        </div>
                                    </div>

                                    <div class="cloneJobPosition d-none">
                                        <div class="removeJobPosition control-group lst2 input-group" style="margin-top:10px">
                                            <div class="custom02_field">
                                                Position<input type="text" name="positions[]" class="form-control">
                                            </div>
                                            <div class="custom02_field">
                                                Organization<input type="text" name="organizations[]" class="form-control">
                                            </div>
                                            <div class="custom02_field">
                                                Year<input type="text" name="service_years[]" class="form-control">
                                            </div>
                                            <div class="custom02_field">
                                                Nature of Job<input type="text" name="jobs[]" class="form-control">
                                            </div>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger removeJobPositionBtn" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3"></label>
                                <div class="col-md-9">
                                    <p>N.B: Nature of job includes Teaching/Research/Others (Please specify)
                                        For the Student Membership, please attach a certificate showing the eligibility of the applicant
                                        from his/her own Head of the Department, Division or Institution.)</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Membership in other Learned Societies/ Bodies:</label>
                                <div class="col-md-9">
                                    <input type="text" name="bodies" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">List of publications (additional sheet may be attached, if needed):</label>
                                <div class="col-md-9">
                                    <input type="file" name="publication_file">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Application Date</label>
                                <div class="col-md-9">
                                    <input type="Date" name="applicant_date" class="form-control" value="{{old('applicant_date')}}">
                                    @error('applicant_date')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3">Signature</label>
                                <div class="col-md-9">
                                    <input type="file" name="signature_file" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success btn-small px-5 ">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')

{{--    add Qualification code--}}
    <script type="text/javascript">
        $(document).ready(function() {
            $(".addQualification").click(function(){
                var addQualification = $(".cloneQualification").html();
                $(".increment").after(addQualification);
            });
            $("body").on("click",".removeQualificationBtn",function(){
                $(this).parents(".removeQualification").remove();
            });
        });
    </script>
{{--    End Qualification code--}}

{{--    add JobPosition code--}}

<script type="text/javascript">
    $(document).ready(function() {
        $(".addJobPosition").click(function(){
            var addJobPosition = $(".cloneJobPosition").html();
            $(".incrementJobPosition").after(addJobPosition);
        });
        $("body").on("click",".removeJobPositionBtn",function(){
            $(this).parents(".removeJobPosition").remove();
        });
    });
</script>

{{--    End JobPosition code--}}

@endpush
