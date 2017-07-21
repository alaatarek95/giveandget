<html>

<!DOCTYPE html>
<html>
<head>
    <title> Services Page For Admin </title>
    <link rel="stylesheet" type="text/css" href="servicespage.css">
	
	
</head>

<body>
   <?php include('../nav admin/Navadmin.html'); ?>

  <h1> Services List </h1>
    
  
    <?php
    require 'main2.php';
    $output = '';
    $query = $conn->query("SELECT  ID, Time_available, ExperienceYears, name, description, posted_date FROM services");
	$count = mysqli_num_rows($query);
    if($count == 0) {
        $output = 'no results';
    }
    else { 
        while ($row =mysqli_fetch_array($query)){
            
            $name = $row['name'];
            $Time_available= $row['Time_available'];
            $ExperienceYears= $row['ExperienceYears'];
            $Description= $row['description'];	
            $posted_date= $row['posted_date'];	
            $ID = $row['ID'];
            
			$output ='<div><b>skill Name: </b>:'.$name.'<br><b>ExperienceYears: </b>'.$ExperienceYears.'<br><b>Time_available: </b>'.$Time_available.'<br>  <b>Description: </b> '.$Description.'<br> <b> posted date: </b>'.$posted_date.'</div>';
    ?>
    <p>
    </br> 
    </p>
    
    <?php print ("$output"); ?>
    
	</p>

<a href = "delete service.php?id=<?php echo $ID; ?>"> <button class="delete">Delete</button> </a>

<?php 
        }
    }
?>


