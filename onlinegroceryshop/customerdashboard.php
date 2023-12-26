<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body background-color="green"><p align="center">
	<h1 class="text-warning">Customer Dashboard</h1>
    <p align="right" class="text-warning"><?php session_start();echo 'welcome'.$_SESSION['cname'];?></p>
	 <div class="list-group">
    <a href="buyproduct.php" class="list-group-item list-group-item-info">View Product and Add to Cart</a>
    <a href="invoiceproduct.php" class="list-group-item list-group-item-success">Buy Product and Invoice</a>
    <a href="viewbill.php" class="list-group-item list-group-item-info">View Bill</a>
    <a href="viewdelivery.php" class="list-group-item list-group-item-info">View Delivery</a>
      
       <a href="customersignout.php" class="list-group-item list-group-item-info">Signout</a>
    </div>
</p>
</body>
</html>