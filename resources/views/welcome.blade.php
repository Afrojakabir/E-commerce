<!DOCTYPE html>

<head>
  <title>E-commerce</title>
  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  </head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <button class="navbar-toggler navbar-toggler-right navbar-expand-sm" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0 " >
      <li class="nav-item ">
        <a class="nav-link " href="home.php">Home</a>
          </li>
   <li class="nav-item">
    <a class="nav-link active" href="adindex.php">Admin<span class="sr-only">(current)</span></a>
  </li>
   <li class="nav-item ">
        <a class="nav-link " href="#">Dash board</a>
          </li>
            <li class="nav-item ">
        <a class="nav-link " href="product-insert.php">Create Product</a>
          </li>
  <li class="nav-item ">
        <a class="nav-link " href="adreg.php">Add account</a>
          </li>
             <li class="nav-item ">
        <a class="nav-link " href="pro-det.php">Product details</a>
          </li>
           <li class="nav-item ">
        <a class="nav-link " href="order.php">Order details</a>
          </li>
  
    
       </ul>
          

   
    <ul class="navbar-nav mr-0">
 <li class="nav-item">
      <li class="nav-item ">
        <a class="nav-link " href="/login">Login</a>
      </li>
    </ul>
    
  </div> 
  </nav>
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

<div class=" row container" id="slider">
    <div class="col-lg-3  mt-2">
 
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
  <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next " href="#" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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








</body>

</html>