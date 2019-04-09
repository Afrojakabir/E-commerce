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
     <th scope="col">Category</th>
     <th scope="col">Admin Name</th>
     <th scope="col">Name</th>
     <th scope="col">Code</th>
     <th scope="col">Price</th>
     <th scope="col">Quantity</th>
     <th scope="col">Image</th>
     <th scope="col">Action</th>
     <th scope="col">Action</th>
    
    </tr>
     </thead>
      <tbody>
     @foreach($datas as  $data)

    <tr>
      <td>{{ $data->categorys->name}}</td>
      <td >{{ $data->users->name}}</td>
      <td>{{ $data->name}}</td>
      <td>{{ $data->code}}</td>
      <td>{{ $data->price}}</td>
      <td>{{ $data->quantity}}</td>
      <td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
      <td><a href="/product/{{ $data->id}}/edit" class="btn btn-default">Update</a></td>
      
      <td>
        <form method="POST" action="/product/{{ $data->id }}">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger ">Delete</button>
                @include('errors')
              </form>
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


