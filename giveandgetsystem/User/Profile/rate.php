<?php
include_once('../userfunction/session.php');
include '../main/main2.php';
$rate=$_GET['star'];
$time= date('Y-m-d h-i-sa');
$bywhom=$user_id;
//$bywhom=2;
$ratedUser=2;
if (isset($_GET['submit'])){
	echo 1;

$query="SELECT towhom , bywhom FROM message WHERE towhom= $bywhom and bywhom=$ratedUser ";
$result = mysqli_query($conn, $query);


if ($result->num_rows > 0) {
    echo 2;

	$sql="INSERT INTO rate VALUES ('','$ratedUser', $bywhom, '$rate' , '$time') ";
	if (mysqli_query($conn, $sql)) {
		echo 4;
		header("location:Profile.php");
		include 'updateUserRate.php';
	}
	 else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
}
elseif ($result->num_rows==0){
echo 5 ;
echo "Error updating record: " . mysqli_error($conn);
	$query="SELECT towhom , bywhom FROM message WHERE bywhom= $bywhom and towhom=$ratedUser ";
	if ($result->num_rows > 0) {
		echo "Error updating record: " . mysqli_error($conn);
    echo 6;

		$sql="INSERT INTO rate VALUES ('','$ratedUser', $bywhom, '$rate' , '$time') ";
		
		if (mysqli_query($conn, $sql)) {
			header("location: Profile.php");
			include 'updateUserRate.php';
		}
		 else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	}


}
else{
	echo "you can't rate this user as you havenot dealed with him/her yet!";
}
}
?>