<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['login_user'])==0) {
  header('location:logout.php');
  } 

if(isset($_POST['update']))
{
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
    
   
$userid=$_SESSION['login_user'];
$msg=mysqli_query($con,"update register set email='$email', firstname='$firstname', lastname='$lastname' where email='$userid'");
$_SESSION['login_user']=$email;

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'edit-profile.php'; </script>";
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
<?php include('../includes/profilenavbar.php');?>
<div class="container">

  <?php 
  $userid=$_SESSION['login_user'];
  $query=mysqli_query($con,"select * from register where email='$userid'");
  while($result=mysqli_fetch_array($query))
  {?>
      <h3><?php echo $result['firstname'];?>'s Profile</h3>
      <div>
  <form method="post">
          <div>
              <table class="table">
                <tr>
                  <th>First Name</th>
                    <td><input  id="firstname" name="firstname" type="text" value="<?php echo $result['firstname'];?>" required /></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><input  id="lastname" name="lastname" type="text" value="<?php echo $result['lastname'];?>"  required /></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><input id="email" name="email" type="text" value="<?php echo $result['email'];?>"  required /></td>
                </tr>
                <tr>
                    <td colspan="43" style="text-align:left ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

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
