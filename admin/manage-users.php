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
<div class="container">
<h3>Manage Users</h3>
<div>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirmpassword</th>
            <th>Actions</th> 
        <thead>
  <?php 
    $userid=$_SESSION['admin_user'];
    $query=mysqli_query($con,"select * from register");
    while($result=mysqli_fetch_array($query))
    {?>
        <tbody>
        <tr>
            <td scope="row"><?php echo $result['id'];?></td>
            <td scope="row"><?php echo $result['firstname'];?></td>
            <td scope="row"><?php echo $result['lastname'];?></td>
            <td scope="row"><?php echo $result['email'];?></td>
            <td scope="row"><?php echo $result['password'];?></td>
            <td scope="row"><?php echo $result['confirmpassword'];?></td>
              <td scope="row">
                <a class="btn btn-primary">Edit</a>
                <a class="btn btn-danger">Delete</a>
            </td>
        </tr>
        </tbody>
  <?php } ?>
  </table>
  <br>
</div>
  <h3>Manage Admins</h3>
<div>
    <table class="table">
        <thead>
            <th>Id</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Actions</th> 
        <thead>
  <?php 
    $userid=$_SESSION['admin_user'];
    $query=mysqli_query($con,"select * from admin");
    while($result=mysqli_fetch_array($query))
    {?>
        <tbody>
        <tr>
            <td scope="row"><?php echo $result['id'];?></td>
            <td scope="row"><?php echo $result['username'];?></td>
            <td scope="row"><?php echo $result['email'];?></td>
              <td scope="row">
                <a class="btn btn-danger">Delete</a>
            </td>
        </tr>
        </tbody>
  <?php } ?>
  </table>

</div>
</div>
<!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>