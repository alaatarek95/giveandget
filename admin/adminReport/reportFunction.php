<?php


function countResult($counter, $table){
	include('main2.php');
$sql="SELECT COUNT($counter) FROM $table";
$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		    	$number=$row['COUNT(name)'];
		    	echo $number;
		    }
		 }

}
function countResultUser(){
	include('main2.php');
$sql="SELECT COUNT(Fname) FROM user";
$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    while($row = mysqli_fetch_assoc($result)) {
		    	$number=$row['COUNT(Fname)'];
		    	echo $number;
		    }
		 }

}
?>