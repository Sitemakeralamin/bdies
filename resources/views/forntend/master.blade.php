<!doctype html>
<html lang="en"/>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .logo
        {
            height: 75px;
            width: 89px;
        }
        .sidebar
        {
            border-top: 3px solid greenyellow;
            background-color: #F4F2ED;
            padding: 5px;
        }
        .custom_para {
            background-color: #544B42;
            color: white;
            margin-top: -52px;
            padding: 8px;
            overflow: hidden;
            position: relative;
            font-weight: bold;

        }
        .displayContent
        {
            width: 33%;
            float: left;
            margin-right: 2px;
        }
        .social_link
        {
            font-size: 25px;
            color: white;
            padding: 5px;
            text-align: center;
        }
        .custom_field
        {
            width: 33%;
            float: left;
        }
        .custom02_field
        {
            width: 25%;
            float: left;
        }
    </style>
    <title> BEIS @yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #00538B">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{route('home')}}">
            <img src="{{asset('frontend/logo.png')}}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-family: 'Libre Baskerville', serif;">
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Publications
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('journalPage',['journal'=>'journal'])}}" >Journal</a></li>
                        <li><a class="dropdown-item" href="{{route('abstractPage',['abstract'=>'abstract'])}}" >Abstract Book</a></li>
                        <li><a class="dropdown-item" href="{{route('newsPage',['news'=>'news'])}}">News Letter</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('meetingeventPage')}}" class="nav-link text-white fw-bold">Meetting and Events</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Program
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{route('workpage',['workpage'=>'workpage'])}}">workshop</a></li>
                        <li><a class="dropdown-item " href="{{route('seminarpage',['seminar'=>'seminar'])}}">Seminar</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Membership
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{route('frontend.fellow-member',['fellow'=>'fellow'])}}">Fellow Member </a></li>
                        <li><a class="dropdown-item " href="{{route('frontend.life-member',['life'=>'life'])}}">Life Member</a></li>
                        <li><a class="dropdown-item " href="{{route('frontend.student-member',['student'=>'student'])}}">Student Member</a></li>
                        <li><a class="dropdown-item " href="{{route('member.register')}}">Member Application</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('frontend.message')}}" class="nav-link text-white fw-bold">Message</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Committee
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  " href="{{route('executive-committee',['executive'=>'executive_committee'])}}">Executive committee 2022-23</a></li>
                        <li><a class="dropdown-item  " href="{{route('previous-committee',['previous'=>'perivious_committee'])}}">Previous Committee</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('about_us',['about_us'=>'about_us'])}}">About BEIS</a></li>
                        <li><a class="dropdown-item" href="{{route('mission',['mission'=>'mission'])}}">Mission</a></li>
                        <li><a class="dropdown-item" href="{{route('vision',['vision'=>'vision'])}}">Vision</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link text-white fw-bold">Contact Us</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

@yield('content')

{{--footer section start--}}

<section class="py-4" style="background-color: #a0aec0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="text-center">Social Links</h4>
                <ul class="list-group text-center">
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none">
                        <a href="#" class="social_link"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="social_link"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="social_link"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="social_link"><i class="fa-brands fa-youtube"></i></a>
                    </li>

                </ul>
            </div>
            <div class="col-md-4">
                <h4 >Quick Links</h4>
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none"><a href="" class="nav-link text-white">A second item</a></li>
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none"><a href="" class="nav-link text-white">A second item</a></li>
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none"><a href="" class="nav-link text-white">A second item</a></li>
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none"><a href="" class="nav-link text-white">A second item</a></li>
                    <li class="list-group-item" style="background-color: #A0AEC0;border: none"><a href="" class="nav-link text-white">A second item</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 >Contact BEIS</h4>
                <address class="text-white">
                    <ul>
                        <li class="list-group-item"><i class="fa-solid fa-location-pin"></i> Dhanmondi-32</li>
                        <li class="list-group-item"><i class="fa-solid fa-phone"></i> 01700783201</li>
                        <li class="list-group-item"><i class="fa-solid fa-envelope"></i> infocarebd@gmail.com</li>
                    </ul>
                </address>
            </div>
            <div class="col-md-12">
                <p style="margin-top: 10px; text-align: center">&copy; 2022 all right reserved BEIS. design and developed by <a href="www.infocarebd.com" class="text-white">info care</a></p>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

{{--data table script--}}

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@stack('script')
</body>
</html>
