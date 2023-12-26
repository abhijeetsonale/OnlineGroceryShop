<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
              document.getElementById("c").innerHTML="<font color=red>Fill Productname";
              return false;
          }
          var y=document.forms[0].elements[1].value;
          if(y==null||y=="")
          {
              document.getElementById("d").innerHTML="<font color=red>Fill Commodity Type";
              return false;
          }
          var z=document.forms[0].elements[2].value;
          if(z==null||z=="")
          {
              document.getElementById("e").innerHTML="<font color=red>Fill Product Type";
              return false;
          }
          var p=document.forms[0].elements[3].value;
          if(p==null||p=="")
          {
              document.getElementById("f").innerHTML="<font color=red>Fill Quantity";
              return false;
          }
          if(isNaN(p))
          {
            document.getElementById("f").innerHTML="<font color=red>Fill Numeric Value";
              return false;
            
          }
          var q=document.forms[0].elements[4].value;
          if(q==null||q=="")
          {
              document.getElementById("g").innerHTML="<font color=red>Fill Unit";
              return false;
          }
          var r=document.forms[0].elements[5].value;
          if(r==null||r=="")
          {
              document.getElementById("h").innerHTML="<font color=red>Fill Rate";
              return false;
          }
          if(isNaN(r))
          {
           document.getElementById("h").innerHTML="<font color=red>Fill Numeric Value";
              return false;
             
          }
          return true;
      }
  </script>
</head>
<body background="">

<div class="container">
  <h2 class="text-primary">New Product Form </h2>
  <form action="productadd.php" onsubmit="return validate()">
      <div class="form-group" >
    	
  	  	
    	  <label for="email">ProductName:</label><br>
  <div class="row">
      
  <div class="col-lg-4">
      <input type="text" class="form-control" id="email" placeholder="Enter productname" name="txtpname">
      <p id="c"></p>
  </div>
    </div>
</div>
<div class="form-group">
      <label for="pwd">Commodity Type:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <select multiple class="form-control" name="ctype">
        <option>Grocery</option>
        <option>Cosmetics</option>
       
      </select>
      <p id="d"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Product Type:</label><br>
      <div class="row">
      	<div class="col-lg-4">
      <input type="text" class="form-control" id="pwd" placeholder="Enter product type" name="txtptype">
      <p id="e"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Quantity:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <input type="text" class="form-control" id="pwd" placeholder="Enter quantity" name="txtqty">
      <p id="f"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Unit:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <textarea class="form-control" id="pwd" placeholder="Enter unit" name="txtunit"></textarea>
      <p id="g"></p>
  </div>
  </div>
    </div>
    <div class="form-group">
      <label for="pwd">Rate:</label><br>
      <div class="row">
        <div class="col-lg-4">
      <input type="text" class="form-control" id="pwd" placeholder="Enter rate" name="txtrate">
      <p id="h"></p>
  </div>
  </div>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
    <a href="admindashboard.php" class="btn btn-primary">Dashboard</a>
  </form>
</div>

</body>
</html>
