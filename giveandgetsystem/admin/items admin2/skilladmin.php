<html>

<!DOCTYPE html>
<html>
<head>
    <title> Skills Page For Admin </title>
    <link rel="stylesheet" type="text/css" href="skillspage.css">
	
	
</head>

<body>
  <?php include('../nav admin/Navadmin.html'); ?>

 
  <h1> Skills List </h1>
    
    
    <?php
    require 'main2.php';
    $output = '';
    $query = $conn->query("SELECT  ID, level, certificate, name, description, posted_date FROM skills");
	$count = mysqli_num_rows($query);
    if($count == 0) {
        $output = 'no results';	
    }
    else { 
        while ($row =mysqli_fetch_array($query)){
            
            $name = $row['name'];
            $level= $row['level'];
            $certificate= $row['certificate'];
            $Description= $row['description'];	
            $posted_date= $row['posted_date'];	
            $ID = $row['ID'];
	
			$output ='<div><b>skill Name: </b>:'.$name.'<br><b>certificate: </b>'.$certificate.'<br><b>level: </b>'.$level.'<br>  <b>Description: </b> '.$Description.'<br> <b> posted date: </b>'.$posted_date.'</div>';
    ?>
    <p>
    </br> 	 
    </p>
    
    <?php print ("$output"); ?>
    
    </p>

<a href = "delete skill.php?id=<?php echo $ID; ?>"> <button class="delete">Delete</button> </a>

<?php
        }
    }
?>
