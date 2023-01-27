<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Info</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>


<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="p-3 mb-2 bg-light text-white">
@extends('students.layout')
@section('content')

<div class="card">
  <div align = "right">
  <div class="card-header">
  <div align = "center">
    <h1 class="display-4"  style="color:black"><b>Enter Student Information</h1>
</div>
  <a href="{{url('studentinfo')}}" class="btn btn-danger btn-sm  fa fa-arrow-right"> BACK</a>
  </div>
</div>

  <div class="card-body">
      
@if ($errors->any())


<div class="alert alert-danger">

<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach

</ul>

</div>

@endif

<div class="shadow p-3 mb-5 bg-white rounded">
      <form action="{{ url('studentinfo') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label style="color:black">Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label style="color:black">Address</label></br>
        <input type="text" name="address" id="address" class="form-control" ></br>
        <label style="color:black">Gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control" ></br>
        <label style="color:black">NIC</label></br>
        <input type="text" name="nic" id="nic" class="form-control" ></br>
        <label style="color:black">Mobile number</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" maxlength="10"></br>
        <label style="color:black">Image Upload (Maximum Upload size: 10MB .jpg .jpeg .gif .png .webp)</label></br>
        <input class="form-control" name="photo" type="file" id="photo"><br/>
        </div>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  <center><footer class="main-footer" style="color: black;">   <strong>Copyright &copy; 2023 <a href="#">School Information Management</a>.</strong>
    All rights reserved.</footer></center>
 
  </footer>
</div>
@stop

