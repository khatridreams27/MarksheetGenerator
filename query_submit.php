<?php
	$con = mysqli_connect('localhost','root','');         //make connection
	
	if(!$con)
	{
		echo 'Connection failed';
	}
	
	if(!mysqli_select_db($con,'utu'))
	{
		echo 'Database not select';
	}		
    
	$name = $_POST['name'];
	$id = $_POST['id'];
	$descp = $_POST['desc']; 
	
	$sql ="INSERT INTO query(name,id,descp) VALUES ('$name','$id','$descp')";
	 
	if(!mysqli_query($con,$sql))
	{
		echo "<b><h1><u>Something Went Wrong</u></h1></b>";
	}
	else
	{
		echo "<b><h1><u>Query Submitted</u></h1></b>";
	}
	
	header("refresh:2; url=marksheet.php");
?>