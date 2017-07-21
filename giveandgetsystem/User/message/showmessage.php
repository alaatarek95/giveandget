<!DOCTYPE html>
<html>
<head>
    <title> Show Message page </title>
    <link rel="stylesheet" type="text/css" href="showmessage.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>

<body>
  
  
 

 <div class="box">
 <?php
include('showsentmsg.php');
 ?>
 
    <img src="<?php echo $picture ;?>" alt="<?php echo $fname ;?>" class="imgp" width="70" height="70">
	    <a  class="profilename" href=""> <?php echo $fname ;?> </a> <h4>phone number: <?php  echo $phone; ?></h4>
		 
		 <br> <br>
		 
<div class="part1">

	<div class="pstyle"> " <?php echo $content ;?> </div>
	      
		    
               <div class="gallery">
		
			      <img src="<?php echo $photo ;?>" alt="<?php echo $name ;?>" width="300" height="200"/> 
             
			      <div class="desc"> <?php echo $name ;?> </div>
		       </div>
			   
</div>		   
	
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
		
<div class="pstyle"> with one of this item </div>
<p> <font color="red">*If you accept, choose one of this items*</font></p>
<form method="post" action="message2.php">
	 <input type="hidden" name="towhom" value="<?php echo $userid; ?>">

   <input type="hidden" name="content" value="<?php echo $content; ?>">
	 <?php
	 include 'selecteditemsformessage.php';
	 ?>
		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
			  
	<div class="btn">		
   <button id="myBtn2" name="reject"  type="submit" class="reject">Reject</button>
   <button id="myBtn" name="accept" type="submit" class="accept">Accept</button>
   </div>
   
 
  
  <br> <br>
  




</div>        


   

</body>
</html>