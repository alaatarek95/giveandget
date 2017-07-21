<?php

    include 'main2.php';

$targetFolder= 'uploaded/';
       
            $targetFile= $targetFolder . basename($_FILES["img1"]["name"]); //file upload the name of the fileupload in html,name is the name of the img.
            $targetType= pathinfo($targetFile, PATHINFO_EXTENSION);  // to indicate the info. 
            $check=1;
        
            $check=getimagesize($_FILES["img1"]["tmp_name"]);

            if($check!==false){
                $check=1;
            }
            else{
                $check=0;
            }
            if($_FILES["img1"]["size"]>7000000){
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
                
				
			$newname=$targetFolder.date('Y-m-d h-i-sa').'.'.$targetType;
                move_uploaded_file($_FILES['img1']['tmp_name'], $newname);
                
                }
    if (isset($_POST['username']) && isset($_POST['email']) ){

     
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 
$username=test_input($_POST['username']);  
$name=test_input($_POST['fname']);  
$email= test_input($_POST['email']);
$password= test_input($_POST['psw']);
$gender=test_input($_POST['gender']);
$confirm=test_input($_POST['psw-repeat']);
$DOB=test_input($_POST['DOB']);
$phone=test_input($_POST['no']);
$title=test_input($_POST['title']);
$month=test_input($_POST['month']);
$pubdate=test_input($_POST['pubdate']);
$content=test_input($_POST['content']);
$cwebsite=test_input($_POST['cwebsite']);
$pay=test_input($_POST['pay']);
	$datestamp=date('Y-m-d h-i-sa');
$hash=crypt($password, 'pp..4578hdsgjds../jffh%%$');


        //check variables are not empty 
 
   if ($month == 1){
    $clicks = 600;
}else if($month == 2){
    $clicks =1250;
}else if ($month == 3){
    $clicks =1650;
}

$clicksprice = $clicks*4;
$monthprice = $month*10000;

$price = $clicksprice + $monthprice;

   

if(empty($username)){
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
    $sql = "INSERT INTO advertiser (AdID,username, name, email, password, DOB, gender, AID) VALUES ('','$username','$name','$email','$hash','$DOB','$gender','1')";
 

    if (mysqli_query($conn, $sql)) {
    $sql1="INSERT INTO advphone VALUES ( (SELECT AdID FROM advertiser WHERE username='$username'), '$phone' ) ";
	
	
    if (mysqli_query($conn, $sql1)){
   $sql2="INSERT INTO advertisement VALUES ( '','$title','$newname','$month','$pubdate','$content','$price','$cwebsite',(SELECT AdID FROM advertiser WHERE username='$username'),'1','','$pay','$datestamp' ) ";
    
	 
	
	  if (mysqli_query($conn, $sql2)) {
		  
	}
	 else {
        echo "Error2: " . $sql2 . "<br>" . mysqli_error($conn);
    }
	
	}
    else {
        echo "Error1: " . $sql1 . "<br>" . mysqli_error($conn);
    }
	
	}
else {
        echo "Error0: " . $sql . "<br>" . mysqli_error($conn);

}
}

?>