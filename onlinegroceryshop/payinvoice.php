

<?php 
		
		session_start();
		$connect=mysqli_connect("localhost","root","","ogs") or die("connection failed");
		$u="'".$_SESSION['cname']."'";
		$query="insert into delivery(pid,pname,ctype,ptype,qty,unit,rate,cname)  (select pid,pname,ctype,ptype,qty,unit,rate,cname from cart where cname=".$u.")";
    //echo $query;
		mysqli_query($connect,$query) or die("query failed");
		$query1="delete from cart where cname=".$u."";
		mysqli_query($connect,$query1);
		mysqli_close($connect);	
		//header("location:customerdashboard.php");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      function validate()
      {
          var x=document.forms[0].elements[0].value;
          if(x==null||x=="")
          {
              document.getElementById("c").innerHTML="<font color=red>Fill Customer name";
              return false;
          }
          var y=document.forms[0].elements[1].value;
          if(y==null||y=="")
          {
              document.getElementById("d").innerHTML="<font color=red>Fill Transaction Id";
              return false;
          }
          var z=document.forms[0].elements[2].value;
          if(z==null||z=="")
          {
              document.getElementById("e").innerHTML="<font color=red>Fill Mode of Payment";
              return false;
          }
          var p=document.forms[0].elements[3].value;
          if(p==null||p=="")
          {
              document.getElementById("f").innerHTML="<font color=red>Fill date";
              return false;
          }
          
          return true;
      }
  </script>
</head>
<body>
<div class="container">
  <h2 class="text-primary">Payment Details</h2>
  <marquee behavior="alternate">Google pay or Phone pay or Paytm available on same number 9075784837</marquee>
  <form action="addpayment.php" onsubmit="return validate()">
     
  	  	
    	 
    <div class="form-group">
      <label for="pwd">Customer Name:</label><br>
      <div class="row">
      	<div class="col-lg-4">
      <input type="text" class="form-control" id="pwd" placeholder="Enter customer name" name="txtcname" value="<?php echo $_SESSION['cname'] ?>" readonly>
      <p id="c"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Transaction Id:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <input type="text" class="form-control" id="pwd" placeholder="Enter transaction id" name="txttid">
      <p id="d"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Mode of Payment:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <select class="form-control" id="pwd" placeholder="Enter googlepay or phone pay" name="txtmop">
      	<option value="googlepay">Googlepay</option>
      	<option value="phonepay">Phonepay</option>
      	<option value="paytm">Paytm</option>
      </select>
      <p id="e"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Date:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="txtdate">
      <p id="f"></p>
  </div>
  </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
    <a href="customerdashboard.php" class="btn btn-primary">Dashboard</a>
  </form>
</div>
</body>
</html>