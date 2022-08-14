<?php 
include_once('../includes/config.php');
session_start();
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
      .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
      .w3-half img:hover{opacity:1}
       .new-padding{
        padding-right:20px;
        padding-bottom:20px;
        padding-top:20px;
        padding-left:20px;
       }   
       .height{
        height:50em;
       }
       .mobile{
        font-style:italic;
        color:blue;
        font-size:20px;
       }
       .size {
        width: 15em;
        height: 15em;
       }
       .container{
  height:42em;
}
</style>
</head>
<body >

  
  <div>
      <?php include('../includes/navbar.php');?>
      <?php include('../includes/brandnavbar.php');?>
</div>
</div>
</nav>
      </div class="con">
      <div class="img">
      <!-- <img src="../images/app1.jpg"/>  -->
      </div>

        <div class="matter"> <p class="mobile">
          Looking for a quality used phone's? Your search end here! </p>
      </div>
       
      </div>
     <!-- Photo grid (modal) -->
    <div class="w3-row-padding container">
    <div class="w3-half">
      <img src="../images/samsung-galaxy-s7-edge.jpg" class="size" onclick="onClick(this)" alt="samsung galaxy s7 edge">
      <img src="../images/samsung-galaxy-s7.jpg" class="size" onclick="onClick(this)" alt="samsung galaxy s7">
      <img src="../images/samsung-galaxy-s20.jpg" class="size" onclick="onClick(this)" alt="Samsung galaxy s20">
      <img src="../images/iphone-12-pro-1607328739.webp" class="size" onclick="onClick(this)" alt="iphone-12-pro">
    </div>
    <div class="w3-half">
      <img src="../images/samsung-galaxy-s10-1562654886.webp"  class="size" onclick="onClick(this)" alt="samsung-galaxy-s10">
      <img src="../images/1,04637b216d86.webp" class="size" onclick="onClick(this)" alt="Samsung s9">
      <img src="../images/samsung-galaxy-note-8-1528278534.webp" class="size" onclick="onClick(this)" alt="samsung-galaxy-note-8">
      <img src="../images/apple-iphone-8-1619178736.webp" class="size" onclick="onClick(this)" alt="apple-iphone-8">
    </div>
  </div>
   <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright"></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
       </div>
     </div>
      </div> 

  <?php include('../includes/footer.php');?>

  <script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>

</html>