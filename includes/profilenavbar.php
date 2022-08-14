<?php 
include_once('../includes/config.php');
if (strlen($_SESSION['login_user'])==0) {
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
  $userid=$_SESSION['login_user'];
  $query=mysqli_query($con,"select * from register where email='$userid'");
  while($result=mysqli_fetch_array($query))
  { ?>                        
      <h2> Welcome back: <?php echo $result['firstname'];?> </h2>
  <?php } ?>
      </div>
      <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="./Samsung.php">Samsung Phones</a> was using specific pages and later used generic page-->
          <a class="nav-link active" aria-current="page" href="./profile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./edit-profile.php">Edit Profile</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./change-password.php">Change Password</a>
        </li>     
      </ul>
    </div>
  </div>
</nav>