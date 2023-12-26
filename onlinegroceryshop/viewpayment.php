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
<body>
	<?php 

			session_start();
		$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
		echo "<table class=table table-dark table-striped>";
		echo "<tr><th>Payment Id<th>Quotation Id<th>Product Name<th>Commodity Type<th>Quantity<th>Unit<th>Rate<th>Username<th>Status<th>Date<th>TransactionId<th>Mode of Payment<th>Product Type";
		//$u="'".$_SESSION['sname']."'";
		$rs=mysqli_query($connect,"select * from spayment");
		while($array=mysqli_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td>$array[0]";
			echo "<td>$array[1]";
			echo "<td>$array[2]";
			echo "<td>$array[3]";
			echo "<td>$array[4]";
			echo "<td>$array[5]";
			echo "<td>$array[6]";
			echo "<td>$array[7]";
			echo "<td>$array[8]";
			echo "<td>$array[9]";
			echo "<td>$array[10]";
			echo "<td>$array[11]";
			echo "<td>$array[12]";
			//echo "<td>$array[13]";


		}

		mysqli_close($connect);
        echo "</table>";

	?>
	<br><br>

	<p align="center"><a href="admindashboard.php" class="btn btn-primary" >Dashboard</a></p>
</body>
</html>