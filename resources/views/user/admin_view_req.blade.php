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
<br>

<div class="container">
  <h1 class="text-center">Special Order Details</h1>
</div>
<div class="container  " >
 
 <div class="row">
<div class="col-md-1"></div>
<div class="col-md-11 col-sm-11 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
<table class="table container"cellspacing="0" id="example">
  <thead>
    <tr>
    
      <th scope="col">User Name</th>
      <th scope="col">Product name</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Price</th>
      <th scope="col">Order</th>
      <th scope="col">Delivery</th>

      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   @foreach($datas as  $data)
<tr>
 
<td>{{ $data->users->name}}</td>
<td>{{ $data->name }}</td>
<td>{{ $data->quantity}}</td>

<td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
<td>{{ $data->users->address}}</td>
<td>{{ $data->users->phone_no}}</td>
<td>{{ $data->price}}</td>
<td>{{ $data->status}}</td>
<td>{{ $data->confirmation}}</td>

<td><a href="/user/{{ $data->id}}/edit" class="btn btn-default">Modify</a></td>
<td><form method="POST" action="/user/{{ $data->id }}" >


  @method('DELETE')
  @csrf
  <div>
    <button type="submit" class="btn btn-danger" w>Delete</button>
  
</div>
@include('errors')
</form></td>

</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div> 
</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-6"> 
    </div>
    <div class="col-md-2">
       <a href="/user/pdf" class="btn btn-outline-primary"><i class="far fa-file-pdf"></i>Print pdf</a>
      
    </div>
  </div>
</div>

<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection
