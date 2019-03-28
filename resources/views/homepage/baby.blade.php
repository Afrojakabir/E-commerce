@extends('layout')
@section('links')
@endsection
@section('nav')
<h1 class=" text-secondary text-center mt-2" >Babies & Toys</h1>

<div class="container" id="product">
  <div class=" row">
    
    <div class="col-md-12 card mt-2 bg-light">
      
       
         
            <form method="POST" action="/homepage" enctype="multipart/form-data" >
                 <div class="container ">
          <div class="row  mt-3 ">
             @csrf
             @foreach($babys as  $baby)
          
              <div class="col-md-3">
              <div class=" card">
                  <img src="storage/image/{{$baby->img}}" height="200" width="200"  class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$baby->name }}</h5>
                        <p class="card-text">৳{{$baby->price }}/=</p>   
                         
                           
                        
                        <a href="homepage/{{$baby->id}}" class="btn btn-primary stretched-link mx-auto w-100">Add to cart</a>
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