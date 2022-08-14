<html>
    <head>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
        <title>Navabr
        </title>
        <style>
            .container{
  height:42em;
}
.img {
      width:240px;
      height:70px; 
}
.Container2{
  background-color:black;
  z-index: 4;
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
    color:red;
  }    
    </style>
   </head>
   <div>
<nav class="navbar navbar-expand-lg navbar-light  Container2">
  <img src="../images/mobilelogo.jpg"  class="img">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav-font" id="navbarNav">
    <ul class="navbar-nav linkcolor hover">
      <li class="nav-item active hovercolor">
        <a class="nav-link linkcolor" href="./welcome_message.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./About.php">About</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./logout.php">Logout</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link linkcolor"  href="./cart.php">Cart</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="./welcome.php">dashboard</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</html>