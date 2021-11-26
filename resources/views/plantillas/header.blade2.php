<?php
if(!isset($_SESSION)) {
    session_start();
}

use Illuminate\Support\Facades\Auth;


/*******************************************************************************************************************/
/*******************************************************************************************************************/
 ?>

 <!DOCTYPE html>                    
 <html lang="es">                    
     <head>
         <meta charset="utf-8">  
         <meta name="author"      content="Carlos Segué">
         <meta name="Descripción" content="Comienzo curso ITAcademy">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,  maximum-scale=1.0, minimum-scale=1.0">
         <meta http-equiv="x-ua-compatible" content="ie-edge">
         <link rel="stylesheet" href="fonts/css/fontello.css">  <!-- iconos -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> <!-- Fuente: Roboto Regular 400 -->
         <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
         
         <!-- Staatliches -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

         <!-- EB Garamond -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Staatliches&display=swap" rel="stylesheet">

         <!-- Pragati Narrow -->   
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Pragati+Narrow&family=Staatliches&display=swap" rel="stylesheet">
         
         
         <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">


         <title>@yield('title')</title>

     </head>
 <header>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>





<!-- ********************************************************************************************************************* -->
<!-- MENU-2  DEBAJO NAVBAR
**************************************************************************************************************************  -->
<div class="container-fluid" style="width:auto">
        <div class="Mod modtasca">
        <div class="row rowtasca">
<!--............................................................................................................... -->            
            <div class="col-12">
                <h5 class="centrar"> 
                    codYbar 
                    <div class="float-right" >Bienvenid@ : <?php echo $_SESSION['loguin']['u_nom'];?></div>
                </h5>
            </div>
<!--............................................................................................................... -->            
        </div>
        </div>
       
    </div> <!-- container -->
<!-- ********************************************************************************************************************* -->
 </header>


     <script src="js/jquery-3.5.1.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

 <body>    
 </body>
 </html>

