<!DOCTYPE html>
<html>
<head>
    <title> Home page </title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
  
<?php 
include('../Nav/navhead.html');
include('../footer/footerhead.html');
?>
  
</head>


<body>

  
  <?php 
  include("../Nav/nav.php");
  ?>
  
  
  <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:70px">GIVE & GET</h1>
    <h3> SHOP WITHOUT MONEY </h3>
  </div>
</div>
  
  

 <h2 align="center">ITEMS CATEGORIES</h2>

 
 <div class="container">
  <button class="items">Product</button>
  
  <div class="panel"> 
 <?php 
include('selectproduct.php');
 ?>
    

   
  </div>

 


<button class="items">Skills</button>
<div class="panel">
  
<?php
include('selectskills.php');

?>

</div>





<button class="items">Services</button>
<div class="panel">
  
  <?php
include('selectservice.php');
  ?>

</div>
</div>




<script src="homescript.js"> </script>
<script>
var acc = document.getElementsByClassName("items");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>


<div class="adbox">
  <?php
  include('showAd.php');
  ?>
  
  
  
   
</div>
   
<?php include('../footer/footer.html');?>

</body>
</html>