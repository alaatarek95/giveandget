<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
<style>
img 
{
     border-radius: 500px;
	 border: 2px solid #ccc;
}
</style>

</head>
<body onload='document.forme.name;document.forme.username;document.forme.email.focus()'>

<div class="container">

    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="paris.jpg" class="avatar img-circle" alt="avatar" width="150" height="150">
          <h6>Upload a different photo...</h6>
		  
		  
		  <form class="form-horizontal" name="forme" action="editprofile.php" method="POST" role="form" enctype="multipart/form-data">
          <input type="file" class="form-control" name="photo">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        
        
          <div class="form-group">
            <label class="col-lg-3 control-label">Fullname:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" placeholder="Enter new FullName" onkeyup="allLetterands(document.forme.name);" maxlength="40" type="text" >
              <span id="con" ></span>

		   </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" name="username" placeholder="Enter new username" onkeyup="allLetter(document.forme.username);" maxlength="40"  type="text" >
			  <span id="confirmltr" ></span>
            </div>
          </div>
		  
		  
          <div class="form-group">
            <label class="col-lg-3 control-label">Bio:</label>
            <div class="col-lg-8">
              <input class="form-control" name="bio" placeholder="Enter new Bio" maxlength="150" type="text" value="">
            </div>
          </div>
		  
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" placeholder="Enter new Email" onkeyup="emailval(document.forme.email);" type="text" maxlength="45" >
			   <span id="emailerror" ></span>
            </div>
          </div>
        
		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
             <a href="Profile.html"> <input style="background-color:#ffb84d;" type="submit" class="btn btn-primary" value="Save Changes"></a>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
		  
        </form>
      </div>
  </div>
</div>
<hr>
<script>
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

</script>
</body>
</html>