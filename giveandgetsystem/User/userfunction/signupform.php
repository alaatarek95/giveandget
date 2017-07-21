<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
  <body onload='document.form2.name;document.form2.username;document.form2.email.focus()'>
<br>

<form class="form-horizontal" name="form2" method="post" action="signup2.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend> <center> Create new account</center></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname"> Name</label>  
  <div class="col-md-5">
  <input id="fname" name="name" type="text" onkeyup="allLetterands(document.form2.name);" placeholder=" Name" class="form-control input-md" required="">
         <span id="con" ></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">username</label>  
  <div class="col-md-5">
  <input id="lname" name="username" type="text" onkeyup="allLetter(document.form2.username);"  placeholder="username" class="form-control input-md" required="">
       <span id="confirmltr" ></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" onkeyup="emailval(document.form2.email);"   placeholder="Email" class="form-control input-md" required="">
     <span id="emailerror" ></span>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwd">Password</label>  
  <div class="col-md-5">
  <input id="passwd" name="passwd" type="password" placeholder="Password" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Repeat Password">Repeat Password</label>  
  <div class="col-md-5">
  <input id="passwd2" name="Repeat"  onkeyup="checkPass(); return false;" type="password" placeholder="Repeat Password" class="form-control input-md" required="">
   <span id="confirmMessage" ></span>
	

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone Number">Phone Number</label>  
  <div class="col-md-4">
  <input id="PhoneNumber" name="Phone" type="number" placeholder="Phone Number" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="state">Gender</label>
  <div class="col-md-4">
    <select id="state" name="state" class="form-control">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" for="Birthdate" style="font-family:Arial;">Birthdate </label> 
  <div class="col-md-4">
  <input id="Year" name="date" type="date" placeholder="birth date" class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="goventment">Goventment</label>
  <div class="col-md-4">
    <select id="state" name="city" class="form-control">
      <option value="Cairo">Cairo</option>
      <option value="Giza">Giza</option>
      <option value="Alexandria">Alexandria</option>
      <option value="Daqhlya">Daqhlya</option>
      <option value="Fayom">Fayom</option>
      <option value="Bany-Swef">Bany-Swef</option>
      <option value="Port-saied">Port-saied</option>
      <option value="Ismaelia">Ismaelia</option>
      <option value="Monofya">Monofya</option>
      <option value="Sharqya">Sharqya</option>
      <option value="Gharbya">Gharbya</option>
      <option value="Kafr el-Shikh">Kafr el-Shikh</option>
      <option value="Minia">Minia</option>
      <option value="Aswan">Aswan</option>
    </select>
  </div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="distric" style="font-family:Arial;">district</label> 
  <div class="col-md-4">
  <input id="Year" name="street" type="text" placeholder="distric" class="form-control input-md" required="">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" for="photo" style="font-family:Arial;">photo</label> 
  <div class="col-md-4">
  <input id="Year" name="photo" type="file" class="form-control input-md" required="">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" for="bio" style="font-family:Arial;">bio</label> 
  <div class="col-md-4">
  <input id="Year" name="bio" type="text" placeholder="bio" class="form-control input-md" required="">
</div>
</div>



<div class="form-group">
<label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="submit">
      <input style="background-color:#ffb84d;" class="btn btn-success" type="submit" name="submit" id="submit" value="Create New Account">
    </label>
  </div>
</div>

</fieldset>
</form>
<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var passwd = document.getElementById('passwd');
    var passwd2 = document.getElementById('passwd2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(passwd.value == passwd2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        passwd2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        passwd2.style.backgroundColor = badColor;
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