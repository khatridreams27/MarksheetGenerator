<!DOCTYPE html>
<html>
<head><title>Result</title>
</head>
<body background="">

<?php

 echo"<center>";
 echo"<form method='POST' action=''>";
 echo"<table border='3' bgcolor='pink'><h1><font color=''><b>UTTARAKHAND TECHNICAL UNIVERSITY, DEHRADUN</b><br><br><b>STATEMENT OF PROVISIONAL MARKS</b></font></center>";
 echo"<tr><center><td width='310'><b>Select Any One:  <select name='op'><option>Select Categary</option>";
 echo"<option value='RollNo'>Roll_Number </option></select>";
 echo"<td><input type='text' name='ty'><input type='submit' name='s1' value='search'>";
 echo"</td></tr></table></center></form><br><br><br>";


 $conn = mysql_connect("localhost","root","");
   
   if(!$conn)
   {
		die('<center><br><br><br>Error in connecting to Server<center>'.mysql_error());
   }
		
	mysql_select_db("utu",$conn);

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
	 
	 $sel=$_POST['op'];
     $ty=$_POST['ty'];

	 	if(isset($_POST['s1']))
    	{

			if($sel=="RollNo")
			{
				$q1=mysql_query("select RollNo,Name,FName,MCAT301,MCAT302,MCAT303,MCAP301 from student where RollNo='$ty'");
				echo"<center><table border='1'>";
				//echo"<tr bgcolor=''><th><center>RollNo</center></th><th><center>Name</center></th><th><center>Father Name</center></th><th><center>MCAT301</center></th><th><center>MCAT302</center></th><th><center>MCAT303</center></th><th><center>MCAP301</center></th></tr>";
				
					while($rows=mysql_fetch_array($q1))
					{
						$rn=$rows['RollNo'];
						$name=$rows['Name'];	
						$fname=$rows['FName'];
						$m1=$rows['MCAT301'];
						$m2=$rows['MCAT302'];
						$m3=$rows['MCAT303'];
						$p1=$rows['MCAP301'];
						//echo"<tr bgcolor=''><td><center>$rn</center></td><td><center>$name</center></td><td><center>$fname</center></td><td><center>$m1</center></td><td><center>$m2</center></td><td><center>$m3</center></td><td><center>$p1</center></td></tr>";
					
						echo"<tr bgcolor=''><th><center>RollNo</center></th><td><center>$rn</center></td></tr><tr><th><center>Name</center></th><td><center>$name</center></td></tr><tr><th><center>Father Name</center></th><td><center>$fname</center></td></tr><tr><th><center>MCAT301</center></th><td><center>$m1</center></td></tr><tr><th><center>MCAT302</center></th><td><center>$m2</center></td></tr><tr><th><center>MCAT303</center></th><td><center>$m3</center></td></tr><tr><th><center>MCAP301</center></th><td><center>$p1</center></td></tr>";
						//echo"<tr bgcolor=''><td><center>$rn</center></td><td><center>$name</center></td><td><center>$fname</center></td><td><center>$m1</center></td><td><center>$m2</center></td><td><center>$m3</center></td><td><center>$p1</center></td></tr>";


					}  
				echo"</table></center>";
			}
		}
	}
?>

</body>
</html>