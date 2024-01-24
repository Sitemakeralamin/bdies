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
                    <div class="col-md-8">
                        <div class="card">
                            {{-- @if(session()->has('message'))
                            <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                            @endif --}}
                            <div class="card-header">
                                @if(isset($committee))

                                    <h4 class="card-title">Edit Committee</h4>
                                @else
                                <h4 class="card-title">Add Committee Member</h4>
                                 @endif

                            </div>
                            @if(isset($committee))
                            <div class="card-body">
                                <form action="{{ route('committee.update',$committee->id)}}" method="POST">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name_en" class="form-label">Name English <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" value="{{($committee->e_name)? $committee->e_name :''}}" id="name_en" name="name_en" class="form-control" aria-describedby="passwordHelpBlock" placeholder="English Name">
                                        @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name_bn" class="form-label">Name Bangla <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" id="name_bn" value="{{($committee->b_name)? $committee->b_name :''}}" name="name_bn" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Bangla Name">
                                        @error('name_bn')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="affiliation" class="form-label">Affiliation <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" id="affiliation" value="{{($committee->affiliation)? $committee->affiliation :''}}" name="affiliation" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Affiliation name">
                                        @error('affiliation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="form-label">Email <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="email" value="{{($committee->email)? $committee->email :''}}" placeholder="Enter E-mail" id="email" name="email" class="form-control" aria-describedby="passwordHelpBlock">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="form-label">Phone <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="tel" id="phone" value="{{($committee->phone)? $committee->phone :''}}" name="phone" placeholder="Enter phone" class="form-control" aria-describedby="passwordHelpBlock">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="form-label">Committee Type <span style="color: red;font-weight:bold">*</span></label>
                                        <select name="committee_type" id="committee_type" class="form-control">
                                            <option value="">Select type</option>
                                            <option value="executive_committee" {{ ($committee->type == 'executive_committee') ? 'selected' : '' }}>Executive Committee</option>
                                            <option value="previous_committee" {{ ($committee->type == 'previous_committee') ? 'selected' : '' }}>Previous Committee</option>
                                        </select>

                                        @error('committee_type')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">


                                       <button class="btn btn-sm btn-success float-right" type="submit">Update</button>

                                    </div>
                                </form>

                            </div>
                            @else
                            <div class="card-body">
                                <form action="{{ route('committee.form.submit')}}" method="POST">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name_en" class="form-label">Name English <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" id="name_en" name="name_en" class="form-control" aria-describedby="passwordHelpBlock" placeholder="English Name">
                                        @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name_bn" class="form-label">Name Bangla <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" id="name_bn" name="name_bn" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Bangla Name">
                                        @error('name_bn')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="affiliation" class="form-label">Affiliation <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="text" id="affiliation" name="affiliation" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Affiliation name">
                                        @error('affiliation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="form-label">Email <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="email" placeholder="Enter E-mail" id="email" name="email" class="form-control" aria-describedby="passwordHelpBlock">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="phone" class="form-label">Phone <span style="color: red;font-weight:bold">*</span></label>
                                        <input type="tel" id="phone" name="phone" placeholder="Enter phone" class="form-control" aria-describedby="passwordHelpBlock">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">
                                        <label for="name" class="form-label">Committee Type <span style="color: red;font-weight:bold">*</span></label>
                                        <select name="committee_type" id="committee_type" class="form-control">
                                            <option value="">select type</option>
                                            <option value="executive_committee">Executive Committee</option>
                                            <option value="perivious_committee">Perivious Committee</option>
                                        </select>
                                        @error('committee_type')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="row mb-3">


                                       <button class="btn btn-sm btn-success float-right" type="submit">Submit</button>

                                    </div>
                                </form>

                            </div>
                            @endif
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                {{-- @if(session()->has('message'))
                                <h2 class="text-success float-right"> {{ session()->get('message') }}</h2>
                                @endif --}}

                                <div class="card-header">
                                    <h4 class="card-title">Import Committee Member</h4>
                                </div>

                                <div class="card-body">
                                    <button id="downloadSampleBtn" class="btn  btn-sm btn-success mb-3 mt-4 ml-auto">Download Sample</button>
                                    <form class="row g-3" action="{{ route('committee.import.submit')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-auto">
                                          <label for="inputPassword2" class="visually-hidden">Import <span style="color: red;font-weight:bold">*</span></label>
                                          <input type="file" class="form-control" id="inputPassword2" name="csv">
                                          @error('csv')
                                          <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="col-auto">
                                          <button type="submit" class="btn  btn-sm btn-success mb-3 mt-4 ml-auto">Submit</button>

                                        </div>
                                      </form>

                                </div>

                            </div>
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


    <script>
       document.getElementById('downloadSampleBtn').addEventListener('click', function() {
        var link = document.createElement('a');
        link.href = "{{ asset('backend/csv/committee-sample.csv') }}";
        link.download = 'committee-sample.csv';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>
@endpush
