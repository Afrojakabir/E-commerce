@extends('adminlayout')
@section('links')
@endsection
@section('nav')



<div class="container">
  <h1 class="text-center">Ordered Product Details</h1>
</div>
<div class="container  " >
<div class="row">
  <div class="col-md-2">
  </div>

  <div class="col-md-8 card" style=" margin-top: 30px;" >
<div class ="div1 card-body "  >
<form  action="/order/{{ $datas}}"  >
              


<table class="table container">
  <thead>
    <tr>
    
    
     <th scope="col">Product Name</th>
     <th scope="col">Product image</th>
     <th scope="col">Product Quantity</th>
     <th scope="col">Product price</th>
     <th scope="col">Order date</th>
    
    </tr>
     @foreach($datas as  $data)
    <tr>
     
     
      <td>{{ $data->name}}</td>
      <td><img src="{{'/storage/image/'.$data->img}}" height="40" width="40" /></td>
      
      <td>{{ $data->quantity}}</td>
      <td>{{ $data->price}}</td>
      <td>{{$data->created_at->format('d M Y ') }}</td>
    </tr>
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
<br>
<br>
 @endsection  
@section('footer')
@endsection
