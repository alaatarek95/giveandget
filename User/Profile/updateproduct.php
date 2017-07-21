<?php

include '../main/main2.php';
include_once('../userfunction/session.php');
 $userID=$user_id;

 $sql = "UPDATE  products SET check_availability ='1' WHERE ID = $id";

if (mysqli_query($conn, $sql)) {
     header('location:Profile.php'); 
} else {
    echo "Error in confirmaton: " . mysqli_error($conn);
}
	
	


?>