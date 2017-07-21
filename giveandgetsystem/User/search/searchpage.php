<!DOCTYPE html>
<html>
<head>
    <title> Search page </title>
    <link rel="stylesheet" type="text/css" href="searchpage.css">
	<?php 
include('../Nav/navhead.html');

?>
		
</head>


<body>


 <?php 
include ("../Nav/nav.php");
 ?>
 
<div id="twoboxes">
    
	   
		
		
		

   
   


     <div id="searchresultsbox">
    <?php
  function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }

  function sproduct() {
  require('../main/main2.php');
  $outputp = '';
 
  if(isset($_POST['search']))
   {
	
	$searchp =test($_POST['search']);
	$searchp = preg_replace("#[^0-9a-z]#i","",$searchp);
	
	$query = $conn->query("SELECT UsedPeriod, ID, name,Description, posted_date, photo FROM products WHERE name LIKE '%$searchp%'");
	echo 3;
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		//echo 1;
		$outputp ='No products!<br><hr>';
		echo("error " . mysqli_error($conn)); 
		
	}
	else{
	//	echo 2;
		While($row = mysqli_fetch_array($query)) {
			$itemname = $row['name'];
			$UsedPeriod = $row['UsedPeriod'];
			//$sub_category = $row['sub_category'];
			$Description = $row['Description'];
			$posted_date = $row['posted_date'];
			$photo=$row['photo'];
			
			
			$id = $row['ID'];
			

    
         
		 
        

			$outputp .='<div class= "imgbox"> <p>   <img id="myImg" src="'.$photo.'" alt="Baby Bed" width="300" height="200" align="left">
	    </br> <a href="">User Name</a>
		 </br> 
        <b> Product Name:</b> '.$itemname.'
		 </br>  <b> Location:</b> Giza
		 <br>
		 <b> Descrption: </b>'.$Description.'
		 <br>  <b> used period:</b>' .$UsedPeriod.'
		 <br> <b>category:</b> 
		 <br> <b>posted date:</b> '.$posted_date.'
		      <div class="dropdownr">
<button onclick="myFunction()" class="reportbtn">Report</button>
  <div id="myDropdown" class="dropdownr-content">
 <center> <p style="font-weight:bold; color:#ff9900; margin-top:20px;">Choose a reason:</p> </center>
  <input type="radio" id="reasons" name="reasons" value="1" > Not relevant or annoying <br><br>
    <input type="radio" id="reasons" name="reasons" value="2"> Safety issue or illegal <br><br>
	<input type="radio" id="reasons" name="reasons" value="3" >  It is spam <br><br>
    <input type="radio" id="reasons" name="reasons" value="4"> I do not think it should be on Give & Get <br><br>
	  <center> <button id="submitr" type="submit" class="submitr"> Submit </button></center> <br>    
     </p>
     </div>
	 	  <a href="#" ><button style="background-color:#ff9900; color:white; text-decoration:none; " id="send" name="send" >send message</button> </a>

	
        ';
		  
		
		} 
	}
	print("$outputp");
	
	
}}



    function sskill(){

    if(isset($_POST['search']))
   {
	require('../main/main2.php');
	$output = '';
	$searchq =test($_POST['search']);
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query = $conn->query("SELECT level, ID, name, posted_date,UID, description, posted_date FROM skills WHERE name LIKE '%$searchq%'");
	
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		$output ='No skills!<br><hr>';
		echo("error " . mysqli_error($conn)); 
		
	}
	else{
		While($row = mysqli_fetch_array($query)) {
			$level = $row['level'];
			$name = $row['name'];
			//$sub_category = $row['sub_category'];
			$description = $row['description'];
			$posted_date = $row['posted_date'];
		    $TimeAvailable = $row['posted_date'];
			$AddedByWhom = $row['UID'];
  			$id = $row['ID'];
			
	$output .='<div>'.'Skill name:'.$name.'<br> TimeAvailable: '.$TimeAvailable.'<br> category: <br> Description: '.$description.'<br> posted date: '.$posted_date.'<br> UserName: '.$AddedByWhom.'<hr></div>';
		  
		
		} 
	}
	print("$output");
	
}
}

    function sservice(){

     if(isset($_POST['search']))
     {
	require('../main/main2.php');
	$outputr = '';
	$searchr = test($_POST['search']);

	$searchr = preg_replace("#[^0-9a-z]#i","",$searchr);
	
	$query = $conn->query("SELECT ExperienceYears, ID, name, UID, Time_available, description, posted_date FROM services WHERE name LIKE '%$searchr%'");
	
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		$outputr ='No services!<br><hr>';
				echo("error " . mysqli_error($conn)); 

		
	}
	else{
		While($row = mysqli_fetch_array($query)) {
			$ExperienceYears = $row['ExperienceYears'];
			$name = $row['name'];
			//$sub_category = $row['sub_category'];
			$description = $row['description'];
			$posted_date = $row['posted_date'];
		    $Time_available = $row['Time_available'];
			$AddedByWhom = $row['UID'];
			$id = $row['ID'];
			
	$outputr .='<div>'.'Service name:'.$name.'<br> TimeAvailable: '.$Time_available.'<br> ExperienceYears:'.$ExperienceYears.'<br> category: <br> Description: '.$description.'<br> posted date: '.$posted_date.'<br> UserName: '.$AddedByWhom.'<hr></div>';
		  
		
		} 
	}
	print("$outputr");
	
}
}


 

 sservice();
         sskill();
         sproduct();
   ?>

     </div>
   
 </div>  
  
  
  
 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.reportbtn')) {

    var dropdowns = document.getElementsByClassName("dropdownr-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
     var sumbit = document.getElementsById("submitr");
   submit.click(function(){
        dropdowns.hide(100);
    });

      }
    }
  } 
}
</script>
  
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

</body>
</html>