<?php
use App\Models\Contact;
use App\Models\Member;

//contact message
$message = Contact::where('status',0)->get('status');
$count = '';
foreach ($message as $message)
{
    $count++;
}

//member approve signal

$member = Member::where('status','0')->get('status');
$memberCount = '';
foreach ($member as $mem)
{
   $memberCount++;
}

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('backend')}}/dist/img/finalbeis.png" alt="bdeis" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BDIES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Publications
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('publication.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Publication</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('publication.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Publication</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Program
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('programe.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('programe.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Programe</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Membership <span class="badge badge-danger"><?php echo $memberCount;?></span>
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('fellow_member')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fellow Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('life_member')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Life Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('student_member')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Member</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Committee
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('committee')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Committee Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('committee.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Committee</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            About Us
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('about.add')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>See All </p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Meetting and Events
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('meetting')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Meetting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('meetting.view')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Meetting </p>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item">

                    <a href="{{route('message')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>

                        <p>
                            Message <span class="badge badge-danger"><?php echo $count;?></span>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Home Page
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>Slider</p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('slider.add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Slider</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('slider.view')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>view Slider</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
