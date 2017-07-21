<?php
include_once('../userfunction/session.php');
include_once '../main/main2.php';
echo "b";
$id=$user_id;
$update="SELECT Avg(value) FROM rate WHERE ratedUser=$id";
echo 9 ; 
$result = mysqli_query($conn, $update);
echo "a";
if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$userRate=$row['Avg(value)'];
		$sql1="UPDATE user 
				SET rate='$userRate'
				WHERE UID=$id";
echo"c";
	if (mysqli_query($conn, $sql1)) {
		echo" done";
	} 
	else {
		echo "Error updating record: " . mysqli_error($conn);
		}
}
?>