<?php

    include '../main/main2.php';


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
$password= test_input($_POST['passwd']);
$confirm=test_input($_POST['Repeat']);
$gender=test_input($_POST['state']);
$birthdate=test_input($_POST['date']);
$phone=test_input($_POST['Phone']);
$bio=test_input($_POST['bio']);
$city=test_input($_POST['city']);
$street=test_input($_POST['street']);
$hash=crypt($password, 'pp..4578hdsgjds../jffh%%$');
echo"1";

        //check variables are not empty 
        
if(empty($name)){
    echo("name is required !");
}
if(empty($email)){
    echo("email is required !");
}
if(empty($password)){
    echo("password is required !");
}
if(empty($confirm)){
    echo("confirm password is required !");
}

    //check confirm password
  function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

//set error handler
set_error_handler("customError",E_USER_WARNING);
  
if ($password!= $confirm){

  trigger_error("passwords are not the same ",E_USER_WARNING);
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
    $sql = "INSERT INTO user (username, Fname, email, password, picture, DOB, city, street, gender, bio) VALUES ('$username','$name','$email','$hash','$newname','$birthdate','$city','$street','$gender','$bio')";


    if (mysqli_query($conn, $sql)) {
    $sql1="INSERT INTO uphone VALUES ( (SELECT UID FROM user WHERE username='$username'), '$phone' ) ";
    if (mysqli_query($conn, $sql1)) {
 header('location:loginscreen.php');    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}

?>