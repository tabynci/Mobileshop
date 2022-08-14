<?php 
include_once('../includes/config.php');
session_start();
if(isset($_SESSION['login_user']) && isset($_POST['removefromcart'])) {
  $cartid = $_POST['cartid'];
  $user = $_SESSION['login_user'];

  $sql="DELETE FROM cart where id = '$cartid'";
  $result = $con->query($sql);
  
  if ($result == TRUE) {
    echo "<script>alert('Item removed from your cart');</script>";
    header("location:cart.php");
  }else{
    echo "Error:". $sql . "<br>". $con->error;
  } 

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

.float-left{
  float:left;
  padding:10px;
}    

form{
  text-align:center;
}


</style>
</head>
<body>

<?php include('../includes/navbar.php');?>
<h4>Items in your cart</h4>
  <div class="container">
    <?php 
    $user = $_SESSION['login_user'];
    $query=mysqli_query($con,"SELECT c.id, p.image, c.product_name, c.price, c.user, c.purchased_date FROM cart as c INNER JOIN products as p WHERE c.user = '$user' and p.Id = c.product_id;");
    while($result=mysqli_fetch_array($query))
    {?>
    <form method="post" action="">
      <div class="float-left"><img class="thumbnails" src="../images/<?php echo $result['image'];?>.jpg" alt="image" />
          <p><?php echo $result['product_name'];?></p>
          <p>Price:€<?php echo $result['price'];?> &nbsp;
          <input type="hidden" value="<?php echo $result['id'];?>" name="cartid"/>
          <button type="submit" class="btn btn-link" name="removefromcart">Remove</button>
      </div>
    </form>
    <?php } ?>
 
</div>
    

<!-- FOOTER START -->
<?php include('../includes/footer.php');?>

</body>
</html>
