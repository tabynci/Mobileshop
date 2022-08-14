<?php 
include_once('../includes/config.php');
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
   
        <title>Navabr
        </title>
        <style>
            .container{
  height:42em;
}
.logo {
      width:240px;
      height:70px; 
}
.Container2{
  background-color:black;
  }
  .linkcolor{
    color:white;
    font-size:30px;
    font-weight:bold;
    

  }
  .nav-font{
    text-align:center;
    padding-left:200px;
  }
  .hovercolor :hover {
    color:yellow;
  }    
        </style>
   </head>
<div class="Container1">
<nav class="navbar navbar-expand-lg navbar-light  Container2">
  <a href="../welcome_message.php"><img src="../images/mobilelogo.jpg"  class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav-font" id="navbarNav">
    <ul class="navbar-nav linkcolor hover">
    <?php
      if(isset($_SESSION['login_user']) == 0)
      {?>
      <li class="nav-item active hovercolor">
        <a class="nav-link linkcolor" href="../welcome_message.php">Home <span class="sr-only"></span></a>
      </li>
      <?php } else { ?>
        <li class="nav-item hovercolor">
          <a class="nav-link  linkcolor" href="./home.php">Home</a>
        </li>     
        <?php } ?>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./About.php">About</a>
      </li>
      <?php
      if(isset($_SESSION['login_user']) == 0)
      {?>      
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./add.php">Register</a>
      </li>
        <li class="nav-item hovercolor">
          <a class="nav-link  linkcolor" href="./login.php">Login</a>
        </li>
      <?php } else { ?>   
      <li class="nav-item hovercolor">
        <a class="nav-link linkcolor"  href="./cart.php">Cart</a>
      </li>
      <?php
      if(isset($_SESSION['admin_user']) == 0)
      {?>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./profile.php">Dashboard</a>
      </li>
      <?php } else { ?> 
        <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="../admin/adminProfile.php">Dashboard</a>
      </li>
      <?php } ?>
      <li class="nav-item hovercolor">
          <a class="nav-link  linkcolor" href="./logout.php">Logout</a>
        </li>   
      <?php } ?>
    </ul>
  </div>
</nav>
</div>
</html>