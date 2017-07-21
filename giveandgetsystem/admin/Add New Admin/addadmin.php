<?php

    include 'main2.php';


    if (isset($_POST['username']) && isset($_POST['email']) ){

        echo"2";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fname= test_input($_POST['fname']);  
$username=test_input($_POST['username']);  
$email= test_input($_POST['email']);
$password= test_input($_POST['psw']);
$gender=test_input($_POST['gender']);
$confirm=test_input($_POST['psw-repeat']);
$DOB=test_input($_POST['DOB']);
$phone=test_input($_POST['no.']);
$hash=crypt($password, 'pp..4578hdsgjds../jffh%%$');
echo"1";

        //check variables are not empty 
        
if(empty($fname)){
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
    
if ($password!= $confirm){
    die("passwords are not the same");
}
    //check the email
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

  echo("$email is not a valid email address");
}
//<------------------>
    





//}
    $sql = "INSERT INTO admin (AID, username, Fname, email, password, DOB, gender) VALUES ('','$username','$fname','$email','$hash','$DOB','$gender')";


    if (mysqli_query($conn, $sql)) {
    $sql1="INSERT INTO aphone VALUES ( (SELECT AID FROM admin WHERE username='$username'), '$phone' ) ";
    if (mysqli_query($conn, $sql1)) {
      
			 header('location:aloginscreen.php'); 
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}

?>