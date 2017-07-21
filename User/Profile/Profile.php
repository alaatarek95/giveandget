<!DOCTYPE html>
<html lang="en">
<head>
           <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="viewbox.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php include_once('../userfunction/session.php');
 include('../footer/footerhead.html');?>
  <style>
* {
    box-sizing: border-box;
}
#myImg 
{
     border-radius: 500px;
	 margin-left:50px;
	 margin-top:-1px;
	 border: 2px solid #ccc;
     cursor: pointer;
     transition: 0.3s;
     float: left;
     padding: 3px;
	 
	 
}

ul#menu li {

    display:inline;	
	font-family:"Arial";
font-size:18px;
	 margin-left:200px;


}

.btnbtn-infobtn-lg
{
	 font-size: 20px;
	 font-family:"Arial";
	 background-color:  #ffb84d;
	 color: #fff;
	 border: none;
	 border-radius: 4px;
	 padding: 5px 20px;
	 cursor: pointer;
	 border: 1px solid #888;


}

.btnbtn-infobtn-lg:hover {
     box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2),0 3px 10px 0 rgba(0,0,0,0.19);
     background:  #ff9900;
}


.modal-title
{
     text-align: center; 
	 font-weight: bold;
     font-size:25px;	
     color:#ffb84d;
}



textarea 
{
     width: 50%;
     height: 100px;
     padding: 5px 5px;
     box-sizing: border-box;
     border: 2px solid #ccc;
     border-radius: 4px;
     background-color: #f8f8f8;
     font-size: 16px;
     margin-top:-40px;
	 margin-left:143px;

}
    
select
{

     font-family:"Arial";
	 background-color:  #ffb84d;
	 color: #fff;
	 border: none;
	 border-radius: 4px;
	 padding: 5px 20px;
	 cursor: pointer;
     margin-left: 450px;
	 margin-bottom:-10px;
	 font-size:17px;
} 

input[type=text1] 
{
     border: 2px solid #ccc;
	 border-radius: 4px;
	 height: 25px;
	 width: 180px;
	 font-size: 16px;
	 padding: 5px 10px;
}
    
#itemname
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 26px;


}
    
#status
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left:22px;
}
    
#usedperiod
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 16px;

}
 
#time_available
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 2px;

} 
  
#servicename
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 25px;


}
    
#timeavailable1
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left:20px;
}
    
#Experience
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 1px;

}

 
 .radio
{
	 font-family:"Arial";
	 transition: 0.4s;
}

 
#skillname
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 27px;


}
    
#certificate
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 27px;
}
    
#timeavailable
{
	 padding: 5px 5px;
     margin-bottom: 10px;
     margin-left: 2px;
}
	 
 
label 
{
     font-family: Arial;
     padding-left: 50px;

}
	


.postbutton
{
	 margin-left:500px;
	 border-radius: 4px; 
	 cursor: pointer; 
	 background-color:#ffb84d;
	 color:#fff;
	 font-size:17px; 
	 padding: 3px 17px;
}
.postbutton:hover {background:  #ff9900;}













</style>
  
  </head>
  <body>

  
<?php

include('../Nav/nav.php');
?>
<form method="get" action="rate.php" id="ratingsForm">
  <?php
  include 'showRate.php';
  ?>
  <input type="submit" name="submit" value="rate" class="postbutton">
  
</form>
  
  <br>
  
  
<div class="container">
<div class="row">
<?php 
include('profileselect.php');

?>
 <!-- left column -->
<div class="col-md-3 col-xs-12">
 <img id="myImg" src="<?php echo $picture; ?>" alt="Paris" width="150" height="150">
</div>
	  
      <div class="col-md-6 col-xs-12">
       <h4 style="margin-left:-15px; margin-top:50px; color:black;"> <?php echo $Fname; ?> </h4>
		<h4 style="margin-left:-15px;margin-top:20px; color:black;"> <?php echo $bio; ?> </h4>
     </div> 
		 	 
<div class="col-md-12 col-xs-12">
<ul id="menu">
<?php
include('trustfunction.php');
?>
  <li><a href="Trust.html" style="text-decoration: none; color:black;" href="#"><?php echo $trust; ?>Trust</a></li>
  <li><a href="Un trust.html" style="text-decoration: none; color:black;" href="#"><?php echo $untrust; ?>Untrust</a></li>
  <?php

  include('countposts.php');
  ?>
  <li><?php echo $posts ; ?> Posts</li>
</ul>
</div>

</div>
</div>

<br>

<div class="container">
  <!-- Trigger the modal with a button -->

  

<br><br>
</div>
<div class="container">
		
		<main>
			<div class="row">
			<?php
			include('postfunction.php');
			?>
				
			
			
		</main>
	</div>


	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
	<script src="jquery.viewbox.min.js"></script>
	<script>
		$(function(){
			
			$('.thumbnail').viewbox();
			$('.thumbnail-2').viewbox();

			(function(){
				var vb = $('.popup-link').viewbox();
				$('.popup-open-button').click(function(){
					vb.trigger('viewbox.open');
				});
				$('.close-button').click(function(){
					vb.trigger('viewbox.close');
				});
			})();
			
		});
	</script>
	  <?php include('../footer/footer.html');?>

</body>
</html>
