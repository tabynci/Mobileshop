<?php session_start();
include_once('../includes/config.php');
if (isset($_SESSION['admin_user'])==0) {
  header('location:logout.php');
  } 
//Code for Updation 
 // for  password change   
if(isset($_POST['update']))
{
$userId=$_SESSION['admin_user'];
$oldpassword=$_POST['currentpassword']; 
$newpassword=$_POST['newpassword'];
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpassword' and email='$userId'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$ret=mysqli_query($con,"update admin set password='$newpassword' where email='$userId'");
echo "<script>alert('Password Changed Successfully !!');</script>";
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
}
else
{
echo "<script>alert('Old Password not match !!');</script>";
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>   -->
  <link rel="stylesheet" href="../css/mycss.css">
</head>
<body>

<?php include('../includes/navbar.php');?>  
<?php include('./includes/adminprofilenavbar.php');?>

<div class="container">
    

    <h3>Change Password</h3>
    <div>
  <form method="post" name="changepassword" onSubmit="return valid();">
        <div>
            <table class="table">
                <tr>
                <th>Current Password</th>
                    <td><input  name="currentpassword" type="password" value="" required /></td>
                </tr>
                <tr>
                    <th>New Password</th>
                    <td><input name="newpassword" type="password" value=""  required /></td>
                </tr>
                      <tr>
                    <th>Confirm Password</th>
                    <td colspan="3"><input name="confirmpassword" type="password" value="" required /></td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align:left ;"><button type="submit" class="btn btn-primary btn-block" name="update">Change</button></td>

                </tr>
                </tbody>
            </table>
        </div>
        </form>
    </div>


</div>
 <!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>


                        

