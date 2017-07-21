<?php

include('../main/main2.php');
$msgId=$_GET['message'];

$sql="SELECT * FROM message RIGHT JOIN user ON message.bywhom = user.UID WHERE message.code=$msgId
" ;
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

    	$dateSend=$row['dateSend'];
    	$content=$row['content'];
    	$bywhom=$row['bywhom'];
    	$wantedItem=$row['wantedItem'];
    	$category=$row['category'];
    	$picture="../".$row['picture'];
    	$fname=$row['Fname'];
    	$userid=$row['UID'];
        $sql5="SELECT * FROM uphone WHERE UID=$userid";
        $result5 = mysqli_query($conn, $sql5);
echo mysqli_error($conn);

        if (mysqli_num_rows($result5) > 0) {
            while($row5 = mysqli_fetch_assoc($result5)) {
                $phone=$row5['no.'];

            }
        }

    	$sql4= "SELECT * FROM $category WHERE ID=$wantedItem";
    	$result4 = mysqli_query($conn, $sql4);
echo mysqli_error($conn);
		if (mysqli_num_rows($result4) > 0) {
		    while($row4 = mysqli_fetch_assoc($result4)) {
		    	$name=$row4['name'];
		    	$photo=$row4['photo'];
		    }
		 }
		 else{
            echo mysqli_error($conn). "no selected item";
         }


		 
    	
    }
}


?>