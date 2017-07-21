<?php
include_once('../userfunction/session.php');
if(isset($_POST['accept'])){
$towhome=$_POST['towhom'];
$bywhome=$user_id;
//$bywhome=2;
$wanteditem=$_POST['selectitem'];
$content=$_POST['content'];
$category=$_POST['category'];
$date= date('Y-m-d h-i-sa');

include '../main/main2.php';

$sql= "INSERT INTO message(dateSend, toWhom, content, byWhom, wantedItem, category) VALUES ( '$date', '$towhome', '$content', '$bywhome' ,'$wanteditem', '$category')";

if (mysqli_query($conn, $sql)) {
header("location:../home/homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
mysqli_close($conn);
?>