<?php

include 'main2.php';

$id = $_GET['id'];
$sql = "DELETE FROM user WHERE UID = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header('Location: usersforadmin.php');

?>