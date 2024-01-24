@extends('forntend.master')
@section('title')
    | Committee
@endsection
@section('content')
  <section class="py-5">
      <div class="container">
          <div class="row">
              @if(isset($previousCategory))
              <div class="col-md-12">
                  <h3  style="color: #0f6674; font-family: 'Playfair Display', serif;"> Previous Committee List </h3>
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

                    @foreach($previousCategory as $committee)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$committee->e_name}}</td>
                            <td>{{$committee->b_name}}</td>
                            <td>{{$committee->email}}</td>
                            <td>{{$committee->phone}}</td>
                            <td>{{$committee->affiliation}}</td>
                            <td>{{$committee->type}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>

                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
              </div>
              @elseif(isset($executiveCategory))
                  <div class="col-md-12">
                      <h3  style="color: #0f6674; font-family: 'Playfair Display', serif;"> Executive Committee Pdf </h3>
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

                        @foreach($executiveCategory as $committee)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$committee->e_name}}</td>
                                <td>{{$committee->b_name}}</td>
                                <td>{{$committee->email}}</td>
                                <td>{{$committee->phone}}</td>
                                <td>{{$committee->affiliation}}</td>
                                <td>{{$committee->type}}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>

                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                  </div>
              @else
                  <h1 class="text-danger text-center">No Data Available.</h1>
              @endif
          </div>
      </div>

  </section>
@endsection
