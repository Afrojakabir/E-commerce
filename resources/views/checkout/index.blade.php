<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="pos-f-t">
  
  <nav class="navbar navbar-expand-md  navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 " >
          <li class="nav-item ">
            <a class="nav-link " href="/homepage">Home</a>
          </li>
      </ul>
      <ul class="navbar-nav mr-0">
        <li class="nav-item ">
          <a class="nav-link " href="/login">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<h1 class="text-center">Your cart</h1>
@if(Session::has('cart'))
<div class="container">
<div class=" row" >

 <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 card mt-2">
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
<td><img src="storage/image/{{$data ['item']['img']}}" height="40" width="40" /></td>
      
      <td>{{$data['item'] ['name']}}</td>
      <td>{{$data['item'] ['price']}}</td>
      <td><div class="cart-quantity">
       
        <div class="text-center">{{$data['qty']}}</div>

       
    </div>
</td>
 <td>{{$data['price']}}</td>
  @endforeach


    </thead>
 </table>
      

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
<h1 class="text-center">Checkout</h1>
<h2 class="text-center">Your shopping amount:${{$total}}</h2>
<br>
<br>
 <div class="container  " >
  <div class="col-md-2 "  >
</div>
  <div class="col-md-8 panel panel-default" style=" margin-top: 30px;" >
  <div class ="div1 panel-body "  >

    <form method="POST"  enctype="multipart/form-data" >
       @csrf

     <table class="table container">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">add</th>
      <th scope="col">phn</th>
      <th scope="col"></th>
      
    </tr>
<tr>

   <td>{{$total}}</td>
</tr>
</thead>
</table>
      
      
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Cash" checked>
         <label class="form-check-label" for="exampleRadios1">
           Cash on delivery
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Bkash">
        <label class="form-check-label" for="exampleRadios2">
          Bkash
        </label>
      </div>

      <div class="row">
        <div class="col-sm-8" ><input type="submit" class="btn btn-info" value="Save"><br></div>
        
    </div>


</form>







</body>
</html>



