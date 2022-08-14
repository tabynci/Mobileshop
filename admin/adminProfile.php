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
  <?php 
    $userid=$_SESSION['admin_user'];
    $query=mysqli_query($con,"select * from admin where email='$userid'");
    while($result=mysqli_fetch_array($query))
    {?>
    <h3><?php echo $result['username'];?>'s Profile</h3>
        <div>
            <table class="table">
                <tr>
                <th>User Name</th>
                    <td><?php echo $result['username'];?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $result['email'];?></td>
                </tr>
                <tr>
              <td colspan="2" style="text-align:left ;"><a href="editadmin-profile.php" class="btn btn-primary btn-block">Edit</a></td>
            </tr>
                </tbody>
            </table>
    </div>
  <?php } ?>
</div>
<!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>





                        

