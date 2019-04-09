
@extends('layout')
@section('links')
@endsection
@section('nav')
<h1 class=" text-secondary text-center mt-2" >Electronic Devices</h1>
 <div class="container" id="product">
  <div class=" row">
    <div class="col-md-12 card mt-2 bg-light">
      
       
         
            <form method="POST" action="/homepage" enctype="multipart/form-data" >
                 <div class="container ">
          <div class="row  mt-3 ">
             @csrf
             @foreach($devices as  $device)
          
              <div class="col-md-3">
              <div class=" card">
                  <img src="storage/image/{{$device->img}}" height="200" width="200"  class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$device->name }}</h5>
                        <p class="card-text">৳{{$device->price }}/=</p>
                        <p ><b>Availability:</b> @if($device->quantity > 0) In Stock @else Out Of stock @endif</p>
                         @if($device->quantity > 0)   
                          <a href="homepage/{{$device->id}}" class="btn btn-primary stretched-link mx-auto w-100">Add to cart</a>
                          @endif
                      </div>
                    </div>
                </div>
                @endforeach
  </div>
                </div>
                  </form>
                  <br>
        
</div>
</div>

 </div>


 @endsection  
@section('footer')
@endsection