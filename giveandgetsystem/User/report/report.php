<?php
include_once('../userfunction/session.php');

require('../main/main2.php');

     if (isset($_POST['submitr']) )
{
    $userID=$user_id;
	$reasons= $_POST['reasons'];
	$datestamp=date('Y-m-d');
	
	$result = "INSERT INTO reports VALUES ('','$reasons','$datestamp','$userID','1')";
	
if (mysqli_query($conn, $result)) {
	header("location:../home/homepage.php")	;	

}
else{
	echo mysqli_error($conn);
}


	
} 
?>