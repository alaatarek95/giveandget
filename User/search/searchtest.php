<html>

<head>
<title>
search
</title>

</head>

 <link rel="stylesheet" type="text/css" href="Books categories.css">
<style>


div.images {
    margin: 20px 0 20px 0;
    padding: 20px;}
</style>

<body>


<?php
  function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }
   echo 1;
  function sproduct() {
  require('main2.php');
  $outputp = '';
  
  if(isset($_POST['search']))
   {
	
	$searchp =test($_POST['search']);
	$searchp = preg_replace("#[^0-9a-z]#i","",$searchp);
	
	$query = $conn->query("SELECT UsedPeriod, ID, name, sub_category, Description, posted_date, photo FROM products WHERE name LIKE '%$searchp%'");
	
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		
		$outputp ='No products!<br><hr>';
		echo("error " . mysqli_error($conn)); 
		
	}
	else{
	
		While($row = mysqli_fetch_array($query)) {
			$itemname = $row['name'];
			$UsedPeriod = $row['UsedPeriod'];
			$sub_category = $row['sub_category'];
			$Description = $row['Description'];
			$posted_date = $row['posted_date'];
			
			
			$id = $row['ID'];
			
			$outputp .='<div>'.'Product name:'.$itemname.'<br> Used period: '.$UsedPeriod.'<br> category: '.$sub_category.'<br> Description: '.$Description.'<br> posted date: '.$posted_date.'<hr></div>';
		  
		
		} 
	}
	print("$outputp");
	
	
}}



    function sskill(){

    if(isset($_POST['search']))
   {
	require('main2.php');
	$output = '';
	$searchq =test($_POST['search']);
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	$query = $conn->query("SELECT level, ID, name, AddedByWhom, Date, sub_category, description, posted_date FROM skills WHERE name LIKE '%$searchq%'");
	
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		$output ='No skills!<br><hr>';
		echo("error " . mysqli_error($conn)); 
		
	}
	else{
		While($row = mysqli_fetch_array($query)) {
			$level = $row['level'];
			$name = $row['name'];
			$sub_category = $row['sub_category'];
			$description = $row['description'];
			$posted_date = $row['posted_date'];
		    $TimeAvailable = $row['Date'];
			$AddedByWhom = $row['AddedByWhom'];
  			$id = $row['ID'];
			
	$output .='<div>'.'Skill name:'.$name.'<br> TimeAvailable: '.$TimeAvailable.'<br> category: '.$sub_category.'<br> Description: '.$description.'<br> posted date: '.$posted_date.'<br> UserName: '.$AddedByWhom.'<hr></div>';
		  
		
		} 
	}
	print("$output");
	
}
}

    function sservice(){

     if(isset($_POST['search']))
     {
	require('main2.php');
	$outputr = '';
	$searchr = test($_POST['search']);

	$searchr = preg_replace("#[^0-9a-z]#i","",$searchr);
	
	$query = $conn->query("SELECT ExperienceYears, ID, name, AddedByWhom, Time_available, sub_category, description, posted_date FROM services WHERE name LIKE '%$searchr%'");
	
	
	
	$count = mysqli_num_rows($query);
	if($count == 0){
		$outputr ='No services!<br><hr>';
				echo("error " . mysqli_error($conn)); 

		
	}
	else{
		While($row = mysqli_fetch_array($query)) {
			$ExperienceYears = $row['ExperienceYears'];
			$name = $row['name'];
			$sub_category = $row['sub_category'];
			$description = $row['description'];
			$posted_date = $row['posted_date'];
		    $Time_available = $row['Time_available'];
			$AddedByWhom = $row['AddedByWhom'];
			$id = $row['ID'];
			
	$outputr .='<div>'.'Service name:'.$name.'<br> TimeAvailable: '.$Time_available.'<br> ExperienceYears:'.$ExperienceYears.'<br> category: '.$sub_category.'<br> Description: '.$description.'<br> posted date: '.$posted_date.'<br> UserName: '.$AddedByWhom.'<hr></div>';
		  
		
		} 
	}
	print("$outputr");
	
}
}


 

 sservice();
         sskill();
         sproduct();
   ?>
 
</body>
</html>