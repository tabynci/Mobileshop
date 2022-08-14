<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['login_user'])==0) {
  header('location:logout.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
  <link rel="stylesheet" href="../css/mycss.css">
</head>
<body>
<?php include('../includes/navbar.php');?>
<?php include('../includes/profilenavbar.php');?>
<h1 class="dashboard">Dashboard</h1>
<div class="container">

  <?php 
  $userid=$_SESSION['login_user'];
  $query=mysqli_query($con,"select * from register where email='$userid'");
  while($result=mysqli_fetch_array($query))
  { ?>                        
  Welcome Back <?php echo $result['firstname'] .$result['lastname'];?>
  <?php } ?>
</div>

</body>
</html>



                        