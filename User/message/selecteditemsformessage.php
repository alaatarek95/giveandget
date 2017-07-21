<?php
include('showsentmsg.php');
$sql1="SELECT * FROM products WHERE UID= $userid ";

    	$result1 = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result1) > 0) {
		    while($row1 = mysqli_fetch_assoc($result1)) {
		    	$Pname=$row1['name'];
		    	$Pid=$row1['ID'];
		    	$Pphoto=$row1['photo'];
		    	
		    	echo '<div class="group">
                      <input type="radio" name="selectitem" value="'.$Pid.'" id="myCheck">
					     <input type="hidden" name="category" value="products">

               <div class="gallery">
		
			      <img src="'.$Pphoto.'" alt="'.$Pname.'" width="300" height="200"/> 
             
			      <div class="desc">'.$Pname.' </div>
              </div>
	 </div>	';
		    }
		}
		else {
			echo"no products";
		}

		$sql2="SELECT * FROM skills WHERE UID= $userid ";
    	$result2 = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result2) > 0) {
		    while($row2 = mysqli_fetch_assoc($result2)) {
		    	$skillname=$row2['name'];
		    	$skilldes=$row2['description'];
		    	$skillId=$row2['ID'];
		    	$category="skills";
		    	echo '<div class="group">
                      <input type="radio" name="selectitem" value="'.$skillId.'" id="myCheck">

					     <input type="hidden" name="category" value="skills">
					  
               <div class="gallery">
		
			      <p>'.$skilldes.'
			      </p>
             
			      <div class="desc">'.$skillname.' </div>
              </div>
	 </div>	';
		    }
		}
		else {
			echo"no skills";
		}

		$sql3="SELECT * FROM services WHERE UID= $userid ";
    	$result3 = mysqli_query($conn, $sql3);

		if (mysqli_num_rows($result3) > 0) {
		    while($row3 = mysqli_fetch_assoc($result3)) {
		    	$sname=$row3['name'];
		    	$serdes=$row3['description'];
		    	$serId=$row3['ID'];
		    	$category="services";
		    	echo '<div class="group">
                      <input type="radio" name="selectitem" value="'.$serId.'" id="myCheck">
					     <input type="hidden" name="category" value="services">
					  
               <div class="gallery">
		
			      <p>'.$serdes.'
			      </p>
             
			      <div class="desc">'.$sname.' </div>
              </div>
	 </div>	';
		    }
		}
		else {
			echo"no services";
		}



?>