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
	<h1 class="text-warning">Supplier Dashboard</h1>
    <p align="right" class="text-warning"><?php session_start();echo 'welcome'.$_SESSION['sname'];?></p>
	 <div class="list-group">
    <a href="viewsupplierproduct.php" class="list-group-item list-group-item-info">Product List</a>
    <a href="addsupplierproduct.php" class="list-group-item list-group-item-success">Add Quotation</a>
    <a href="viewstatus.php" class="list-group-item list-group-item-info">View Quotation</a>
      <a href="supplierpaymentr.php" class="list-group-item list-group-item-info">View Supplier Payment</a>
       <a href="suppliersignout.php" class="list-group-item list-group-item-info">Signout</a>
    </div>
</p>
</body>
</html>