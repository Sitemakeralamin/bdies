@extends('forntend.master')

@section('title')
    | contact us
@endsection
@section('content')
    <section class="py-5">
        <div class="container p-0">
            <div class="row">

                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <div class="card-header" style="background-color:#00538B">
                            <h3 style="color:#fff">Our office Address:</h3>
                        </div>
                        <div class="card-body ">
                            <address>
                                <p><i class="fa fa-location-arrow" aria-hidden="true"></i> Dhanmondi-32</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>  01700783201</p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> infocarebd@gmail.com</p>
                            </address>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">

                    <div class="card h-100">

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="card-header" style="background-color: #00538B">
                            <h4 class="text-white fw-bold">Any Question just Contact us field up bellow the form and submit.</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('submit.form')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Name <span style="color:red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control">
                                        @error('name')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Phone <span style="color:red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="tel" name="phone" class="form-control">
                                        @error('phone')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">E-mail <span style="color:red">*</span></label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control">
                                        @error('email')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Message <span style="color:red">*</span></label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="message"></textarea>
                                        @error('message')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03912029734!2d90.375862!3d23.74703065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1669449341836!5m2!1sen!2sbd"  height="450" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
