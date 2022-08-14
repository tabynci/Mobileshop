<?php 
include_once('../includes/config.php');
$error=''; // Variable To Store Error Message
if(isset($_POST['LoginAction'])) {
// Starting Session
    session_start();
    //Define $username and $Password
    $email=$_POST['email'];
    $password=$_POST['password'];
    //esatblish  connection with server with servername , emailid and password as parameter
    //$db =mysqli_select_db($connection,"testing");
    $query=mysqli_query($con,"select * from register where password='$password' AND email='$email'");
    $rows=mysqli_num_rows($query);
    if($rows == 1)
    {
      $_SESSION['login_user']=$email;
      $_SESSION['admin_user']=NULL;
      header("location:home.php");
    }else{
      $query=mysqli_query($con,"select * from admin where password='$password' AND email='$email'");
      $rows=mysqli_num_rows($query);
      if($rows == 1) 
      {
        $_SESSION['login_user']=$email;
        $_SESSION['admin_user']=$email;
        header("location:profile.php");
      } else {
        $_SESSION['login_user']=NULL;
        $_SESSION['admin_user']=NULL;
        session_destroy();
        
      }
      
    }
    mysqli_close($con);
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
    <!-- I used bootstrap from link here https://getbootstrap.com/docs/4.0/getting-started/download/ -->
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
      height:80px; 
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
    /* Footer style    link refered here https://codepen.io/jakeduncan/pen/rJZJMM */
    
/* form div */
  .main{
  width: 600px;
    height: 450px;
    padding: 20px;
    border: 5px solid blue;
    background-color: white;
    border-radius:20px;
    font-weight:bold;
    color:black
  }
/* form styling */
    form {
       font-weight:bold;
    }
/* login main div */
.main1{
  height:42em;
  background-color: white;
  padding:100px 70px 0px 500px;
}
</style>
</head>
<body>
<?php include('../includes/navbar.php');?>

<?php 
  $emailErr =$passwordErr="";
	$email=$password="";
  $number=$uppercase=$lowercase=$specialChars=FALSE; 
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = $_POST["password"];
     if (empty($_POST["email"])) {
   $emailErr = "please enter valid Email address";
   } else {
   $email = test_input($_POST["email"]);// check if e-mail address is well-formed
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Incorrect email address";
   }
   } 
  if (empty($pass)){
    $password="";
	$passwordErr = "Please enter a  password";
  }
   else
   {
   $password = test_input($pass);  
   $number = preg_match('@[0-9]@', $pass);
   $uppercase = preg_match('@[A-Z]@', $pass);
   $lowercase = preg_match('@[a-z]@',$pass);
   $specialChars = preg_match('@[^\w]@', $pass);
    if(!empty($pass)&& (strlen($pass) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars)){
   $passwordErr ="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
  }
   else {
  $password=test_input($_POST["password"]);
  }

}

 
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


<div class="main1">
<div class="main">
<h2 style="text-align:center">Login Form</h2>
<form method="post" action="">
  <div>
      <table class="table">
          <tr>
              <th>Email :</th>
              <td>
              <input type="text" name="email"  value="" placeholder="Email" required />
              <span class="error">*</span>
            </td>
          </tr>
          <tr>
              <th>Password :</th>
              <td>
              <input type="password" name="password"  value="" placeholder="**********" required />
              <span class="error">*</span>
            </td>
          </tr>
          <tr>
              <td colspan="2" style="text-align:center ;">
              <input type="submit" class="btn btn-primary btn-block" name="LoginAction" value="Login"></td>
          </tr>
          </tbody>
      </table>
      <span class="error"><br><?php echo $emailErr;?></span>
      <span class="error"><br><?php echo $passwordErr;?></span>
      
  </div>
</form>
</div>
</div>

<!-- FOOTER START -->

<?php include('../includes/footer.php');?>



<!-- -->

</body>
</html>




