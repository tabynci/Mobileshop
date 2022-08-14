<?php if(isset($_POST['submit']))
{
    //Define $username and $Password
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $password;
    //esatblish  connection with server with servername , usernameid and password as parameter
    $connection = mysqli_connect("localhost","root","qwerty");
    $db =mysqli_select_db($connection,"testing");
    $query=mysqli_query($connection,"select * from admin where password='$password' AND email='$email'");
    $rows=mysqli_num_rows($query);
    if($rows == 1)
    {
        $_SESSION['login_user']=$email;
        header("location:Admindashboard.php");
    }
    mysqli_close($connection);
}
    // 
//     $ret=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' and password='$password'");
// $num=mysqli_fetch_array($ret);
//     if($num>0)
// {
// $extra="Admindashboard.php";
// $_SESSION['login']=$_POST['email'];
// $_SESSION['adminid']=$num['id'];
// echo "<script>window.location.href='".$extra."'</script>";
// exit();
// }
// else
// {
// echo "<script>alert('Invalid email or password');</script>";
// $extra="admin.php";
// echo "<script>window.location.href='".$extra."'</script>";
// exit();
// }

?>
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOBILE SHOPE</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
    
    <!-- STYLES -->
    <!-- I used bootstrap from link here https://getbootstrap.com/docs/4.0/getting-started/download/ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style {csp-style-nonce}>
           /* Navbar Styling */
 /* Navbar Styling */
 .carousel-inner > div {
  text-align: center;
}
ul{
  list-style-type:none ;
  padding-inline-start: 2px;
}


.container{
  height:42em;
}
.img {
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
    color:red;
  }    
    /* Footer style    link refered here https://codepen.io/jakeduncan/pen/rJZJMM */
     .footer {
  width: 100%;
  position: relative;
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

form{
    text-align:center;
    padding:25px;
}

.main{
    width: 600px;
    height: 600px;
    padding: 20px;
    border: 5px solid yellowgreen;
    background-color: white;
    border-radius:20px;
    font-weight:bold;
  }
  /* Register main div */
.main1{
  height:45em;
   background-color:rgb(40 185 204 / 60%);
  padding:50px 70px 0px 580px;
}

/* carousel */
/* login styying to navigate */

</style>
</head>
<body>


<div class="Container1">
<nav class="navbar navbar-expand-lg navbar-light  Container2">
  <img src="images/mobilelogo.jpg"  class="img">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav-font" id="navbarNav">
    <ul class="navbar-nav linkcolor hover">
      <li class="nav-item active hovercolor">
        <a class="nav-link linkcolor" href="http://localhost:8080/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="http://localhost:8080/About">About</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="#">Register</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link  linkcolor" href="http://localhost:8080/login">Login</a>
      </li>
      <li class="nav-item hovercolor">
        <a class="nav-link linkcolor"  href="#">Cart</a>
      </li>
    </ul>
  </div>
</nav>
</div>
    <div class="main1"> 
    <div class="main"> 
     <form method="post" action="" onsubmit="return checkpass();">
      <h1>Admin Registration Form</h1>
        <label>email:</label><br>
        <input type="text" name="email" placeholder="Enter your  email" required><br/>
        
        <label>Password:<br></label><br>
        <input type="password" name="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required><br/>
        
        <br/>
        <tr><td><input type="submit" name="submit"></td></tr><br>
        </form>
        <div class="login">
     <div class="small"><a href="./login">Have an account? Go to login</a></div>
    <div class="small"><a href="./admindashboard/">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
  </div>
  </div>



                        
                   
                
            
    

<!-- FOOTER START -->

<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>About US</h1>
    <ul>
      <li>About the company</li>
      <li>contact</li>
      <li>Terms and conditions</li>
      </ul>
  </div>
  <div class="col">
    <h1>CONTACT</h1>
    <ul>
      <li>Call Canter</li>
      <li>+353 89030233</li>
      <li>Email</li>
      <li>info@mobilie.com</li>
    </ul>
  </div>
  
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><a href="https://www.instagram.com/"><img src="images/instagram.jpeg" width="32" style="width: 32px;"></a></li>
      <li><a href="https://twitter.com/"><img src="images/twitter.jpeg" width="32" style="width: 32px;"></a></li>
      <li><a href="https://www.facebook.com/"><img src="images/facebook.jpeg" width="32" style="width: 32px;"></a></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

