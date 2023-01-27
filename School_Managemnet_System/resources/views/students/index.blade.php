<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <div align = "left">
  <h3 class="display-9"  style="color:#eeeee4"><b> Admin Dashboard</b></h3>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            
              <img src="dist/img/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="60" width="60">
             <br/><br/>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <h6 class="display-9"  style="color:#eeeee4"><b> SCHOOL <br/>MANAGEMENT <br/>SYSTEM</b></h6>
      
      <!-- Sidebar Menu -->
      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <br/>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Teachers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Subjects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Classes
              </p>
            </a>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-o"></i>
              <p>
                Parents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Privileges</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Students
                
              </p>
            </a>
           
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-pdf-o"></i>
              <p>
                Attendence Report
              </p>
            </a>
          </li>
         
      </nav>
      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </aside>
  <!-- /.content-wrapper -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="p-3 mb-2 bg-light text-white">
    
@extends('students.layout')
@section('content')

<div class="container" >
        <div class="row">
        @if(session('status'))

        <h6 class =  "alert alert-success alert-dismissible"> <div align = "right"><b>{{session('status')}}</b></h6></div>
        @endif
        @if(session('statusD'))
        <div class="alert alert-danger alert-dismissible=alert aria-label=Close ">
       <div align = "right"> <b>{{session('statusD')}}</b></div>
        
</div>
      @endif
      @if(session('statusU'))
        <h6 class =  "alert alert-primary alert-dismissible"> <div align = "right"><b>{{session('statusU')}}</b></h6></div>
      @endif
      <div class="p-3 mb-2 bg-light text-white">
        
    <div class="container">
        <div class="row">
                <div class="card">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <a href="{{ url('/studentinfo/create') }}" class="btn btn-success" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"> Add New</i> 
                            
                        </a>
                        <div align = "right">
                        <div class="col-auto">
                            <a href="{{route('exportpdf')}}" class="btn btn-info fa fa-file"> Export PDF 
                        </a>
                        </div>
                        </div>
                        <br/>
                        <form action="" class = "col-15">
                        <div class="form-group">
                      </div>
                  
                    <input type="search" name="search" id="" class="form-control" placeholder="Search by Name or NIC " value="{{$search}}" /><br/>
                    <button class="btn btn-primary" ><i class="fa fa-search"> Search</i></button>
                    <a href="{{url('/studentinfo')}}"> 
                    <button class="btn btn-primary" type="button"><i class="fa fa-refresh"> Reset</i></button>
                    </a>
                    </form>     
                     
                        <br/>
                        
  <div align = "center">
    <h1 class="display-4"  style="color:black"><b>Student Information</b></h1>
</div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                       
                            <table class="table">
                                <thead class = "thead-light">
                                    <tr >
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Gender</th> 
                                        <th style="text-align: center;">NIC</th>
                                        <th>Mobile</th> 
                                        <th>Image</th> 
                                        <th style="text-align: center;">Action</th> 
                                </thead>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->nic }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>
                                            <img src="{{ asset($item->photo) }}" width= '50' height='50' class="rounded-circle" />
                                        </td>
                                        <td>
                                            <a href="{{ url('/studentinfo/' . $item->id) }}" title="View Student"><button class="btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/studentinfo/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/studentinfo' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                
                                                <button type="submit" class="btn-danger btn-sm " title="Delete Contact" onclick="return confirm(Confirm)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
                <center><footer class="main-footer" style="color: black;">   <strong>Copyright &copy; 2023 <a href="#">School Information Management</a>.</strong>
    All rights reserved.</footer></center>
 
  </footer>
            </div>
           
        </div>
    </div>
    
@endsectionS
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
