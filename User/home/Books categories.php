<html>
<head>
<title> Categories </title>
    <link rel="stylesheet" type="text/css" href="Books categories.css">
	<meta charset="UTF-8"/>


<?php 
include('../Nav/navhead.html');
include('../footer/footerhead.html');

?>
</head>
<body>
  <?php
  include("../Nav/nav.php");
  ?>
  
 
    
  </div>
</div>
  
  

 

<p></p>

<table>


	   <?php
require('../main/main2.php');

$categoryName= $_GET['category'];
	$sub=$_GET['sub'];
if ($categoryName=="products"){
	$sql=" SELECT * FROM $categoryName 
	RIGHT JOIN user ON $categoryName.UID=user.UID 
	WHERE subcategory = '$sub' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) {
			$photo=$row['photo'];
			$name=$row['name'];
			$fname=$row['Fname'];
			$description=$row['Description'];

			echo'
      <tr>
    <td>
       <div class="images">
       <img id="img" src="'.$photo.'" alt="An image for a book" width="300" height="200">
       </div>
	   </div>
    </td>
	
	<td>
	  <div class ="imgtext">
	  <p> <b>Item Name:</b>'.$name.' 
	   </br></br>
	  <b> Posted by:</b><a href="#">'.$fname.'</a>
	  </br></br>
	  <b> Posted by
	  <b> Description:</b> '.$description.'
	   </p>
	  


<!-- pop up page for more detailed information of first book-->';
?>
	   		
	
		<?php 
		//echo    "<button class='button' onclick='document.getElementById("."'"."id01"."'".").style.display=".'block'."' style='width:auto; align:center;'>show more details</button>";

		$id= $row['ID'];
		 echo ' <button class="button" onclick="document.getElementById('."'"."m$id"."'".').style.display='."'".'block'."'".'" style="width:auto; align:center;">show more details</button>
		      <div class="dropdownr">
<button onclick="myFunction()" class="reportbtn">Report</button>

<form action="../report/report.php" method="post">
  <div id="myDropdown" class="dropdownr-content">
 <center> <p style="font-weight:bold; color:#ff9900; margin-top:20px;">Choose a reason:</p> </center>
  <input type="radio" id="reasons"     name="reasons" value="Not relevant or annoying" > Not relevant or annoying <br><br>
    <input type="radio" id="reasons"   name="reasons" value="Safety issue or illegal"> Safety issue or illegal <br><br>
	<input type="radio" id="reasons"   name="reasons" value="It is spam" >  It is spam <br><br>
    <input type="radio" id="reasons"    name="reasons" value=" I do not think it should be on Give & Get"> I do not think it should be on Give & Get <br><br>
	  <center> <button id="submitr" type="submit" class="submitr" name="submitr"> Submit </button></center> <br> 

    
  </div>
</div> </form>';

			         


	$sql=" SELECT * FROM $categoryName RIGHT JOIN user ON $categoryName.UID=user.UID WHERE subcategory = '$sub' AND ID=$id ";
	$one = $conn->query($sql);

	if ($one->num_rows > 0) {
    
		while($row = $one->fetch_assoc()) {

		     
			 echo "
			 <div id='m$id' class='modalcat'>
               <span onclick='document.getElementById("."\""."m$id"."\"".").style.display=".'"'."none".'"'."' class='close' title='Close Modal'>×</span>
  
  		
               <div class='itemdetails'>
		       <img  align='center' src=' ".$row['photo']." ' alt='An image for a book' width='300' height='200'>
			   </br>
			   </br>
              <p style='color:#404040;'>
			   Item name:  ".$row['name'] ."
			   </br> </br>
			   Item type: ".$row['subcategory']."
	           </br></br>
	           Posted by: <a href='#'>".  $row['Fname'] ."</a>
	           </br></br>
	           Description: ".$row['Description']."
			   Item category:$categoryName 
			   </br></br>
			   Item status " .$row['status']."
			   </br></br>
			   Using period: ".$row['UsedPeriod']."
			   </p>
			   </br>
			   
			   <p style='color:#FE9A2E; ' ><b> Want this product! </b> </p>
			    
			  <p style='font-size:15px; font-family:Arial;'> click the bottom below and we will send an exchange message request to the user . 
			   </br> 
			  <b> NOTE: </b> you also have to select an item from your library to be exchanged with this item . </p>
			   </br>
			  
			   ";
			   echo '<button class="button"  style="width:auto; color:white;"> <a href="../message/requestmessage.php?id='.$id.'&user='.$row['UID'].'&category='.$categoryName.' "> send mssage now ! </a>
			   </button> 
			   </div>
               </div>
			   
			   
			   
			   </div>
				</td>
				</tr>';
//<!-- end of the pop up page for more detailed information of first book-->

               
           }
           		}
	
 
	
}

}

}
elseif($categoryName=="skills"){
	$sql=" SELECT * FROM $categoryName 
	RIGHT JOIN user ON $categoryName.UID=user.UID 
	WHERE subcategory = '$sub' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) {
			$fname=$row['Fname'];

			$level=$row['level'];
			$certificate=$row['certificate'];
			$name=$row['name'];
			$description=$row['description'];
			$timeAvailable=$row['timeAvailable'];	
			$posted_date=$row['posted_date'];
			echo'
      <tr>
    <td>
       <div class="images">
       <img id="img" src="skills.png" alt="'.$description.'" width="300" height="200">
       </div>
	   </div>
    </td>
	
	<td>
	  <div class ="imgtext">
	  <p> <b>Item Name:</b>'.$name.' 
	   </br></br>
	  <b> Posted by:</b><a href="#">'.$fname.'</a>
	  </br></br>
	  <b> Posted by
	  <b> Description:</b> '.$description.'
	   </p>
	  


<!-- pop up page for more detailed information of first book-->';
?>
	   		
	
		<?php 
		//echo    "<button class='button' onclick='document.getElementById("."'"."id01"."'".").style.display=".'block'."' style='width:auto; align:center;'>show more details</button>";

		$id= $row['ID'];
		 echo ' <button class="button" onclick="document.getElementById('."'"."m$id"."'".').style.display='."'".'block'."'".'" style="width:auto; align:center;">show more details</button>
		      <div class="dropdownr">
<button onclick="myFunction()" class="reportbtn">Report</button>

<form action="../report/report.php" method="post">
  <div id="myDropdown" class="dropdownr-content">
 <center> <p style="font-weight:bold; color:#ff9900; margin-top:20px;">Choose a reason:</p> </center>
  <input type="radio" id="reasons"     name="reasons" value="Not relevant or annoying" > Not relevant or annoying <br><br>
    <input type="radio" id="reasons"   name="reasons" value="Safety issue or illegal"> Safety issue or illegal <br><br>
	<input type="radio" id="reasons"   name="reasons" value="It is spam" >  It is spam <br><br>
    <input type="radio" id="reasons"    name="reasons" value=" I do not think it should be on Give & Get"> I do not think it should be on Give & Get <br><br>
	  <center> <button id="submitr" type="submit" class="submitr" name="submitr"> Submit </button></center> <br> 

    
  </div>
</div> </form>';

			         


	$sql=" SELECT * FROM $categoryName RIGHT JOIN user ON $categoryName.UID=user.UID WHERE subcategory = '$sub' AND ID=$id ";
	$one = $conn->query($sql);

	if ($one->num_rows > 0) {
    
		while($row = $one->fetch_assoc()) {

		     
			 echo "
			 <div id='m$id' class='modalcat'>
               <span onclick='document.getElementById("."\""."m$id"."\"".").style.display=".'"'."none".'"'."' class='close' title='Close Modal'>×</span>
  
  		
               <div class='itemdetails'>
		       <img  align='center' src='skills.png' alt='An image for a book' width='300' height='200'>
			   </br>
			   </br>
              <p style='color:#404040;'>
			   Item name:  ".$row['name'] ."
			   </br> </br>
	           
	           Posted by: <a href='#'>".  $row['Fname'] ."</a>
	           </br></br>
	           Description: ".$row['description']."
			   Item category:$categoryName 
			   </br></br>
			   level: " .$row['level']."
			   </br></br>
			   certificate: ".$row['certificate']."
			   </p>
			   </br>
			   
			   <p style='color:#FE9A2E; ' ><b> Want this product! </b> </p>
			    
			  <p style='font-size:15px; font-family:Arial;'> click the bottom below and we will send an exchange message request to the user . 
			   </br> 
			  <b> NOTE: </b> you also have to select an item from your library to be exchanged with this item . </p>
			   </br>
			  
			   ";
			   echo '<button class="button"  style="width:auto; color:white;"> <a href="../message/requestmessage.php?id='.$id.'&user='.$row['UID'].'&category='.$categoryName.' "> send mssage now ! </a>
			   </button> 
			   </div>
               </div>
			   
			   
			   
			   </div>
				</td>
				</tr>';
//<!-- end of the pop up page for more detailed information of first book-->

               
           }
           		}
	
 
	
}


}
}
elseif($categoryName=="services"){
	$sql=" SELECT * FROM $categoryName 
	RIGHT JOIN user ON $categoryName.UID=user.UID 
	WHERE subcategory = '$sub' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) {
			$fname=$row['Fname'];

			$ExperienceYears=$row['ExperienceYears'];
			$Time_available=$row['Time_available'];
			$name=$row['name'];
			$description=$row['description'];
			$posted_date=$row['posted_date'];
			echo'
      <tr>
    <td>
       <div class="images">
       <img id="img" src="services-systems.jpg" alt="'.$description.'" width="300" height="200">
       </div>
	   </div>
    </td>
	
	<td>
	  <div class ="imgtext">
	  <p> <b>Item Name:</b>'.$name.' 
	   </br></br>
	  <b> Posted by:</b><a href="#">'.$fname.'</a>
	  </br></br>
	  <b> Posted by
	  <b> Description:</b> '.$description.'
	   </p>
	  


<!-- pop up page for more detailed information of first book-->';
?>
	   		
	
		<?php 
		//echo    "<button class='button' onclick='document.getElementById("."'"."id01"."'".").style.display=".'block'."' style='width:auto; align:center;'>show more details</button>";

		$id= $row['ID'];
		 echo ' <button class="button" onclick="document.getElementById('."'"."m$id"."'".').style.display='."'".'block'."'".'" style="width:auto; align:center;">show more details</button>
		      <div class="dropdownr">
<button onclick="myFunction()" class="reportbtn">Report</button>

<form action="../report/report.php" method="post">
  <div id="myDropdown" class="dropdownr-content">
 <center> <p style="font-weight:bold; color:#ff9900; margin-top:20px;">Choose a reason:</p> </center>
  <input type="radio" id="reasons"     name="reasons" value="Not relevant or annoying" > Not relevant or annoying <br><br>
    <input type="radio" id="reasons"   name="reasons" value="Safety issue or illegal"> Safety issue or illegal <br><br>
	<input type="radio" id="reasons"   name="reasons" value="It is spam" >  It is spam <br><br>
    <input type="radio" id="reasons"    name="reasons" value=" I do not think it should be on Give & Get"> I do not think it should be on Give & Get <br><br>
	  <center> <button id="submitr" type="submit" class="submitr" name="submitr"> Submit </button></center> <br> 

    
  </div>
</div> </form>';

			         


	$sql=" SELECT * FROM $categoryName RIGHT JOIN user ON $categoryName.UID=user.UID WHERE subcategory = '$sub' AND ID=$id ";
	$one = $conn->query($sql);

	if ($one->num_rows > 0) {
    
		while($row = $one->fetch_assoc()) {

		     
			 echo "
			 <div id='m$id' class='modalcat'>
               <span onclick='document.getElementById("."\""."m$id"."\"".").style.display=".'"'."none".'"'."' class='close' title='Close Modal'>×</span>
  
  		
               <div class='itemdetails'>
		       <img  align='center' src='skills.png' alt='An image for a book' width='300' height='200'>
			   </br>
			   </br>
              <p style='color:#404040;'>
			   Item name:  ".$row['name'] ."
			   </br> </br>
			  
	           Posted by: <a href='#'>".  $row['Fname'] ."</a>
	           </br></br>
	           Description: ".$row['description']."
			   Item category:$categoryName 
			   </br></br>
			   Experience Years: " .$row['ExperienceYears']."
			   </br></br>
			   Time available: ".$row['Time_available']."
			   </p>
			   </br>
			   
			   <p style='color:#FE9A2E; ' ><b> Want this product! </b> </p>
			    
			  <p style='font-size:15px; font-family:Arial;'> click the bottom below and we will send an exchange message request to the user . 
			   </br> 
			  <b> NOTE: </b> you also have to select an item from your library to be exchanged with this item . </p>
			   </br>
			  
			   ";
			   echo '<button class="button"  style="width:auto; color:white;"> <a href="../message/requestmessage.php?id='.$id.'&user='.$row['UID'].'&category='.$categoryName.' "> send mssage now ! </a>
			   </button> 
			   </div>
               </div>
			   
			   
			   
			   </div>
				</td>
				</tr>';
//<!-- end of the pop up page for more detailed information of first book-->

               
           }
           		}
	
 
	
}	

}
}
$conn->close();

?>


</table>
<?php include('../footer/footer.html');?>

<script>
// Get the modalcat
var modalcat = document.getElementById('id01');

// When the user clicks anywhere outside of the modalcat, close it
window.onclick = function(event) {
    if (event.target == modalcat) {
        modalcat.style.display = "none";
    }
}
</script>

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

</body>


</html>
