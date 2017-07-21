<?php
include_once'../userfunction/session.php';
include_once '../main/main2.php';

//$id=2;
$id=$user_id;
$update="SELECT Avg(value) FROM rate WHERE ratedUser=$id";
$result = mysqli_query($conn, $update);
if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$userRate=$row['Avg(value)'];
		if($userRate ==0){
		    echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}
		elseif($userRate <= 1){
		    echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1" checked />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}
		elseif(1<$userRate && $userRate <=2){
			echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1"  />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" checked />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}
		elseif(2<$userRate && $userRate <=3){
			echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" checked />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}

		elseif(3<$userRate && $userRate<=4){
			echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" checked />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}
		else{
			echo'
		  <div class="stars">
				<input type="radio" name="star" class="star-1" id="star-1" value="1" />
				<label class="star-1" for="star-1">1</label>
				<input type="radio" name="star" class="star-2" id="star-2" value="2" />
				<label class="star-2" for="star-2">2</label>
				<input type="radio" name="star" class="star-3" id="star-3" value="3" />
				<label class="star-3" for="star-3">3</label>
				<input type="radio" name="star" class="star-4" id="star-4" value="4" />
				<label class="star-4" for="star-4">4</label>
				<input type="radio" name="star" class="star-5" id="star-5" value="5" checked />
				<label class="star-5" for="star-5">5</label>
				<span></span>
			</div>
		  '; 
		}
	}
?>