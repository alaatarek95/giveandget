<?php
$receiver=$_POST['user'];
$itemid=$_POST['id'];
$senderid=$_POST['sender'];
$category=$_POST['category'];
/*$sql1="SELECT photo FROM $category WHERE ID='$itemid'";
$result=mysqli_query($conn,$sql1);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result)
    $photo=$row['photo'];
}
*/


$content="Hello! I want to exchange this item with one of this...";



$date= date('Y-m-d h:i');

include '../main/main2.php';

$sql= "INSERT INTO message(dateSend, toWhom, content, byWhom, wantedItem, category) VALUES ( '$date', '$receiver', '$content', '$senderid' ,'$itemid', '$category')";

if (mysqli_query($conn, $sql)) {
header("location:../home/homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





?>
