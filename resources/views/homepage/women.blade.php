@extends('layout')
@section('links')
@endsection
@section('nav')
<h1 class=" text-secondary text-center mt-2" >Women fashion</h1>

<div class="container" id="product">
  <div class=" row">
    
    <div class="col-md-12 card mt-3">
      
       
         
            <form method="POST" action="/homepage" enctype="multipart/form-data" >
                 <div class="container ">
          <div class="row  mt-3 ">
             @csrf
             @foreach($datas as  $data)
          
              <div class="col-md-3">
              <div class=" card">
                  <img src="storage/image/{{$data->img}}" height="200" width="200"  class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data->name }}</h5>
                        <p class="card-text">৳{{ $data->price }}/=</p>   
                         
                           
                        
                        <a href="homepage/{{ $data->id}}" class="btn btn-primary stretched-link mx-auto w-100">Add to cart</a>
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