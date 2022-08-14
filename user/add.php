<?php 
$error='';
$con = new mysqli('localhost','root','qwerty', 'testing');

 if (isset($_POST['Register']) != 0) {
 $first_name=$_POST['firstname'];
 $last_name=$_POST['lastname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirm_password=$_POST['confirmpassword'];
 $sql="INSERT INTO `register`(`firstname`,`lastname`, `email`, `password`, `confirmpassword`)
  VALUES ('$first_name','$last_name','$email','$password','$confirm_password')";
    //echo $sql;
  $result = $con->query($sql);
if ($result == TRUE) {
 session_start();// Starting Session
 }else{
 echo "Error:". $sql . "<br>". $con->error;
 } 
 $con->close(); 
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
           /* Navbar Styling */
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
      height:70px; 
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

 .error{
  color:red;
    word-wrap:word-break;
}

/* form div */
.main{
  width: 600px;
    height: 450px;
    padding: 20px;
    border: 5px solid blue;
    background-color: white;
    border-radius:20px;
    font-weight:bold;
    color:black;
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
.errormsg{
  float:left;
  padding-right:50px;
}

</style>
</head>
<body>
<?php include('../includes/navbar.php');?>

<?php 
  $fisrtnameErr=$lastnameErr= $emailErr =$passwordErr=$confirmpasswordErr= "";
	$first_name=$last_name=$email=$password=$confirmpassword="";
  $number=$uppercase=$lowercase=$specialChars=FALSE;
	 
    
    
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (empty($_POST["email"])) {
   $emailErr = "please enter valid Email address";
   } else {
   $email = test_input($_POST["email"]);// check if e-mail address is well-formed
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $emailErr = "Incorrect email address";
   }
   } 
  if (empty($_POST["password"])){
    $password="";
	$passwordErr = "Please enter a  password";
  }
   else
   {
  echo $_POST["password"];  
   $password = test_input($_POST["password"]);  
    echo $password;
   $number = preg_match('@[0-9]@', $_POST["password"]);
   $uppercase = preg_match('@[A-Z]@', $_POST["password"]);
   $lowercase = preg_match('@[a-z]@',$_POST["password"]);
   $specialChars = preg_match('@[^\w]@', $_POST["password"]);
    if(!empty($_POST["password"])&& (strlen($_POST["password"]) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars)){
   $passwordErr ="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
  }
   else {
  $password=test_input($_POST["password"]);
  }

}

if (empty($_POST["confirmpassword"])) {
   $confirmpassword="";
  $confirmpasswordErr = "Confirmpassword is empty";
  } else if ($_POST["confirmpassword"] != $_POST["password"]){
    echo $confirmpassword;
     $confirmpasswordErr="Password doesnot match";
} else{
  $confirmpassword=test_input($_POST["confirmpassword"]);
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
<h2 style="text-align:center">Registration Form</h2>
<form method="post" action=""> 
  <table class="table">
  <tr>
    <th>Fisrt Name:</th>
    <td>
      <input type="text" name="firstname" value="">
    <td>
</tr>
  <tr>
    <th>Last Name:</th>
    <td><input type="text" name="lastname" value="">
    <td>
</tr>
  <tr>
    <th>
 E-mail:</th>
    <td><input type="text" name="email">
 <span class="error">*<br> </span>
    <td>
</tr>
  <tr>
  <th>Password:</th>
    <td> <input type="text" name="password">
 <span class="error">* <br></span>
    <td>
</tr>
  <tr>
  <th>
Confirm Password:</th>
    <td> <input type="text" name="confirmpassword">
 <span class="error">*<br></span>
    <td>
</tr>
<tr>
<td colspan="3" style="text-align:center ;">
<input  type="submit" class="btn btn-primary btn-block" name="Register" value="Register">  
</td>
</tr>
</table>
<div class="errormsg">
  <span class="error"> <?php echo $emailErr;?></span>
  <span class="error"> <?php echo $passwordErr;?></span>
  <span class="error"><?php echo $confirmpasswordErr;?></span>
  </div>
  
</form>
        <br>
        <div class="login">
        <div class="small"><a href="./login.php">Have an account? Go to login</a></div>
          <div class="small"><a href="./welcome_message.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                            

  </div>
  </div>
<!-- FOOTER START -->
<?php include('../includes/footer.php');?>
</body>
</html>