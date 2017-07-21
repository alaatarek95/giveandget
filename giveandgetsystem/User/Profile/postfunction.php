<?php
include_once('../userfunction/session.php');
include('../main/main2.php');
$id=$user_id;
//$id=2;
$sql="SELECT * FROM user RIGHT JOIN products ON user.UID= products.UID WHERE user.UID=$id";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$PID=$row['ID'];
			$productName=$row['name'];
			$photo=$row['photo'];
			$status=$row['status'];
			$UsedPeriod=$row['UsedPeriod'];
			$check_availability=$row['check_availability'];	
			$Description=$row['Description'];
			$posted_date=$row['posted_date'];
			$subcategory=$row['subcategory'];
			if($status==1){
				$status="used";
			}
			elseif($status==0){

				$status="new";
			}
			if($check_availability==1){
				$check_availability="exchanged";
			}
			elseif($check_availability==0){
				$check_availability="avilable";
			}

			echo '
			<div style="display:block"class="col-xs-6 col-md-9>
			<div class="col-xs-2 col-md-2">
			
					<a href="'.$photo.'" class="thumbnail"  title="'.$productName.'">
					
						<img src="'.$photo.'" alt="'.$Description.'">
					</a>
				</div>
				
			<p><b>name:</b> '.$productName.'<br>
				<b>status:</b>'.$status.'<br>
					<b>used period:</b> '.$UsedPeriod.'<br>
					<b>availability:</b> '.$check_availability.'<br>
					<b>description:</b> '.$Description.'<br>
					<b>posted date:</b> '.$posted_date.'
					 </p>
					 <a href="deleteand exchange.php?id='.$PID.'&cat=products&type=delete"> 
			 <button style="background-color: #919494; color: white; border-radius:4px;" name="delete" id="myBtn2" class="delete">Delete</button>
			 </a>
			 <a href="deleteand exchange.php?id='.$PID.'&cat=products&type=update"> 
			  <button  style="background-color: #ff9900; color: white; text-decoration:none; border-radius:4px;" id="myBtn" class="update">mark as exchanged</button>
              </a>
             	</div>
              ';
		}
	}
	else{
			echo mysqli_error($conn);

	}
$sql="SELECT * FROM user RIGHT JOIN skills ON user.UID= skills.UID WHERE user.UID=$id";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$SID=$row['ID'];
			$level=$row['level'];
			$certificate=$row['certificate'];
			$name=$row['name'];
			$description=$row['description'];
			$timeAvailable=$row['timeAvailable'];	
			$posted_date=$row['posted_date'];
			$subcategory=$row['subcategory'];
			$photo="no";

			echo '
			<div style="display:block"class="col-xs-6 col-md-9>
				<div class="col-xs-6 col-md-3">
					<a href="'.$photo.'" class="thumbnail"  title="'.$name.'">
						<img src="'.$photo.'" alt="'.$description.'">
					</a>
				</div>
				<p><b>name:</b> '.$name.'<br>
				<b>level:</b>'.$level.'<br>
					<b>time Available:</b> '.$timeAvailable.'<br>
					<b>description:</b> '.$description.'<br>
					<b>posted date:</b> '.$posted_date.'
					 </p>
					 <a href="deleteand exchange.php?id='.$SID.'&cat=skills&type=delete"> 
			 <button style="background-color: #919494; color: white; border-radius:4px;" name="delete" id="myBtn2" class="delete">Delete</button>
			 </a>
			
              </div>';
		}
	}
	else{
			echo mysqli_error($conn);

	}
$sql="SELECT * FROM user RIGHT JOIN services ON user.UID= services.UID WHERE user.UID=$id";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)){
			$SeID=$row['ID'];
			$ExperienceYears=$row['ExperienceYears'];
			$Time_available=$row['Time_available'];
			$name=$row['name'];
			$description=$row['description'];
			$posted_date=$row['posted_date'];
			$subcategory=$row['subcategory'];
			$photo="no";

			echo '
				<div style="display:block"class="col-xs-6 col-md-9>
					<div class="col-xs-6 col-md-3">
					<a href="'.$photo.'" class="thumbnail"  title="'.$name.'">
						<img src="'.$photo.'" alt="'.$Description.'">
					</a>
				</div>
				<p><b>name:</b> '.$name.'<br>
				<b>Experience Years:</b>'.$ExperienceYears.'<br>
					<b>used Time available:</b> '.$Time_available.'<br>
					<b>description:</b> '.$description.'<br>
					<b>posted date:</b> '.$posted_date.'
					 </p>
					 <a href="deleteand exchange.php?id='.$SeID.'&cat=services&type=delete"> 
			 <button style="background-color: #919494; color: white; border-radius:4px;" name="delete" id="myBtn2" class="delete">Delete</button>
			 </a>
			 
              </div>';
		}
	}
	else{
			echo mysqli_error($conn);

	}

?>