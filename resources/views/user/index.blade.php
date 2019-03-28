@extends('layout')
@section('links')
@endsection
@section('nav')

<nav class="navbar navbar-expand-md  navbar-dark bg-dark ">

    <form class="form-inline mx-auto  " >

             <button       <i class="material-icons btn btn-outline-success my-1 my-sm-0" style="font-size:26px" type="submit">search</i>
             </button>
        <input class="form-control mx-auto  " style="width: 350px" type="search" placeholder="Search product" aria-label="Search" required>
     
      <div class="dropdown show">
  <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    All
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Girl's products</a>
    <a class="dropdown-item" href="#">men's products</a>
    <a class="dropdown-item" href="#">kids products</a>
  </div>
</div>
</form>

  </nav>
</div>
<div class="container" id="slider">
<div class=" row " >
    <div class="col-md-3  mt-2">
 
<div class=" panel panel-default sidebar-menu card">
    <div class="panel-heading ">
        <h5 class="panel-title card-header text-center" >Category</h5>
    </div>
    <div class="panel-body card-body">
      <ul class="category-menu" style="list-style-type:none";>

        <li><a href="#">Men products </a></li>
        <li><a href="#">Women products</a></li>
        <li><a href="#">Kids products</a></li>
        <li><a href="#">Others</a></li>
</ul>
    </div>
    
</div>

  </div>

  <div class="col-md-9 card mt-2">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active text-center ">
      <img class="img-fluid d-block  card-img "  src="shop1.jpg" style="height:400px; " alt="Responsive image">
    </div>
    <div class="carousel-item ">
      <img class="img-responsive d-block  card-img" src="shopping3.jpg" width="350" height="400" alt="Second slide">
    </div>
    <div class="carousel-item ">
      <img class="img-responsive d-block w-100 card-img" src="shopping2.jpg" width="350" height="400" alt="Third slide">
    </div>
  </div>
  <div>
  <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next " href="#" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
 
</div>

</div>
</div>


<div class="container" id="product">
<div class=" row">
  <div class="col-md-12 card mt-2">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner ">
<h6 class=" text-center">Women fashion</h6>
 <div class="container ">
   <div class="row  mt-3 ">
      @foreach($datas as  $data)

 <div class="col-md-3 card">
<div>
   <div class="card" style="width: ;">
  <img src="{{'/storage/image/'.$data->img}}" height="200" width="200"  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" >{{ $data->name }}</h5>
    <p class="card-text">৳{{ $data->price }}/=</p>   
     
   <a href="homepage/{{ $data->id}}" class="btn btn-primary stretched-link mx-auto">cart</a>
 
  </div>
</div>
</div>
</div>
@endforeach
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