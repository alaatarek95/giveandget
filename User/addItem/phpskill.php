<?php
include_once('../userfunction/session.php');
require('../main/main2.php');

if (isset($_POST['description']) && isset($_POST['certificate']) && isset($_POST['skillname']))
{
$id=$user_id;
	$level= test($_POST['optradio']);
	$description=test($_POST['description']);
	$skillname=test($_POST['skillname']);
	$timeavailable= test($_POST['timeavailable']);
	$skill=test($_POST['skill']);
    $certificate=test($_POST['certificate']);
	$datestamp=date('Y-m-d h-i-sa');
	if(!empty($skillname) && !empty($description) && !empty($certificate)  )
	{ 
 
	$result = $conn->query("INSERT INTO skills VALUES ('','$level','$certificate','$skillname','$description','1','$id','$datestamp','','$timeavailable','$skill')");

		header("location:../home/homepage.php")	;	
		
	
	}
		

}
 else echo 'All fields are requigred..';

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



  ?>