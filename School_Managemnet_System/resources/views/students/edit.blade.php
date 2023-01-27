<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   <h1 class="display-4" style="color:black"><b>Edit Student Information</b></h1>
</div>
  <a href="{{url('studentinfo')}}" class="btn btn-danger btn-sm fa fa-arrow-right"> BACK</a>
  </div>
</div>

  <div class="card-body">
  <div class="shadow p-3 mb-5 bg-white rounded">
      <form action="{{ url('studentinfo/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label style="color:black"><b>Name</b></label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control" required></br>
        <label style="color:black"><b>Address</b></label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control" required></br>
        <label style="color:black"><b>Gender</b></label></br>
        <input type="text" name="gender" id="gender" value="{{$students->gender}}" class="form-control" required></br>
        <label style="color:black"><b>NIC</b></label></br>
        <input type="text" name="nic" id="nic" value="{{$students->nic}}" class="form-control" required></br>
        <label style="color:black"><b>Mobile number</b></label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control" required></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
  <center><footer class="main-footer" style="color: black;">   <strong>Copyright &copy; 2023 <a href="#">School Information Management</a>.</strong>
    All rights reserved.</footer></center>
 
  </footer>
</div>
 
@stop