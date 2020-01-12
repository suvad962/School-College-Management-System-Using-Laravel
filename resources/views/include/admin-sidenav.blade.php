<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{URL::to('/admin/dashboard')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{URL::asset('img/dashboard-admin-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Welcome, Admin</span>
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="{{URL::to('/admin/dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>
                        Teacher
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav" id="popup">
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/add-teacher')}}" class="nav-link" id="add-teacher">
                            <i class="fas fa-plus"></i>
                            <p>Add Teacher</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{URL::to('/admin/edit-teacher')}}" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Teacher</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View Teacher</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-graduate"></i>
                    <p>
                        Student
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Add Teacher</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Teacher</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View Teacher</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-cube"></i>
                    <p>
                        Class
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Add Class</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Class</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View All Class</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-book"></i>
                    <p>
                        Subjects
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Add Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View Subject</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-grip-vertical"></i>
                    <p>
                        Section
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Add Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Section</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View Section</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="pages/widgets.html" class="nav-link">
                    <i class="fas fa-feather-alt"></i>
                    <p>
                        Other Staff
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview child-nav">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="fas fa-plus"></i>
                            <p>Add Stuff</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="fas fa-edit"></i>
                            <p>Edit Staff</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="fas fa-binoculars"></i>
                            <p>View Staffs</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-poll"></i>
                    <p>Results</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-flag-checkered"></i>
                    <p>Notice</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-calendar-alt"></i>
                    <p class="text">Events</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-edit"></i>
                    <p class="text">Exam</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-calendar-week"></i>
                    <p class="text">Academic Calender</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
