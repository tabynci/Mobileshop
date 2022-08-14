<?php session_start();
include_once('../includes/config.php');
if (isset($_SESSION['admin_user']) == 0) {
    header('location:../user/logout.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/mycss.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>     -->
</head>
<body>
<?php include('../includes/navbar.php');?>
<?php include('./includes/adminprofilenavbar.php');?>
<div>
<h3>Manage Products</h3>
<div>
    <table class="table">
      <thead>
            <th>Id</th>
            <th>Brand</th>
            <th>Product Name</th>
            <th>Price</th>            
            <th>Actions</th> 
        <thead>
  <?php 
    $userid=$_SESSION['admin_user'];
    $query=mysqli_query($con,"select * from products");
    while($result=mysqli_fetch_array($query))
    {?>
        <tbody>
        <tr>
            <td scope="row"><?php echo $result['Id'];?></td>
            <td scope="row"><?php echo $result['Brand'];?></td>
            <td scope="row"><?php echo $result['Product'];?></td>
            <td scope="row"><?php echo $result['Price'];?></td>
              <td scope="row">
                <a class="btn btn-danger">Edit</a>
                <a class="btn btn-danger">Delete</a>
            </td>
        </tr>
        </tbody>
  <?php } ?>
  </table>
  <br>
</div>

</div>
</div>
<!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>