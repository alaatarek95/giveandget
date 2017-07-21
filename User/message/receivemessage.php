<?php
include_once '../userfunction/session.php';
include '../main/main2.php';

$userID=$user_id;
//$userID=2;
$sql="SELECT * FROM message LEFT JOIN user ON message.toWhom= user.UID  WHERE toWhom= '$userID' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $byWhom=$row['bywhom'];
      $sql1="SELECT * FROM user WHERE UID='$byWhom'";
      $result1 = mysqli_query($conn, $sql1);

      if (mysqli_num_rows($result1)>0){
        $row1=mysqli_fetch_assoc($result1);
    
      $id=$row['code'];
    	$img=$row1['picture'];
    	$uname=$row1['Fname'];
    	$content=$row['content'];
    	$accept=0;
    	echo'

      <div class="box">
 
    <img src="'.$img.'"  alt="'.$uname.'" width="70" height="70"> 

      <a class="profilename" href="../Profile/new/Profile.php">'.$uname.' </a>
  
   
  <div >   
      <form action="deletemsg.php" method="get">
      <input type="hidden" name="message" value="'.$id.'">
        <button type="submit" name="delete" id="myBtn2" class="delete">Delete</button>
        </form>
        </div>
        <div>
      <a href="showmessage.php?message='.$id.'">  
        <button style="text-decoration: none;" id="myBtn" class="show">Show Message</button>
    </a>
   </div>
   
 </div>
  
  <br> <br>


       ';
      }
      else {
        echo "no reslut";
      }
  }
}
else{
	echo "0 result";

}
mysqli_close($conn);
?>