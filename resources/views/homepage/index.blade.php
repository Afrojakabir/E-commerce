@extends('layout')
@section('links')
@endsection
@section('nav')
  
         <nav class="navbar navbar-expand-md  navbar-dark bg-dark ">

    <form class="form-inline mx-auto  " >

             <button       <i class="material-icons btn btn-outline-success my-1 my-sm-0" style="font-size:26px" type="submit">search</i>
             </button>
        <input class="form-control mx-auto" style="width: 350px" type="search" placeholder="Search product" aria-label="Search" required>
     
      <div class="dropdown show">
  <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/women">Girl's products</a>
    <a class="dropdown-item" href="/men">Men's products</a>
    <a class="dropdown-item" href="/baby">Babies & Toys</a>
    <a class="dropdown-item" <a   href="/electronic">Electronic Devices</a>
  </div>
</div>
</form>

  </nav>
</div>


<div class="container" id="slider">
<div class=" row " >
    <div class="col-md-2 col-sm-2 mt-2 ">

     
  <a class="btn btn-outline-info card card-head" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Categories
  </a>
 
</p>
<div class="collapse" id="collapseExample">
  <div class=" card card-body">
  <a class=" text-secondary" href="/women">Girl's products</a>
  <a class=" text-secondary" href="/men">Men's products</a>
  <a class=" text-secondary" href="/baby">Babies & Toys</a>
  <a class=" text-secondary" href="/electronic">Electronic devices</a>
</div>
  </div>
</div>
      


  <div class="col-md-10 col-sm-10 card mt-2">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner ">

    <div class="carousel-item active text-center ">

      <img class="img-fluid d-block  card-img mb-3 mt-3"  src="new1.jpg" style="height:400px; " alt="Responsive image">
       <div class="carousel-caption d-none d-md-block">
          
          <h1 class="text-center text-light" >Girl's fashion</h1>
          <p class="text-center text-light">Fashion as unique as you are</p>
        </div>
    </div>
    <div class="carousel-item ">
      <img class="img-responsive d-block  card-img mb-3 mt-3 " src="new11.jpg" width="350" height="400" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          
          <h1 class="text-center text-light" >Shop your favorite brands</h1>
          <p class="text-center text-light">Dress like a  Boss</p>
        </div>
    </div>
  
    <div class="carousel-item ">
      <img class="img-responsive d-block  card-img mb-3 mt-3 " src="new7.jpg" width="350" height="400" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          
          <h1 class="text-center text-light" >Formal Dress </h1>
          <p class="text-center text-light">The ultimate formal style guide for men</p>
        </div>
    </div>

    
             @foreach($image as  $imgs)
           <div class="carousel-item ">

                  <img class="img-responsive d-block  card-img mb-3 mt-3 "src="storage/image/{{$imgs->img}}" height="400" width="350"> 

              
               </div>
                @endforeach
 


    </div>
   </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
 


<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="alert alert-light" role="alert">
  <h4 class="alert-heading text-center">OUR TRADE SERVICES ARE HERE FOR YOU</h4>
  <p>Akaba.com  the best online shop in bd offers payment on delivery for branded products is an online shop,here you will find latest trends in fashion according to seasons and occasions.</p>
  <hr>
  <p class="mb-0">We believe in giving the best to our coustomers.</p>
</div>
      
    </div>
  </div>
</div>

<div class="container" id="product">
  <div class=" row">
    <h1 class=" text-secondary  ">Women's Fashion</h1>
    <div class="col-md-12 card mt-2 bg-light" >
      
       
         
            <form method="POST" action="/homepage" enctype="multipart/form-data" >
                 <div class="container ">
          <div class="row  mt-3 ">
             @csrf
             @foreach($datas as  $data)
          
              <div class="col-md-3">
              <div class=" card">
                  <img src="storage/image/{{$data->img}}" height="200" width="200"  class="card-img-top">
                    <div class="card-body">
                      <h6 class="card-title">{{ $data->name }}</h6>
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
<br>
 <div class="container" id="product">
  <div class=" row">
    <h1 class=" text-secondary">Men's Fashion</h1>
    <div class="col-md-12 card mt-2 bg-light">
      
       
         
            <form method="POST" action="/homepage" enctype="multipart/form-data" >
                 <div class="container ">
          <div class="row  mt-3 ">
             @csrf
             @foreach($mens as  $men)
          
              <div class="col-md-3">
              <div class=" card">
                  <img src="storage/image/{{$men->img}}" height="200" width="200"  class="card-img-top">
                    <div class="card-body">
                      <h6 class="card-title">{{ $men->name }}</h6>
                        <p class="card-text">৳{{ $men->price }}/=</p>   
                         
                           
                        
                        <a href="homepage/{{ $men->id}}" class="btn btn-primary stretched-link mx-auto w-100">Add to cart</a>
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

<br>
<div class="container" id="product">
  <div class=" row">
    <h1 class=" text-secondary">Babies & Toys</h1>
    <div class="col-md-12 card mt-2 bg-light">
      
       
         
            <form method="POST" action="/homepage/baby" enctype="multipart/form-data" >
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
<br>

 <div class="container" id="product">
  <div class=" row">
    <h1 class=" text-secondary">Electronic Devices</h1>
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
                         
                           
                        
                        <a href="homepage/{{$device->id}}" class="btn btn-primary stretched-link mx-auto w-100">Add to cart</a>
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
</div>
</div>
</div>
</div>
 @endsection  
@section('footer')
@endsection