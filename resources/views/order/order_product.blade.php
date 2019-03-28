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
  <h1 class="text-center">Ordered Product Details</h1>
</div>
<div class="container  " >
<div class="row">
  <div class="col-md-1">
  </div>

	<div class="col-md-10 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >

              


<table class="table container"cellspacing="0" id="example">
  <thead>
    <tr>
    
     <th scope="col">Order Id</th>
     <th scope="col">Product Name</th>
     <th scope="col">Product image</th>
     <th scope="col">Product Quantity</th>
     <th scope="col">Product price</th>
     <th scope="col">Order date</th>
    
    </tr>
  </thead>
  <tbody>
     @foreach($datas as  $data)
    <tr>
     
      <td>{{ $data->order_id}}</td>
      <td>{{ $data->name}}</td>
      <td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
      
      <td>{{ $data->quantity}}</td>
      <td>{{ $data->price}}</td>
      <td>{{$data->created_at->format('d M Y ') }}</td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-5"> 
    </div>
    <div class="col-md-2">
       <a href="/order_pro/pdf"" class="btn btn-outline-primary"><i class="far fa-file-pdf"></i>Print pdf</a>
      
    </div>
  </div>
</div>
<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection
