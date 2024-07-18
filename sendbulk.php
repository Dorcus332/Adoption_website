<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

  <head>
  <title>Dog Adoption</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(img/13.jpg);background-repeat: no-repeat;background-size: cover;">

<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Dog Adoption</a>
    </div>
    <ul class="nav navbar-nav pull-right">
    <li><a href="send.php">Single SMS</a></li>

      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>


<div class="container">

<div style="width: 400px;margin-left: 35%;//box-shadow: 0px 0px 5px #660066;//padding:20px;">
 <div style='text-align: center;padding:15px;color:#2f3542;background-image:linear-gradient( white , #2c3e50);font-family: serif; //border-radius: 15% 25% 0% 25%'><b><h2>Send Bulky Message</b></h2></div>

<div class="modal-body">
			<form action="bulk.php" method="POST" enctype = "multipart/form-data">
				<div class="form-group">
				 <label for="csv" class="form-label">Message</label>
                <input type="text" class="form-control" id="message" name="message">
				</div>
				<div class="form-group">
				<label for="csv" class="form-label">Select CSV File</label>
                <input type="file" class="form-control" id="csv" name="csv" accept=".csv">
				</div>
				<button type="submit" name="submit" class="btn btn-primary"  >Send</button>			  
			</form>
		</div>


</div>


</div>

</body>


</html>
