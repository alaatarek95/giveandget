<?php
include_once('../main/main2.php');
include_once('../userfunction/session.php');
$id=$user_id;
//$id=2;
$sql="SELECT * FROM user WHERE UID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
	echo mysqli_error($conn);
    
		if($row = $result->fetch_assoc()) {
			$username=$row['username'];
			$Fname=$row['Fname'];
			$email=$row['email'];
			$picture=$row['picture'];
			$DOB=$row['DOB'];
			$rate=$row['rate'];
			$city=$row['city'];
			$street=$row['street'];
			$gender=$row['gender'];
			$bio=$row['bio'];

		}
	}


?>