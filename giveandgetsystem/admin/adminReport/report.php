<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1.5px solid #000000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd) {
    background-color: #dddddd;
}


#table
{
background-color: #ffb84d;
}

.Report{
padding:25px 25px;

}

#data
{
font-weight:bold;
}



</style>
</head>
<body>

  <?php include('../nav admin/Navadmin.html'); ?>


<div class="Report">


<center> <img src="logo.png" alt="Give&Get" style="width:50px;height:58px;">  G i v e & G e t </center>
<center> <h4 style="font-weight:bold;">Monthly Website Activities</h4> </center>


<?php include('reportFunction.php'); ?>



<table>
  <tr id="table">
    <th>Month</th>
    
	  <th>Product items no.</th>
    <th>Service items no.</th>
    <th>Skill items no.</th>
    <th>Accounts no.</th>
   

  </tr>
  <tr>
    <td>one month</td>
    <td><?php  countResult("name", "products"); ?></td>
    <td><?php  countResult("name", "services"); ?></td>
	<td><?php  countResult("name", "skills"); ?></td>
	<td><?php  countResultUser(); ?></td>

	 </tr>
  </table>
</div>
</body>
</html>