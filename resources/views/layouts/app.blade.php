<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/rickshaw/rickshaw.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/bower_components/chartist/dist/chartist.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/images/favicon.html') }}" />
</head>
<body class="sidebar-dark">

  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><h2>Enrollment System</h2></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </button>
          <div class="dropdown-menu">
               <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          </div>
        </div>
      
       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">{{ Auth::user()->name }}</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('allStudents') }}">
                <i class="fa fa-users mr-2"></i>
                <span class="menu-title">All Student's</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('addStudent') }}">
                <i class="fa fa-user mr-2"></i>
                <span class="menu-title">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Courses</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('cse') }}">Graphic Design</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('eee') }}">Animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('bba') }}">Web Development</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('sivil') }}">Android App</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('english') }}">Basic IT course</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('digitalMarketing') }}">Digital Marketing</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Trainer</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('addTeacher') }}">Add Trainer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('allTeacher') }}">All Trainer</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
          </ul>
        </nav>
        <!-- partial -->


        <div class="content-wrapper">
          @yield('content')
        </div>



        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Tanvir Ahmed</a> &copy; 2022
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('admin/node_modules/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('admin/node_modules/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('admin/node_modules/flot/jquery.flot.categories.js') }}"></script>
  <script src="{{ asset('admin/node_modules/flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('admin/node_modules/rickshaw/vendor/d3.v3.js') }}"></script>
  <script src="{{ asset('admin/node_modules/rickshaw/rickshaw.min.js') }}"></script>
  <script src="{{ asset('admin/bower_components/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/chartist-plugin-legend/chartist-plugin-legend.js') }}"></script>
  <script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/misc.js') }}"></script>
  <script src="{{ asset('admin/js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/dashboard_1.js') }}"></script>
  <script src="{{ asset('admin/js/data-table.js') }}"></script>
  <!-- End custom js for this page-->

  <script>
    @if (Session::has('message'))
      var type="{{ Session::get('alert-type','info') }}"
        switch(type){
              case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;
              case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;
              case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;
              case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
        }
    @endif
  </script>

 
</body>
</html>
