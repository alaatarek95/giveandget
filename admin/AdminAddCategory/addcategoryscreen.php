 <!DOCTYPE html>
<html>
<head>
    <title> Add Category </title>
    <link rel="stylesheet" type="text/css" href="addcategory.css">
	
	
</head>


<body>
 <?php include('../nav admin/Navadmin.html'); ?>
<h1> Add New Category </h1>
<br>
<div>
  <form action="addcategory.php" method="post" enctype="multipart/form-data">
    <label for="subcategoryname"> Category Name</label>
    <input type="text" id="sname" name="subcategoryname">

    <label for="categoryname">Subcategory Name</label>
	<select id="cname" name="categoryname" >
      <option value="sksubcategory">skills</option>
      <option value="prsubcategory">products</option>
	  <option value="sersubcategory">services</option>

    </select>
	
	<br> <br>
     <label for="choosepicture">Choose an image:</label>
    <input type="file" name="photo" id="myFile">
	<br>
  
    <input type="submit" value="Submit">
  </form>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}
</script>











</body>
</html>