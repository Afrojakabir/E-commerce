<!DOCTYPE html>
<html>
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>


@yield('links')

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
       @guest
      <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                            </li>
                             @endguest
     
     
    </ul>
  </div>


  </nav>

</div>


@yield('nav')
</body>
@yield('footer')
<div class="card mt-3">
  <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 text-light bg-dark  ">

    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Akaba App</h6>
          <a href="login.php">About us</a><br>
           <a href="login.php">Terms & Conditions</a>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
      
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Let Us Help You</h6>
          <p>
            <a href="login.php">Your Account</a>
          </p>
          <p>
            <a href="reg.php">Become an User</a>
          </p>
         
          <p>
            <a href="#!">Help</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p> <i class="material-icons"style="font-size:15px">&#xe56a;</i> Mohakhali DOHS, Dhaka,Bangladesh</p>
          <p> <i class="material-icons"  style="font-size:15px">&#xe0be;</i> contact@proinfosysbd.com</p>
          <p><i class="material-icons" style="font-size:15px">&#xe0b0;</i> 01626095111</p>
      
            
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
 
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->
  
</div>

</html>