@extends('layout')
@section('links')
@endsection
@section('nav')
<br>

<div class="container">
  <h1 class="text-center">your Order</h1>
</div>
<div class="container" >
  <div class="row"  >
   <div class="col-md-1 "  >
   </div>
  <div class="col-md-10 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >


              


<table class="table container">
  <thead>
    <tr>
     
      
      
       
      
       <th scope="col">Product name</th>
       <th scope="col">Product Quantity</th>
      <th scope="col">Product image</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Price</th>
      <th scope="col">Confirmation status</th>
      <th scope="col">Date</th>
       <th scope="col">Time</th>
    </tr>
   @foreach($datas as  $data)
<tr>

<td>{{ $data->name }}</td>
<td>{{ $data->quantity}}</td>

<td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
<td>{{ $data->users->address}}</td>
<td>{{ $data->users->phone_no}}</td>
<td>{{ $data->price}}</td>
<td>{{ $data->confirmation}}</td>
<td>{{$data->created_at->format('d M Y ') }}</td>
<td>{{$data->created_at->format('H:i:s') }}</td>
@endforeach
</thead>
</table>
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
