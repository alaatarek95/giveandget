<?php
include('../main/main2.php');

$sql="SELECT * FROM sksubcategory";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) { 
			$name=$row['name'];
			$photo='../../admin/AdminAddCategory/'.$row['photo'];
			$sub=$row['ID'];
			echo' 
			<a href="Books categories.php?category=skills&sub='.$sub.'">
    <div class="gallery">
    

      
 <img src="'.$photo.'" alt="'.$name.'" width="300" height="200"/> 
      
             
      <div class="desc">'.$name.'
      </div>
      
    </div>
    </a>
   ';
}
}
else{
	echo"error";
	}


/**
$sql="SELECT * FROM sersupcategroy";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) {}
	}

$sql="SELECT * FROM sksubcategory";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    
		while($row = $result->fetch_assoc()) {}
	}
	**/

?>