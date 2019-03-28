@extends('layout')
@section('links')
@endsection
@section('nav')
<br>


 <h1 class="text-center">Shopping Cart</h1>
 <br>
 <br>
@if(Session::has('cart'))
<div class="container">
<div class=" row" >
 <div class="col-sm-1 col-md-1">  
  </div>  
 <div class="col-sm-10 col-md-10 card mt-2">
<table class="table container">
  <thead>
  <tr>
    <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      
      <th scope="col">Quantity</th>
       <th scope="col">Total Price</th>
     <th scope="col"></th>
      
  </tr>
    @foreach($datas as  $data)
  <tr>
<td><img src="storage/image/{{$data ['item']['img']}}" height="60" width="60" /></td>
      
      <td>{{$data['item'] ['name']}}</td>
      <td>৳{{$data['item'] ['price']}}</td>
      <td><div class="cart-quantity">
        <form action="homepage/{{$data['id'].'_a'}}" method="POST">
          @csrf
          <input type="hidden"  name="_method" value="PATCH">
          <button type="submit" class="btn btn-outline-secondary" style="width:30px; height:30px;"><strong>+</strong></button>
        </form>
        <div class="mx-2"> {{$data['qty']}}</div>

        <form action="homepage/{{$data['id'].'_d'}}" method="POST">
          @csrf
          <input type="hidden"  name="_method" value="PATCH">
          <button type="submit" class="btn btn-outline-secondary" style="width:30px; height:30px;"><strong>-</strong></button>
        </form>

        <!-- <input type='button' value='-' class='qtyminus'  />
        <input type="number" name="updates[]"  class="quantity"  />
        <input type='button' value='+' class='qtyplus'  /> -->
    </div>
</td>

      
       <td>৳{{$data['price']}}</td>
       
      <td><form method="POST" action="homepage/{{$data['id']}}" >
  @method('DELETE')
  @csrf
  <div>
    <button type="submit" class="btn btn-danger " >Delete</button>
  
</div>
@include('errors')
</form></td>


    
  @endforeach


    </thead>
 </table>
      

</div>
</div>
</div>
<div class="container">
<div class=" row">
  <div class="col-sm-1 col-md-1">  
  </div>  
 <div class="col-sm-10 col-md-10 card mt-2">
  <strong style="text-align:center;">Total: {{ $totalPrice }}</strong>
 </div>
</div>
</div>

<div class="container">
<div class=" row"> 
   <div class="col-sm-1 col-md-1">  
  </div>  
 <div class="col-sm-10 col-md-10  mt-2">


 <a href="{{route('homepage.checkout')}}" class="btn btn-success w-100">Proceed to Checkout</a>
 </div>
</div>
</div>

@else
<div class="container">
<div class=" row">
 <div class="col-sm-1 col-md-1">  
  </div>  
 <div class="col-sm-10 col-md-10 card mt-2">
<h2 style="text-align:center;">No Items</h2>
 </div>
</div>
</div>

@endif

<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection


