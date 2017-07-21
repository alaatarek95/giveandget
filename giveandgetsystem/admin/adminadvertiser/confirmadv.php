<?php

include 'main2.php';

$id = $_GET['id'];
$sql = "UPDATE  advertisement SET confirmation = '1'  WHERE ID = $id";

if (mysqli_query($conn, $sql)) {
    echo "Done";
} else {
    echo "Error in confirmaton: " . mysqli_error($conn);
}
header('Location: advforadmin.php');

?>


UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;