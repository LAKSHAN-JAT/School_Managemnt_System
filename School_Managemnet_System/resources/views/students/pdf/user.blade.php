<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 105%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
    
        .body-section{
            padding: 5px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 25px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color:  #5bc0de;
            width: auto;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #16a085;
        }
        table td {
            vertical-align: middle !important;
            text-align: left;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 8px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body >
    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Student Information Report</h1>
                </div>
            </div>
        </div>
        
        <div class="body-section">
            <h2 class="heading" style="text-align: center;"><u>Student List</u></h2>
            <br>
            <table class="table-bordered" align="center">
                <thead>
                    <tr >
                        <th>ID</th>
                        <th class="w-20" >Name</th>
                        <th class="w-20">Address</th>
                        <th class="w-20">Gender</th>
                        <th class="w-20">NIC</th>
                        <th class="w-20">Mobile Number</th>     
                    </tr>
                </thead>
                <tbody>
                                @foreach($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->nic }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        
 
                                @endforeach
                                </tbody>
            </table>
            <br>
        
            <p>&copy; 2023 All Rights Reserved. 
                <a href="#" class="float-right">www.doenets.lk</a>
            </p>
            
    </div>      
</body>
</html>
