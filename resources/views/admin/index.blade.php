@extends('adminlayout')
@section('links')
@endsection
@section('nav')


<h2 class="text-center ">Dash Board</h2>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-md-2"></div>
      <div class="col-md-10  bg-light">
      	<div class="container">
	<div class="row">

	 <div class="border border-primary card col-md-3 mt-2 mb-2 ">
  <div class="card-body ">
    <h6 class="card-title  text-secondary text-center">Total Product items</h6>
    <h1 class="card-text text-center">{{$items}}</h1>
    
  </div>
</div>
	
		 <div class="border border-primary card col-md-3 mt-2 mb-2 ml-4">
  <div class="card-body ">
  	
    <h6  class="card-title text-center text-secondary">Total Order</h6>
 

    <h1 class="card-text text-center">{{$totals}}</h1>
 
  </div>
</div>

	 <div class="border border-primary card col-md-3 mt-2 mb-2 ml-4">
  <div class="card-body ">
    <h6 class="card-title text-secondary text-center">Total  Product Sold</h6>
    <h1 class="card-text text-center">{{$product}}</h1>
    
  </div>
</div>

<div class="col-md-1"></div>
	 <div class="border border-primary card col-md-3 mt-2 mb-2  ">
  <div class="card-body ">
    <h6 class="card-title text-secondary text-center">Total  Special 0rder</h6>
    <h1 class="card-text text-center">{{$sp}}</h1>
    
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