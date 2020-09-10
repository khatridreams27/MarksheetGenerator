<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin_dashboard.com</title>
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
					
					<form action="fetch_query.php" method="POST">
						<input type="submit" value="Show students Querys" name="fetch" class="btn btn-primary"/>
					</form>
					<form action="admin.php" method="POST">
						<div class="col-sm-11"></div>
						<input type="submit" value="logout" class="btn btn-danger" />
					</form>
				 </div>
		</div>
	</div>
 </center>
</body>
</html>