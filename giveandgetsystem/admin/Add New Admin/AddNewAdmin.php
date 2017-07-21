<!DOCTYPE html>
<html>
<head>
    <title> Add New Admin </title>
    <link rel="stylesheet" type="text/css" href="AddNewAdmin.css">
	
	  
	
</head>


<body onload='document.form3.fname;document.form3.username;document.form3.email.focus()'>
  <?php include('../nav admin/Navadmin.html'); ?>

<h1> Sign Up For New Admin </h1>


<form name="form3" action="addadmin.php" method="post" style="border:1px solid #ccc">
  <div class="container">
  
  <label><b>Full Name</b></label>
    <input type="text" placeholder="Enter First Name" onkeyup="allLetterands(document.form3.fname);" maxlength="40" name="fname" required>
	
     <span id="con" ></span><br>
	 <label><b>UserName</b></label>
    <input type="text" placeholder="Enter username" onkeyup="allLetter(document.form3.username);" maxlength="40" name="username" required>
	<span id="confirmltr" ></span><br>
	
	<label><b>Gender</b></br></label></br>
	
     <select id="state" name="gender" >
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select></br> 
    </br>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" onkeyup="emailval(document.form3.email);" maxlength="45" name="email" required>
  <span id="emailerror" ></span><br>

	

	

    <label><b>Password</b></label>
    <input type="password" id="pass1" placeholder="Enter Password" maxlength="45" name="psw" required>

	
	
    <label><b>Repeat Password</b></label>
    <input type="password" id="pass2" placeholder="Repeat Password" onkeyup="checkPass(); return false;" name="psw-repeat" required>
	    <span id="confirmMessage" ></span><br><br>
	
	<label><b>Date of birth</b></label></br><br>
    <input type="date" placeholder="Enter date of birth" name="DOB" required>
	<br><br>
	<label><b>Phone Number</b></label><br><br>
    <input type="number" placeholder="Enter Your Phone Number" name="no." required><br><br>
   

    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
} 
function emailval(inputtxt)  
  {  
  
   var emailltr =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    var message = document.getElementById('emailerror');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(emailltr))  
     {  
      message.innerHTML = " "
     }  
   else  
     {  
   message.innerHTML = "Please enter valid Email!" 
           message.style.color = errorColor;
    
     }  
  }
  function allLetterands(inputtxt)  
  {  
   var ltrs = /^[A-Za-z\s]+$/;  
    var message = document.getElementById('con');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(ltrs))  
     {  
      message.innerHTML = " "
     }  
   else  
     {  
   message.innerHTML = "Please enter letters only!" 
           message.style.color = errorColor;
    
     }  
  }  
function allLetter(inputtxt)  
  {  
   var letters = /^[A-Za-z]+$/;  
    var message = document.getElementById('confirmltr');
	var errorColor = "#ff6666";
   if(inputtxt.value.match(letters))  
     {  
      message.innerHTML = ""
     }  
   else  
     {  
   message.innerHTML = "Please enter letters only(no spaces are allowed)!" 
          message.style.color = errorColor;
    
     }  
  }   

</script>

</body>
</html>