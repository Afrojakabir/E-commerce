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
  <h1 class="text-center">Order details</h1>
</div>
<div class="container  " >
<div class="row">
  <div class="col-md-2 ">
</div>
	<div class="col-md-10 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >

              

  <table class="table container"cellspacing="0" id="example">
</tbody>
  <thead>
    <tr>
     <th scope="col">Order ID</th>
     <th scope="col">User Name</th>
     <th scope="col">User Address</th>
     <th scope="col">User Mobile no.</th>
     <th scope="col">Payment Type</th>
     <th scope="col">Price</th>
     <th scope="col">Delivery Status</th>
     <th scope="col">Delivery Action</th>
     <th scope="col">Action</th>
     <th scope="col">View product</th>
    </tr>
     </thead>
      <tbody>
     @foreach($datas as  $data)

    <tr>
      <td>{{ $data->id }}</td>
      <td >{{ $data->users->name}}</td>
      <td>{{ $data->users->address}}</td>
      <td>{{ $data->users->phone_no}}</td>
      <td>{{ $data->payment}}</td>
      <td>{{ $data->total_price}}</td>
      <td>{{ $data->status}}</td>
      <td><form method="POST" action="/order/{{ $data->id }}" >
        @csrf
       @method('PATCH')
        <div>
          <button type="submit" class="btn btn-success" value="Delivered" name="status">Done</button>
        </div>
         
        </form></td>
      
      <td>
        <form method="POST" action="/order/{{ $data->id }}" >
        @method('DELETE')
        @csrf
        <div>
          <button type="submit" class="btn btn-danger" >Delete</button>
        </div>
         
        </form>
      </td>
        <td>
          <a href="/order/{{$data->id}}/vieworder" class="btn btn-default">view</a>
        </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>

<br>
<div class="container">
  <div class="row">
    <div class="col-md-5"> 
    </div>
    <div class="col-md-2">
       <a href="/order_pdf/pdf1" class="btn btn-outline-primary"><i class="far fa-file-pdf"></i>Print pdf</a>
      
    </div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection


