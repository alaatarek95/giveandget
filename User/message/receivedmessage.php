<!DOCTYPE html>
<html>
<head>
    <title> Received Message page </title>
    <link rel="stylesheet" type="text/css" href="receivedstyle.css">
	

<?php 
include('../Nav/navhead.html');
?>
</head>

<body>

  <?php 
  include_once('../userfunction/session.php');
  include("../Nav/nav.php");
  ?>
  
 <br> <br> <br>
 <?php
include 'receivemessage.php';
 ?>

 
  


</body>
</html>