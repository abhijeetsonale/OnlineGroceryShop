<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="text-warning"><h1 class="text-danger"><p align=center>Edit Delivery Form</p></h1>
<?php

	$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
	$id=$_GET['a'];
	$query="select * from delivery where did=".$id."";
	//echo $query;
	$rs=mysqli_query($connect,$query);
	echo "<form action=editdeliverydone.php>";
	while($array=mysqli_fetch_array($rs))
	{
		echo "<p align=center>";
		echo "Delivery Id:<br><input type=text name=pid value=$array[0] readonly><br>";
		echo "Product Id:<br><input type=text name=pid value=$array[1] readonly><br>";
		echo "Product Name:<br><input type=text name=pname value=$array[2] ><br>";
		echo "Commodity Type:<br><input type=text name=ctype value=$array[3] ><br>";
		echo "Product Type:<br><input type=text name=ptype value=$array[4] ><br>";
		echo "Quantity:<br><input type=text name=qty value=$array[5] ><br>";
		echo "Unit:<br><input type=text name=unit value=$array[6] ><br>";
		echo "Rate:<br><input type=text name=rate value=$array[7] ><br>";
		echo "Username:<br><input type=text name=uname value=$array[8] ><br>";
		echo "Status:<br><input type=text name=status value=$array[9] ><br>";
		echo "<br><input type=submit class= btn-primary>&nbsp;";
		echo "<a href=admindashboard.php class=btn-secondary>Dashboard</a>";

	}
	echo "</form>";




?>
</p>
</body>
</html>