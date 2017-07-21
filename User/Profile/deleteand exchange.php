<?php
include('../main/main2.php');

$id=$_GET['id'];
$categry=$_GET['cat'];
$type=$_GET['type'];
if($type=="delete"){

$sql="DELETE FROM $categry WHERE ID=$id";
if (mysqli_query($conn, $sql)) {
    header('location:Profile.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}
else{
$sql="UPDATE $category SET check_availability= 1 WHERE ID=$id ";
if (mysqli_query($conn, $sql)) {
    header('location:Profile.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}

?>