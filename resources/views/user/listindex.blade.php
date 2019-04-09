@extends('adminlayout')
@section('links')
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
  
$(document).ready(function() {
  $('#example').DataTable();
} );

  </script>
@endsection
@section('nav')



<div class="container">
  <h1 class="text-center">User Details</h1>
</div>
<div class="container  " >
<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
<form  action="/user"  >
              


<table class="table container"cellspacing="0" id="example">
  <thead>
    <tr>
     
     <th scope="col">Name</th>
     <th scope="col">User Email</th>
     <th scope="col">Address</th>
     <th scope="col">Phone Number</th>
     
     <th scope="col">User Role</th>
     <th scope="col">Action</th>
     <th scope="col">Update Role</th>
    

      
    </tr>
  </thead>
  <tbody>

     @foreach($datas as $data)
    <tr>
      
     
    
      <td>{{$data->name}}</td>
      
      <td>{{$data->email}}</td>
       <td>{{$data->address}}</td>
       <td>{{$data->phone_no}}</td>

      <td>{{$data->role}}</td>
      <td>
              <form method="POST" action="/userupdate/{{ $data->id }}">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger ">Delete</button>
               
              </form>
       </td>

     <td><form method="POST" action="/userupdate/{{ $data->id }}" >
        @csrf
       @method('PATCH')
        <div>
          <button type="submit" class="btn btn-success" value="admin" name="role">Admin</button>
        </div>
         
        </form>
      </td>
      
     
         
    </tr>
      @endforeach
</tbody>
</table>

</form>
</div>
</div>
</div>
</div>
 @endsection  
@section('footer')
@endsection
