<?php
 include 'main2.php';

    if (isset($_POST['categoryname']) && isset($_POST['subcategoryname']) ){
    	$category= $_POST['categoryname'];
    	$subcategory= $_POST['subcategoryname'];
    	$targetFolder= 'uploaded/';
       
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
   
    	$sql="INSERT INTO $category VALUES ('','$subcategory', '$newname', '1')";
    	if (mysqli_query($conn, $sql)) {
    		echo "done";
    		header("location:addcategory.html");

 		} 
    	else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    	}

    }

?>