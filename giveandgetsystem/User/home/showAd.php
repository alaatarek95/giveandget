<?php
include('../main/main2.php');

$sql= "SELECT * FROM advertisement WHERE confirmation=1 ";

$result= $conn->query($sql);

	if ($result->num_rows > 0 ) {
		
    
		while($row = $result->fetch_assoc() ) {

		     $site=$row['companyWebsite'];
			 $img=$row['photo'];
			 $descrption=$row['content'];
			 
			 echo '<div class="ad1">
	<a href="'.$site.'">
	  <img src="../../advertisment/'.$img.'" alt="'.$descrption.'" width="100%" height="150">
	</a>
	</div>';
		}
	}
	
	else {
		echo mysqli_error($conn);
	}
?>