<?php
include_once('../userfunction/session.php');
include('../main/main2.php');
$id=$user_id;
//$id=2;
$sql="SELECT COUNT(name) FROM products WHERE UID='$id' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
		While($row = $result->fetch_assoc()) {
			$products=$row['COUNT(name)'];
			
		}
	}
$sql="SELECT COUNT(name) FROM skills WHERE UID='$id' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
		While($row = $result->fetch_assoc()) {
			$skills=$row['COUNT(name)'];
			
		}
	}

$sql="SELECT COUNT(name) FROM services WHERE UID='$id' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
		While($row = $result->fetch_assoc()) {
			$services=$row['COUNT(name)'];
			
		}
	}
	$posts= $products + $services + $skills;
?>