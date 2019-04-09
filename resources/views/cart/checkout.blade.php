@extends('layout')
@section('links')
@endsection
@section('nav')
<br>

<h1 class="text-center">Checkout Page</h1> 
<br>
<br>

<br>
@if(Session::has('cart'))
<div class="container">
<div class=" row" >
<div class="col-sm-7 col-md-7  card">
<table class="table container">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
    </tr>
      @foreach($datas as  $data)
    <tr>
      <td><img src="storage/image/{{$data ['item']['img']}}" height="60" width="60" /></td>
      <td>{{$data['item'] ['name']}}</td>
      <td>৳{{$data['item'] ['price']}}</td>
      <td>{{$data['qty']}}</td>
      <td>৳{{$data['price']}}</td>
      </tr>
      @endforeach
  </thead>
</table>
</div>

  <div class="col-sm-1 col-md-1">  
  </div>  


 <div class="col-md-4 col-sm-4">
              <div class=" card">
                    <div class="card-body">
                      <h5 class="card-header text-center">Order Summary</h5>
                      <br>
                      <h6 class="card-text">Shopping amount:৳{{$total}}</h6>
                      <h6 class="card-text">Delivery charge :৳ 75</h6>
                        <h6 class="card-text">Sub total:৳{{$total + 75}}</h6>
                      </div>
                    </div>
                </div>

</div>
</div>

@else
<div class="container">
<div class=" row">
<div class="col-sm-9 col-md-9 col-md-offset-3 col-sm-offset-3 card mt-2">
<h2 style="text-align:center;">No Items</h2>
 </div>
</div>
</div>

@endif 
<br>
<br>

 <div class="container  " >
  <div class="row">
    
 
  <div class="col-md-2 col-sm-2 "  >
</div>
  <div class="col-md-8 col-sm-8 panel panel-default" style=" margin-top: 30px;" >
  <div class ="div1 panel-body "  >

    <form method="POST" action="/postcheckout" enctype="multipart/form-data" >
       @csrf

       Address:
      <br>
     <input type="text" class="form-control" name="address" value = "{{$users->address}} "required><br>
      <br>
       Phone Number:
      <input type="text" class="form-control" name="phone_no" value = "{{$users->phone_no}}"  required><br>
    
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Cash" checked>
         <label class="form-check-label" for="exampleRadios1">
           Cash on delivery
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Bkash">
        <label class="form-check-label" for="exampleRadios2">
          Bkash
        </label>
      </div>

</div>
</div>
</div>
</div>
@include('errors')
    <div class="container  ">
        <div class="row">
           <div class="col-md-2 col-sm-2 "  >
</div>
        <div class="col-sm-8" ><input type="submit" class="btn btn-success w-100" value="Complete Order"><br>
        </div>
        
    </div>
    </div>

</form>

<br>
<br>
<br>
 @endsection  
@section('footer')
@endsection



