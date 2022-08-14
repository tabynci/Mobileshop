<?php 
// session_start();
include_once('../includes/config.php');
// if (isset($_SESSION['login_user'])==0) {
//   header('location:logout.php');
// }
$error='';
 if (isset($_POST['submit'])) {
 $first_name=$_POST['firstname'];
 $last_name=$_POST['lastname'];
 $subject=$_POST['subject'];
 
 $sql="INSERT INTO `contact`(`firstname`,`lastname`, `subject`)
  VALUES ('$first_name','$last_name','$subject')";
    //echo $sql;
  $result = $con->query($sql);
  
  if ($result == TRUE) {
    echo "<script>alert('Thanks for your message, we will contact you soon');</script>";
    echo "<script type='text/javascript'>document.location = 'welcome_message.php'; </script>";
 }else{
    echo "Error:". $sql . "<br>". $con->error;
 } 
 $con->close(); 
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOBILE SHOP</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
    
    <!-- STYLES -->
    <!-- I used bootstrap from link here https://getbootstrap.com/docs/4.0/getting-started/download/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

    <style {csp-style-nonce}>
    
    /* Footer style    link refered here https://codepen.io/jakeduncan/pen/rJZJMM */
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
     


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  /* background-color: #04AA6D; */
  /* color: white; */
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  /* background-color: #45a049; */
}
/* contanct form */
.contactpage {
  border-radius: 5px;
  padding:80px;
  margin:1em;
  background-color:pink;
  /* background-image:url(../images/contact.jpg) */
  /* image https://www.pexels.com/photo/silver-iphone-x-beside-succulent-plant-1069798/ */
 }
.center{
  text-align:center;
}
.Aboutmobileshop{
  position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
  height:900px;
}
.about-container{
   display: inline-block;
   position: relative;
   text-align: center;
   color: rgb(255, 255, 255);
   background-image: url("../images/aboutusback.jpg")
}
</style>
</head>
<body>
<?php include('../includes/navbar.php');?>
    <div class="about-container">
    <!-- <img src="../images/q.jpg" alt="iphone" height="550px" width="100%"> -->
      <h1>About Us</h1>
  
    <h4>What we do?</h4>
      <p>MobileShop allows you the opportunity to quickly and easily select the gadget you want and have it delivered to your home in no time, wherever you are as long as it is in one of the EU nations.</p>  
      <h3>Why do customer love our Product?</h3>
      <p>We have been in the company for a while, and during that time we have not only developed strong bonds with many partners but also developed an understanding of what customers want. MobileShop offers premium goods from well-known brands at consistently at low costs. A large selection of smartphones, tablets, laptops, computer hardware, smartwatches, headsets, and other electronics are available from us. Customers may find precisely the products that fit them thanks to intelligent filtering options and comprehensive product information.</p>
      <h4>Our Story</h4>
      <p>
      Although the MobileShop website was first published in 2011, the company's history actually dates back about eight years to when a group of college mates decided to start a business together. We initially sold phones in stores, but both by opening an internet store, which also gave us a solid worldwide presence in several EU nations.
        <p>


<h4>TODAY</h4>


<p>
Today's e-commerce platform, Mobileshop.eu, allows independent vendors to offer their goods to platform users. Our team's combined expertise and the time we have spent in the industry have enabled us to build a broad network of partners, assuring that our customers will always receive the highest quality products and services.
    <p>
     </div>
     </div>
     <div class="contactpage">
      <h3 class="center">Contact Us</h3>
    <form method="post" action="">
      
    <label for="fname">First Name<br></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" name="submit" value="submit">
  
  </form>
</div>
<!-- FOOTER START -->
<?php include('../includes/footer.php');?>

</body>
</html>




