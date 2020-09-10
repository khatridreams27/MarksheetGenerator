<!DOCTYPE html>
<html lang="en">
<head>
  <title>fetch_query.com</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body bgcolor="#e6e6fa">
 <center>
	<div class="container">
		
		<div class="row">
			     <div class="col-sm-60">
				 <div class="panel panel-danger">
 					<div class="panel-heading"><h1> BIRLA INSTITUTE OF APPLIED SCIENCE</h1></div>
 				 </div>
 				 </div>
 				 <div class="panel panel-info">
  					<div class="panel-heading"><h2> Mark Sheet Generation </h2></div><br>
  				 </div>
  				 <div class="panel-body">
					<form action="marks_insert.php" method="POST">
						<input type="text" value="New Student Entry" name="insert" class="btn btn-primary"/>
					<br>
						<input type="submit" value="Show students Query" name="fetch" class="btn btn-primary"/>
					<br>
						<input type="submit" value="logout" class="btn btn-danger" />
					</form>
				 </div>
 		</div>
	</div>

<?php
 	 $conn = mysql_connect("localhost","root","");
   
     if(!$conn)
     {
		die('<center><br><br><br>Error in connecting to Server<center>'.mysql_error());
     }
		
	 mysql_select_db("utu",$conn);

     if($_SERVER["REQUEST_METHOD"] == "POST")
     {

	 }
	
?>
 </center>
</body>
</html>

<!--



<div class="col-sm-11"></div>
	-->