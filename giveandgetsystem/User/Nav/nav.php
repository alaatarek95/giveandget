
 
<nav style="background-color:#ffb84d; "class="navbar navbar-inverse">
  <div class="container-fluid">
  
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="font-weight:bold;" class="navbar-brand" href="#">G I V E & G E T</a>
    </div>
	
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li style="font-weight:bold; font-size:18px;" class="active"><a href="../home/homepage.php">Home</a></li>
		
		
        <li class="dropdown">
          <a style="font-weight:bold;color:white;"class="dropdown-toggle" data-toggle="dropdown" href="#">My profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../Profile/Profile.php">My account</a></li>
			 <li><a href="../Profile/Edite P.php">Edit profile</a></li>
			  <li><a href="../userfunction/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </li>

		
<li class="dropdown">
          <a style="font-weight:bold;color:white;"class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Books</a></li>
			 <li><a href="#">Clothes</a></li>
			  <li><a href="#">Others</a></li>

          </ul>
        </li>	
		
		<li class="dropdown">
          <a style="font-weight:bold;color:white;"class="dropdown-toggle" data-toggle="dropdown" href="#">Skills<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Language</a></li>
			 <li><a href="#">Hand made</a></li>
			  <li><a href="#">Others</a></li>

          </ul>
        </li>
		
		<li class="dropdown">
          <a style="font-weight:bold;color:white;"class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Painting</a></li>
			 <li><a href="#">Tailoring</a></li>
			  <li><a href="#">Others</a></li>

          </ul>
        </li>
		
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	  
	  
	  <li>  <button type="button" class="btnbtn-infobtn-lg" data-toggle="modal" data-target="#myModal">+ Add item</button>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">G i v e & G e t </h4>
        </div>
		
     <div class="modal-body">   
  <button  style="margin-left:30px;" type="button" class="btnbtn-infobtn-lg" id="myBtn1" data-toggle="modal" data-target="#myModal1">Add Product</button>
  <button style="margin-left:30px;" type="button" class="btnbtn-infobtn-lg" id="myBtn2" data-toggle="modal" data-target="#myModal2">Add Service</button>
  <button  style="margin-left:30px;" type="button" class="btnbtn-infobtn-lg" id="myBtn3" data-toggle="modal" data-target="#myModal3">Add Skill</button>
     </div>
  
        <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		
      </div>
    </div>
  </div>
  
    <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="overflow: auto;" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">G i v e & G e t</h4>
        </div>
		
<div class="modal-body">

<h4 style="font-family:Arial; margin-left:50px; font-weight:bold;" > Add product : </h4>
<form method="post" name="form5" action="../addItem/addItem.php" enctype="multipart/form-data">
<div>
  <select name="subcategory">
  <?php
include('../main/main2.php');
$sql="SELECT ID , name FROM prsubcategory ";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      $name=$row['name'];
      $id=$row['ID'];
      echo'<option value="'.$id.'">'.$name.'</option>';
    }
  }
  else{
    echo"error";
  }
  ?>
    
  </select> 
</div>

<div>
 <label for="itemname"> Item name:  </label>
  <input type="text1" id="itemname" class="nonum" onkeyup="allLetterandsss(document.form5.itemname);"  name="itemname"required > 
  
  
     <span id="connn" ></span>
       <br>
    <label for="status"> Item status: </label> 
  <input type="radio" id="status" name="status" value="1" > used
    <input type="radio" id="status" name="status" value="0"> new <br>

    <label for="usedperiod"> Used period:</label>
  <input type="text1" id="usedperiod" name="usedperiod" required>
</div> <br> 


    
<div>    
 <p style="font-family:Arial;margin-left:50px;"> Description: </p><textarea name="description" maxlength="150"></textarea>
</div><br>
    
<h5 style="font-family:Arial;margin-left:10px;"> Select images: <input type="file" name="img" multiple> </h5> 
   
<div>
   <button id="post" type="submit" class="postbutton"> Post </button>
    </div>
</div>
       </form> 
      </div> 
   </div>
  </div> 
  
  
   <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <form  action="../addItem/phpservice.php" name="form3" method="post" enctype="multipart/form-data">

  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">G i v e & G e t</h4>
        </div>
        <div class="modal-body">
    
    <h4 style="font-family:Arial;margin-left:50px; font-weight:bold;" > Add service : </h4>
<div>
  <select name="service">
    <?php
include('main2.php');
$sql="SELECT ID , name FROM sersubcategory ";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      $name=$row['name'];
      $id=$row['ID'];
      echo'<option value="'.$id.'">'.$name.'</option>';
    }
  }
  else{
    echo"error";
  }
  ?>
  </select> 
