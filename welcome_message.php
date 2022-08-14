
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOBILE SHOPE</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
    
    <!-- STYLES -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    <style {csp-style-nonce}>
        
  /* Navbar Styling */
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
/* carousel */
  .carousel-inner > div {
     text-align: center;
  }
ul{
  list-style-type:none ;
  padding-inline-start: 2px;
}

.container{
  height:877px;
}
.img {
      width:240px;
      height:70px; 
}
.carousel-caption-down{
  position: relative !important;
  left: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
}
/* Footer css */
.footer {
  width: 100%;
  height: auto;
  background-color: #070617;
}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 0px 20px 20px 20px;
}
.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: rgba(255,255,255,0.2);
  font-weight: normal;
  text-transform: uppercase;
  letter-spacing: 0.250em;
}
.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.footer .col ul li {
  color: #999999;
  font-size: 20px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}
.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: #ffffff;
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}
.clearfix {
  clear: both;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}
.nci{
  color:white
}
</style>
</head>
<body style="height:100%">
  <!-- logo created from here https://freelogocreator.com/logo-gallery -->
    <div class="Container1">
  <nav class="navbar navbar-expand-lg navbar-light  Container2">
    <a href="welcome_message.php"><img src="./images/mobilelogo.jpg"  class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-font" id="navbarNav">
      <ul class="navbar-nav linkcolor hover">
     
        <li class="nav-item hovercolor">
            <a class="nav-link  linkcolor" href="welcome_message.php">Home</a>
          </li>     
        <li class="nav-item hovercolor">
          <a class="nav-link  linkcolor" href="./user/About.php">About</a>
        </li>
            <li class="nav-item hovercolor">
          <a class="nav-link  linkcolor" href="./user/add.php">Register</a>
        </li>
          <li class="nav-item hovercolor">
            <a class="nav-link  linkcolor" href="./user/login.php">Login</a>
          </li>
      </ul>
    </div>
  </nav>
  </div>

<div class="text">
    <h1>Welcome to Mobile Shop </h1>
</div> 
<div class="container">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <div>
      <img src="./images/samsung-galaxy-s10.jpg" alt="samsung"height="450px">
      <div class="carousel-caption d-none d-md-block carousel-caption-down">
        <h5 class="color-phone">Samsung Galaxy s10</h5>
      </div>
     </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./images/iphone11.jpg" alt="iphone" height="450px">
      <div class="carousel-caption d-none d-md-block carousel-caption-down">
        <h5 class="color-phone">iphone 13 Pro Max</h5>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="./images/iphonex.jpg" alt="iphone" height="450px">
      <div class="carousel-caption d-none d-md-block carousel-caption-down">
        <h5 class="color-phone">iphonex</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- FOOTER START -->

<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>About US</h1>
    <ul>
    <a href="../user/About.php"><li>About the company</li></a>
    </ul>
  </div>
  <div class="col">
    <h1>Our Policies</h1>
    <ul>
      <li>Terms and conditions</li>
    </ul>
  </div>
  <div class="col">
    <h1>CONTACT</h1>
    <ul>
      <li>Email</li>
      <li>mobile@mobilie.com</li>
    </ul>
  </div>
  
    <div class="col">
      <h1>Support</h1>
      <ul>
        <li>Contact us</li>
      </ul>
    </div>
    <div class="col social">
      <h1>Social</h1>
      <ul>
        <li><a href="https://www.instagram.com/"><img src="./images/instagram.jpeg" width="32" style="width: 32px;"></a></li>
        <li><a href="https://twitter.com/"><img src="./images/twitter.jpeg" width="32" style="width: 32px;"></a></li>
        <li><a href="https://www.facebook.com/"><img src="./images/facebook.jpeg" width="32" style="width: 32px;"></a></li>
      </ul>
    </div>
  
<div class="clearfix"></div>
</div>
</div>

<footer class="container-fluid text-center">
<p className="col-sm">
            &copy;@ NCI | All rights reserved |
            Terms Of Service | Privacy
          </p>
</footer>
</body>
</html>