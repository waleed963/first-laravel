
<!DOCTYPE html>
<html lang="ar">
  <head >
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>الكفيل | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css')}}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
 
      <div class="wrapper">

        <header class="main-header">

          <!-- Logo -->
          <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>W</b>AL</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{__('words.Al-Walid')}}</b> {{__('words.to_sponsor_an_orphan')}} </span>
          </a>

          <!-- Header Navbar: style can be found in header.less -->
          <nav class=" navbar navbar-static-top navbar-expand-md shadow-sm ">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
              </ul>
            </div>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="@if(app()->getLocale() == 'ar') {{ url('lang/en') }} @else {{ url('lang/ar') }} @endif" class="nav-link">
                @if(app()->getLocale() == 'ar')
                  EN
                @else
                  AR
                @endif
              </a>
            </li>
          </nav> 
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar direction ">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-right image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-right info">
                <p>میثم جعفری</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <hr>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu ">
              <li class="treeview {{'/' == request()->path() ? 'active' : '' }}">
                <a href="/dashboard">
                  <i class="fa fa-dashboard"></i> <span>{{__('words.Dashboard')}}</span>
                </a>
              </li>
              <li class="treeview {{'orphans' == request()->path() ? 'active' : '' }}">
                <a href="{{ route('orphans.index') }}" class="nav-link">
                  <i class="fa fa-group"></i> <span> @lang('words.Orphans')</span>
                </a>
              </li>
              <li class="treeview {{'bails' == request()->path() ? 'active' : '' }}">
                <a href="{{ route('bails.index') }}">
                  <i class="fa fa-money"></i> <span> {{__('words.Bails')}} </span>
                </a>
              </li>

              <li class="treeview {{'' == request()->path() ? 'active' : '' }}">
                <a href="">
                  <i class="fa fa-eye"></i> <span> {{__('words.Distributions')}} </span>
                </a>
              </li>

              <li class="treeview {{'' == request()->path() ? 'active' : '' }}">
                <a href="">
                  <i class="fa fa-hand-peace-o"></i> <span> {{__('words.Donations')}} </span>
                </a>
              </li>

              <li class="treeview {{'' == request()->path() ? 'active' : '' }}">
                <a href="">
                  <i class="fa fa-book"></i> <span > {{__('words.Prescription')}} </span>
                </a>
              </li>

              <li class="treeview {{'' == request()->path() ? 'active' : '' }}">
                <a href="">
                  <i class="fa fa-bank"></i> <span> {{__('words.Financial_Fund')}} </span>
                </a>
              </li class="treeview {{'' == request()->path() ? 'active' : '' }}">

              <li class="treeview {{'#exampleModalCenter' == request()->path() ? 'active' : '' }}">
                <a href="" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fa fa-edit"></i> <span> {{__('words.Add_New')}} </span>
                </a>
              </li>
              <li class="treeview {{'users' == request()->path() ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                  <i class="fa fa-user"></i> <span> {{__('words.Users')}} </span>
                </a>
              </li>
            
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>
                  
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
            </h1>
          </section>
            <div class="body">
              @yield('content')
            </div>
        </div>
        <!-- End Content Wrapper. Contains page content -->

        


        <footer class="main-footer text-center">
          <strong>Copyright &copy; 2023-2024 <a href="http://www.facebook.com/waled.sy.393">Waleed Alabdallah</a>.</strong> All rights
          reserved.
        </footer>
      </div>


      

      <!-- jQuery 2.2.0 -->
      <script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.6 -->
      <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
      <!-- Morris.js charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="{{ asset('plugins/morris/morris.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
      <!-- jvectormap -->
      <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
      <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ asset('plugins/knob/jquery.knob.js')}}"></script>
      <!-- daterangepicker -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
      <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- datepicker -->
      <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
      <!-- Slimscroll -->
      <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
      <!-- FastClick -->
      <script src="{{ asset('plugins/fastclick/fastclick.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('dist/js/app.min.js')}}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('dist/js/demo.js')}}"></script>
      <script>
        $(function () {
          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
            });
          });
      </script>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header direction">
                <h5 class="modal-title" id="exampleModalLongTitle"> إضافة جديد </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body d-inline-block  justify-content-center align-items-center ">
              <a href="{{route('users.create')}}" type="button" class="btn btn-warning mr-auto p-2 "> إضافة مستخدم </a>
              <a href="{{route('orphans.create')}}" type="button" class="btn btn-primary ml-auto p-2 "> إضافة أيتام </a>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> إغلاق </button>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
