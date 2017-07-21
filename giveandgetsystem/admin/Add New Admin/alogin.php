<?php

include 'main2.php';
if(!isset($_SESSION)){
session_start();
if(isset($SESSION['admin_id'])){
    header('Location:../homeadmin/Admin home-GP.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $email = $_POST['username'];
    $password = $_POST['password'];
    $hash=crypt($password, 'pp..4578hdsgjds../jffh%%$');

    
    $sql = "SELECT AID,email, password  FROM admin where email = '$email' and password ='$hash' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id =  $row['AID'];
        
        $_SESSION['admin_id'] = $id;
        header('Location:../homeadmin/Admin home-GP.php');        
    }
    else{
        echo 'incorrect email or password';
    }
}
}

?>