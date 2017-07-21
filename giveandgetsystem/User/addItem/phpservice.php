<?php
include_once('../userfunction/session.php');
require('../main/main2.php');

if (isset($_POST['servicename']) && isset($_POST['description']) && isset($_POST['Experience']) && isset($_POST['timeavailable1']) )
{
	$id=$user_id;
	$servicename = test($_POST['servicename']);
	$timeavailable1= test($_POST['timeavailable1']);
	$description=test($_POST['description']);
	$Experience=test($_POST['Experience']);
	$service=test($_POST['service']);
    $datestamp=date('Y-m-d h-i-sa');
	
	if(!empty($servicename) && !empty($timeavailable1) && !empty($Experience) && !empty($description) )
	{ 
     
	
	$query = $conn->query("INSERT INTO services VALUES ('','$Experience','$timeavailable1','$servicename','$description','1','$id','$datestamp','','$service')");

		

             header("location:../home/homepage.php");	
			
		 
	
		}
	}	

	
 else echo 'All fields are required..';


function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


  ?>