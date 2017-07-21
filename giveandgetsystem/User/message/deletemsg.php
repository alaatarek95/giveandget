<?php
include('../main/main2.php');

$id=$_GET['message'];
if(isset($_GET['delete'])){

	$sql="DELETE FROM message WHERE code=$id";
	if (mysqli_query($conn, $sql)) {
   header("location:receivedmessage.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}

?>