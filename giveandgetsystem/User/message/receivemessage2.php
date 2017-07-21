<?php
include_once'../session.php';
include 'main2.php';

$userID=$user_id;
//$id=2;
$sql="SELECT * FROM message LEFT JOIN user ON message.byWhom= user.UID  WHERE byWhom= '$userID' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	$img=$row['photo'];
    	$uname=$row['Fname'];
    	$content=$row['content'];
    	$accept=0;

    	echo'

    	
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
        <span class="close">&times;</span>

    <div class="modal-header">
      <h2>Give & Get</h2>
    </div>
	
    <div class="modal-body">
	
 <p> <font color="red">*this message will send to one who you want to exchange items with*</font></p>    
<p> "Ok, great!. Please contact with me on this phone number..." </p>
	 
	 
	<form action="message.php" method="post" >

<span class="closer close">&times;</span> 
	<div>
 <label for="phone"> Phone Number:  </label>
  <input type="text" placeholder="Enter your phone number"  id="phone" name="phone"required > <br>
 </div>
	 <input type="hidden" name="user" value="">
<input type="hidden" name="sender" value="">
<input type="hidden" name="" value="#">
	<button class="sendBtn">Send</button>
	</form> 
	 
    </div>
    
  </div>

</div>

';

?>