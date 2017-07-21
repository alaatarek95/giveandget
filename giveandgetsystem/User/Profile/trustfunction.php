<?php
include_once('../userfunction/session.php');
include('../main/main2.php');
$id=$user_id;
$sql="SELECT COUNT(value) FROM rate WHERE rateduser='$id' AND value BETWEEN 1 AND 3";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
		While($row = $result->fetch_assoc()) {
			$untrust=$row['COUNT(value)'];
			
		
		}
}

$sql="SELECT COUNT(value) FROM rate WHERE rateduser='$id' AND value BETWEEN 3 AND 5";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
	While($row = $result->fetch_assoc()) {
		$trust=$row['COUNT(value)'];
		
	}
}



?>