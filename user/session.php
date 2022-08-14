<?php
$connection =mysqli_connect("localhost","root","qwerty");
$db=mysqli_select_db($connection,"testing");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($connection,"select email from register where email='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['email'];
if(!isset($login_session)){
    mysqli_close($connection);
    header('Location:welcome_message.php');
}
?>
<?php
$connection =mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"testing");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($connection,"select email from admin where email='$user_check'");
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['email'];
if(!isset($login_session)){
    mysqli_close($connection);
    header('Location:../admin/welcomeAdmin.php');
}
?>