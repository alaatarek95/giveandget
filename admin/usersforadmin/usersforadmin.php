<!DOCTYPE html>
<html>
<head>
<style> 
/*for the search bar*/
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

/*for Notifications button and circle*/

.btn {
    float: right;
    width:100px;
    position:relative;
    top:2px;
background-image: url("notifi.jpg")
    line-height:50px;
    color:black;
    border-radius: 28px;
    font-size: 16px;
    text-decoration: none;
    margin: 4px 2px;
	outline: none;

}




img.avatar {
    width: 7%;
    border-radius: 10%;
}

/*for ban button*/
    
    .ban {
    background-color: #F9B705;
    border: none;
    color: white;
    padding: 12px 41px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	margin-bottom:800px:
    cursor: pointer;
	border-radius: 28px;
	float:right;
	font-weight: bold;
    }
    .ban:hover {
        background-color: #DAA004;
    }

  
  /*for message button*/
    
    .delete {
    background-color: #F9B705;
    border: none;
    color: white;
    padding: 12px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	margin-bottom:800px:
    cursor: pointer;
	border-radius: 28px;
	float:right;
	font-weight: bold;
    }
    .delete:hover {
        background-color: #DAA004;
    }
  
  /*for any paragraph*/

 p {
 font-family:Georgia, serif;
 font-size:1.5em;
font-style:italic;
letter-spacing:0.2em;
line-height:1.3em;
text-align:justify;
color:#0000CC;
}

</style>
</head>
<body >


  <?php include('../nav admin/Navadmin.html'); ?>


<br>


<h1 style="color:#ff6600; font-family:Georgia, serif; font-size:2em;">Users:</h1>
    
    
    <?php
    require 'main2.php';
    $output = '';
    $query = $conn->query("Select Fname,picture,UID FROM user");
	$count = mysqli_num_rows($query);
    if($count == 0) {
        $output = 'no results';
    }
    else { 
        while ($row =mysqli_fetch_array($query)){
		
            $Fname = $row['Fname'];
            $UID = $row['UID'];
            $picture = $row['picture'];
            $output =  "$Fname" ;
    ?>
    
	<p>
        <img src="<?php echo $row['photo']; ?>" alt="avatar" class="avatar">
        <a href=""> <?php print ("$output"); ?></a>
        
        <a href = "deleteuser.php?id=<?php echo $UID; ?>"> <button class="delete">Delete</button> </a>
        <a href = "banuser.php?id=<?php echo $UID; ?>"> <button class="ban">Ban</button> </a> 
    </p>
    
    <?php
        }
    }
?>

 

 
</body>
</html>
