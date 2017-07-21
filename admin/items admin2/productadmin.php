<html>

<!DOCTYPE html>
<html>
<head>
    <title> Products Page For Admin </title>
    <link rel="stylesheet" type="text/css" href="productspage.css">
	
	
</head>

<body>
   <?php include('../nav admin/Navadmin.html'); ?>

  <h1> Products List </h1>
    
    <?php
    require 'main2.php';
    $output = '';
    $query = $conn->query("SELECT UsedPeriod, ID, name, subcategory, Description, posted_date, photo FROM products");
    $count = mysqli_num_rows($query);
    if($count == 0) {
        $output = 'no results';
    }
    else{ 
        while ($row =mysqli_fetch_array($query)){
            $name = $row['name'];
            $UsedPeriod= $row['UsedPeriod'];		
            $Description= $row['Description'];	
            $posted_date= $row['posted_date'];	
            $ID = $row['ID'];
            $photo = $row['photo'];
                   
			$output ='<div><b>Product Name: </b>:'.$name.'<br>  <b> UsedPeriod: </b>'.$UsedPeriod.'<br>  <b>Description:</b> '.$Description.'<br> <b> posted date: </b>'.$posted_date.'</div>';
    ?>
    
    <p>
    <div class= "box">
        <img id="myImg" src="<?php echo $row['photo']; ?>" alt="img for product" width="300" height="200" align="left">
        </br> 
    </p>
    
    <?php print ("$output"); ?>   
    </div> 
   
    
    <a href = "delete product.php?id=<?php echo $ID; ?>"> <button class="delete">Delete</button> </a>

	</p>
<?php
        }
    }
?>


  
	 


</html>