</div>

<div>
 <label for="servicename"> Service name:  </label>
  <input type="text1" id="servicename"  onkeyup="allLetterandsss3(document.form3.servicename);" name="servicename"required maxlength="25"  > 
     <span id="connn3" ></span> <br>
    <label for="timeavailable1"> Time available: </label> 
  <input type="text1" id="timeavailable1" name="timeavailable1" required maxlength="30"> <br>
    <label for="Experience"> Experience years:</label>
  <input type="text1" id="Experience" name="Experience" required maxlength="11">
</div><br> 

<div>    
 <p style="font-family:Arial;margin-left:50px;"> Description: </p><textarea name="description" maxlength="150">Some text...</textarea>
</div> <br>

<div>
   <button id="post" type="submit"  class="postbutton"> Post </button>
    </div>
    </form>

        </div>
      </div>
    </div>
  </div> 
  
   <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
  <form  action="../addItem/phpskill.php" name="form8" method="post" enctype="multipart/form-data">

  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">G i v e & G e t</h4>
        </div>
        <div class="modal-body">
         
     <h4 style="font-family:Arial;margin-left:50px; font-weight:bold;" > Add skill: </h4> 

<h4 style="font-family:Arial;margin-left:50px;" > Level: </h4> 
<div  class="radio">
  <label><input type="radio" name="optradio" value="Expert">Expert</label>
  <label><input type="radio" name="optradio" value="Intermediate">Intermediate</label>
  <label><input type="radio" name="optradio" value="Beginner">Beginner</label>
</div> 

 
<div>
  <select id="skill" name="skill">
<?php
include('main2.php');
$sql="SELECT ID , name FROM sksubcategory ";
$result = $conn->query($sql);

  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      $name=$row['name'];
      $id=$row['ID'];
      echo'<option value="'.$id.'">'.$name.'</option>';
    }
  }
  else{
    echo"error";
  }
  ?>
  </select> 
    </div>

<div>
 <label for="skillname"> Skill name:  </label>
  <input type="text1" id="skillname" onkeyup="allLetterand(document.form8.skillname);" maxlength="20" name="skillname"required >
  <span id="lll" ></span> <br>
  
  
    <label for="certificate"> Certificate: </label> 
  <input type="text1" id="certificate" maxlength="20" name="certificate" required> <br>
   <label for="timeavailable"> Tima available:  </label>
  <input type="text1" id="timeavailable" maxlength="30" name="timeavailable"required > <br><br>
    
    </div>

    
<div>    
 <p style="font-family:Arial;margin-left:50px;"> Description: </p><textarea name="description" maxlength="150">....</textarea>
    </div><br>
       
   <div>
   <button id="post"  class="postbutton"> Post </button>
    </div>
  </form>
     
        </div>
      </div>
      
    </div>
  </div> 
  
    </li>
 
    


	  
	  <li> <a style="font-weight:bold;color:white;" href="../message/receivedmessage.php">
          <span  class="glyphicon glyphicon-envelope"></span> Message
        </a> </li>
        
  
	  
	</ul>
	  
<form class="navbar-form navbar-right" action="../search/searchpage.php" method="post">
     <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search">
     <div class="input-group-btn">
         <button class="btn btn-default" type="submit">
           <i class="glyphicon glyphicon-search"></i>
         </button>
     </div>
      </div>
</form>

    </div>
</div>
<script>


function allLetterandsss(inputtxt)  
  {  
   var ltrslu = /^[A-Za-z\s]+$/;  
    var messagej = document.getElementById('connn');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(ltrslu))  
     {  
      messagej.innerHTML = " "
     }  
   else  
     {  
   messagej.innerHTML = "Please enter letters only!" 
           messagej.style.color = errorColor;
    
     }  
  }   
  function allLetterandsss3(inputtxt)  
  {  
   var ltrslu3 = /^[A-Za-z\s]+$/;  
    var messagej3 = document.getElementById('connn3');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(ltrslu3))  
     {  
      messagej3.innerHTML = " "
     }  
   else  
     {  
   messagej3.innerHTML = "Please enter letters only!" 
           messagej3.style.color = errorColor;
    
     }  
  } 
  function allLetterand(inputtxt)  
  {  
   var ltrsa = /^[A-Za-z\s]+$/;  
    var messagea = document.getElementById('lll');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(ltrsa))  
     {  
      messagea.innerHTML = " "
     }  
   else  
     {  
   messagea.innerHTML = "Please enter letters only!" 
           messagea.style.color = errorColor;
    
     }  
  }   
    
  window.onload =allLetterandsss3;allLetterand;allLetterandsss;
  


  </script>
</nav>
