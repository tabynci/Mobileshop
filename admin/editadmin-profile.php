<?php session_start();
include_once('../includes/config.php');
if (isset($_SESSION['admin_user']) == 0) {
  header('location:logout.php');
  } 

if(isset($_POST['update']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
    
   
$userid=$_SESSION['admin_user'];
$msg=mysqli_query($con,"update admin set email='$email', username='$username' where email='$userid'");
$_SESSION['admin_user']=$email;

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
    header("location:editadmin-profile.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/mycss.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
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
  <form method="post">
          <div>
              <table class="table">
                <tr>
                  <th>First Name</th>
                    <td><input  id="username" name="username" type="text" value="<?php echo $result['username'];?>" required /></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input id="email" name="email" type="text" value="<?php echo $result['email'];?>"  required /></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:left ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                </tr>
                  </tbody>
              </table>
          </div>
          </form>
      </div>
  <?php } ?>
</div>

<!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>
