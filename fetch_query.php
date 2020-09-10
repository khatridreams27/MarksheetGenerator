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
 		</div>
	</div>
	<br>
	<center>
		<h1 style="color:black"><b><u>Student Queries</u></b></h1>
	</center>
	<br>

<table ce
<?php
 	 $conn = mysql_connect("localhost","root","");
   
     if(!$conn)
     {
		die('<center><br><br><br>Error in connecting to Server<center>'.mysql_error());
     }
		
	 mysql_select_db("utu",$conn);

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	 
	 $f=$_POST['fetch'];
   
     if(isset($_POST['fetch']))
    {
		$q1=mysql_query("select* from query");
		echo"<center><table border='5' cellpadding='3' cellspacing='5'>";
		echo"<tr bgcolor=''><th><center><b>Roll Number</b></center></th><th><center><b>Name</b></center></th><th><center><b>Description</b></center></th></tr>";

		while($rows=mysql_fetch_array($q1))
		{
			$id=$rows['id'];
			$name=$rows['name'];	
			$descp=$rows['descp'];
 
			echo"<tr bgcolor=''><td><center>$id</center></td><td><center>$name</center></td><td><center>$descp</center></td></tr>";
		}
		echo"</table></center>";
	 }
	}
?>
 </center>
</body>
</html>