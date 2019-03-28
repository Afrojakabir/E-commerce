<!DOCTYPE html>
<html lang="en">
<head>
<title>App</title>
<meta charset="UTF-8" />
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: blue;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
@yield('links')
</head>
<body>

<!--Header-part-->


<div class="sidenav">

    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fas fa-user-tie"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               </div>
 <br>
 <br>
  <a href="/admin" ><i class="fas fa-home " ></i> <span>Dashboard</span></a>
<a href="/userlist " ><i class="fas fa-users"></i><span>User list</span></a> 

  
  <button class="dropdown-btn"><i class="fas fa-plus"></i>Category
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
     <a href="/category"><i class="fas fa-plus"></i><span>view Category</span></a>
    <a href="/category/create"><i class="fas fa-plus"></i><span>Create Category</span></a>
    
  </div>
  <button class="dropdown-btn"><i class="fas fa-tshirt"></i>Product
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="/product"><i class="fas fa-plus"></i><span>view product</span></a>
    <a href="/product/create"><i class="fas fa-plus"></i><span>Create product</span></a>
  </div>
  <button class="dropdown-btn"><i class="fas fa-shopping-basket"></i>Order
   <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="{{route('user.admin_view_req')}}"><i class="fas fa-plus"></i><span>special Order
        </span></a>
     <a href="/order"><i class="fas fa-plus"></i><span>Order list</span></a>
   <a href="/order_product"><i class="fas fa-plus"></i><span>Order  product list</span></a>
  </div>
<button class="dropdown-btn"> <i class="far fa-images"></i>Image
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container">
     <a href="/image"><i class="fas fa-plus"></i><span>view Image</span></a>
    <a href="/image/create"><i class="fas fa-plus"></i><span>Create Image</span></a>
</div>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-2">
     
   
</div>
    </div>
  </div>
  @yield('nav')

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>





</body>
</html>
@yield('footer')