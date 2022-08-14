<?php 
include_once('../includes/config.php');
session_start();
if(isset($_SESSION['login_user']) && isset($_POST['addtocart'])) {
  $productId = $_POST['productId'];
  $productName = $_POST['productname'];
  $price = $_POST['price'];
  $user = $_SESSION['login_user'];

  $sql="INSERT INTO `cart`(`product_id`,`product_name`, `price`, `user`)
  VALUES ('$productId','$productName','$price','$user')";

  $result = $con->query($sql);
  
  if ($result == TRUE) {
    echo "<script>alert('$productName added to successfully');</script>";
  }else{
    echo "Error:". $sql . "<br>". $con->error;
  } 

}
 
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
  

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  
    <style {csp-style-nonce}>
        
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

.thumbnails {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 250px;
  height:200px;
}

.thumbnails:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
/* Conatiner styling */
.float-left{
  float:left;
  padding:10px;
}
       

</style>
</head>
<body>

<?php include('../includes/navbar.php');?> 
<?php include('../includes/brandnavbar.php');?>

<!-- Used for thumbnail -->
<div class="container">
<?php 
  $query=mysqli_query($con,"select * from products where Brand='Huawei'");
  while($result=mysqli_fetch_array($query))
  {?>
  <form method="post" action="">
    <div class="float-left"><img class="thumbnails" src="../images/<?php echo $result['Image'];?>.jpg" alt="image" />
        <p><?php echo $result['Product'];?></p>
        <input type="hidden" value="<?php echo $result['Product'];?>" name="productname"/>
        <p>Price:€<?php echo $result['Price'];?> &nbsp;
        <input type="hidden" value="<?php echo $result['Price'];?>" name="price"/>
        <input type="hidden" value="<?php echo $result['Id'];?>" name="productId"/>
        <button type="submit" class="btn btn-link" name="addtocart">Add to Cart</button>
    </div>
  </form>
  <?php } ?>
</div>

<?php include('../includes/footer.php');?>

</body>
</html>
