<?php

include '../main/main2.php';

if(!isset($_SESSION)){
session_start();
if(isset($SESSION['user_id'])){
    header('Location:../home/homepage.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $email = $_POST['username'];
    $password = $_POST['password'];
    

    if ($email=="BBNN6f_@admin.com" && $password=="giveandget"){
        header('location:../../admin/Add New Admin/aloginscreen.php');
    }
    $hash=crypt($password, 'pp..4578hdsgjds../jffh%%$');
    $sql = "SELECT UID,email, password  FROM user where email = '$email' and password ='$hash' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id =  $row['UID'];
        
        $_SESSION['user_id'] = $id;
        header('Location:../home/homepage.php');        
    }
    else{
        echo 'incorrect email or password';
    }
}
}

?>