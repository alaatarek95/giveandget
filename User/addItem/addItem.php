
<?php
include_once('../userfunction/session.php');

require('../main/main2.php');
     $targetFolder= '../uploaded/';
       
            $targetFile= $targetFolder . basename($_FILES["img"]["name"]); //file upload the name of the fileupload in html,name is the name of the img.
            $targetType= pathinfo($targetFile, PATHINFO_EXTENSION);  // to indicate the info. 
            $check=1;
        
            $check=getimagesize($_FILES["img"]["tmp_name"]);

            if($check!==false){
                $check=1;
            }
            else{
                $check=0;
            }
            if($_FILES["img"]["size"]>7000000){
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
                move_uploaded_file($_FILES['img']['tmp_name'], $newname);
                 echo 2 ;
                }
	 
	$itemname= test($_POST['itemname']);
	$subcategory= test($_POST['subcategory']);
	$description=test($_POST['description']);
	$status=test($_POST['status']);
	$usedperiod=test($_POST['usedperiod']);
	$datestamp=date('Y-m-d h-i-sa');
    $userId=$user_id;
    //$userId=2;
	
	if(!empty($itemname) && !empty($description) && !empty($status) && !empty($usedperiod) )
	{ 
    	
		$query = $conn->query("INSERT INTO products VALUES ('','$status','$usedperiod','0','$itemname','$description','$newname','$userId','1','$datestamp','','$subcategory')");
        echo mysqli_error($conn);;
	

header("location:../home/homepage.php")	;	
		
		
	}
	
 else echo 'All fields are required..';

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>


