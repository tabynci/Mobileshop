<?php 
include_once('../includes/config.php');
if (isset($_SESSION['admin_user'])==0) {
  header('location:logout.php');
  }
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid color" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text">
      <?php 
  $userid=$_SESSION['admin_user'];
  $query=mysqli_query($con,"select * from admin where email='$userid'");
  while($result=mysqli_fetch_array($query))
  { ?>                        
      <h2> Welcome back administrator : <?php echo $result['username'];?> </h2>
  <?php } ?>
      </div>
      <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="./Samsung.php">Samsung Phones</a> was using specific pages and later used generic page-->
          <a class="nav-link active" aria-current="page" href="./adminProfile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./editadmin-profile.php">Edit Profile</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./changeadmin-password.php">Change Password</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./manage-users.php">Manage Users</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./manage-products.php">Manage Products</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./manage-cart.php">Manage Cart</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>