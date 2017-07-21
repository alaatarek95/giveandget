<?php

include 'main2.php';



$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM skills WHERE ID = $id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header('Location: skilladmin.php');


?>