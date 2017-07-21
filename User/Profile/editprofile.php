<?php

    include '../main/main2.php';
include_once('../userfunction/session.php');
 $userID=$user_id;

    if (isset($_POST['username']) && isset($_POST['email']) ){

        echo"2";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$name= test_input($_POST['name']);  
$username=test_input($_POST['username']);  
$email= test_input($_POST['email']);
$bio=test_input($_POST['bio']);

echo"1";

        //check variables are not empty 
        
if(empty($name)){
    echo("name is required !");
}
if(empty($email)){
    echo("email is required !");
}





    //check the email
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  echo("$email is not a valid email address");
}
//<------------------>
    
$targetFolder= '../uploaded/';
       
            $targetFile= $targetFolder . basename($_FILES["photo"]["name"]); //file upload the name of the fileupload in html,name is the name of the img.
            $targetType= pathinfo($targetFile, PATHINFO_EXTENSION);  // to indicate the info. 
            $check=1;
        
            $check=getimagesize($_FILES["photo"]["tmp_name"]);

            if($check!==false){
                $check=1;
            }
            else{
                $check=0;
            }
            if($_FILES["photo"]["size"]>7000000){
                $check_OK=0;
                echo"file is too big";
            }
            if($targetType!="jpg" && $targetType!="JPG" && $targetType!="JPEG" && $targetType!="png"){
                $check=0;
            }
            if($check=0){
                echo"error";
            }
            else{
                
        
      $newname=$targetFolder.date('Y-m-d-h-i-sa').'.'.$targetType;
                move_uploaded_file($_FILES['photo']['tmp_name'], $newname);
                
                }
   




//}
    $sql1 = "UPDATE user  SET username='$username' ,Fname='$name' ,email='$email', picture='$newname', bio='$bio' WHERE UID =$userID";


    if (mysqli_query($conn, $sql1)) {
 header('location:Profile.php');    } 
    else {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }

}

?>