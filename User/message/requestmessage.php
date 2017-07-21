<?php
include_once('../userfunction/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title> Request Message page </title>
    <link rel="stylesheet" type="text/css" href="requestmessagestyle.css">
	
	
</head>

<body>



<!-- The Modal -->

    <div class="modal-body">
	
 <p> <font color="red">*this message will send to one who you want to exchange items with*</font></p>    
<p> "Hello! I want to exchange this item with one of this..." </p>
	 <br>
	 
	
	
	
	<form action="message.php" method="post">
	
           <?php
include('itemsrequestmsg.php');
$userID=$user_id;
           ?>
	<br>
	 
<input type ="hidden" value="<?php echo $_GET['id'];?>" name="id">
<input type ="hidden" value="<?php echo $_GET['category'];?>" name="category">
<input type="hidden" value="<?php echo $_GET['user'];?>" name="user">
<input type="hidden" value="<?php echo $userID ; ?>" name="sender">  <!-- session-->
      <button type="send" class="sendBtn">Send</button>
    </form>
	
	
		
	 
 
	 
	<!--<form action="#" method="get" >

<span class="closer close">&times;</span> 
	 
	<button type="send" class="sendBtn">Send</button>
	</form>  -->
	 
    </div>
    
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!-- checkbox -->
<script>
function myFunction() {
    var x = document.getElementById("myCheck");
    x.checked = true;
}
</script>

</body>
</html>