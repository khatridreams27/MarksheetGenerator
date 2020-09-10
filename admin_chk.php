<?php

	$conn = mysql_connect("localhost","root","");
   
   if(!$conn)
   {
		die('<center><br><br><br>Error in connecting to Server<center>'.mysql_error());
   }
		
	mysql_select_db("utu",$conn);

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	 
	 $email=$_POST['email'];
     $pass=$_POST['pwd'];

	 	if(isset($_POST['s1']))
    	{
				$q1=mysql_query("select email,pwd from admin where email='$email'");  // OR DIE(mysql_error());

				$count=mysql_num_rows($q1);
				if($count>=1)
				{
				while($rows=mysql_fetch_array($q1))
				{
					if($rows['email']==$email && $rows['pwd']==$pass)	
					{
							header("refresh:1; url=admin_dashboard.php");
					}
					else
					{
							echo('<b><h1><u>WRONG EMAIL OR PASSWORD</u></h1></b>');
							header("refresh:3; url=admin.php");
					}
				}
				}
				else
				{
						echo("<b><h1><u>YOU ARE NOT AUTHORISED TO LOGIN.</u></h1></b>");
						header("refresh:3; url=admin.php");
				}
		}
	}
?>