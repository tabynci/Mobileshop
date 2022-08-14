<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['login_user'])==0) {
  header('location:logout.php');
  } else
{
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/mycss.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="style">
<nav class="navbar navbar-inverse">
  <div class="container-fluid ">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse height
    " id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-2 height sidenav">
    <h1>Admin Dashboard</h1>
    <p><a href="./adminProfile.php"> Admin Profile</a></p>
      <p><a href="./edit-profile.php">Edit profile</a></p>
      <p><a href="./changeadmin-password.php">change password</a></p>
      
</div>
        <h1 class="dashboard">Dashboard</h1>
                    

<?php 

$userid=$_SESSION['login_user'];
$query=mysqli_query($con,"select * from admin where email='$userid'");
while($result=mysqli_fetch_array($query))
{?>                        
                        <div class="row" >
                            <div class="col-xl-5 col-md-6" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Welcome Back <?php echo $result['username'];?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="adminProfile.php">Admin Profile</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            </div>
<?php } ?>


                        </div>
              
                        </div>
                   
                    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
<div>
</body>
</html>

<?php } ?>




                        