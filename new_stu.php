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
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$id = $_POST['id']; 
	
	$sql ="INSERT INTO registration(name,id,email,pass) VALUES ('$name','$id','$email','$pwd')";
	 
	if(!mysqli_query($con,$sql))
	{
		echo "<b><h1><u>Something Went Wrong</u></h1></b>";
	}
	else
	{
		echo "<b><h1><u>Registration Successful</u></h1></b>";
	}
	
	header("refresh:2; url=index.html");
?>