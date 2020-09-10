<!DOCTYPE html>
<html>
<head><title>Result</title>
</head>
<body background="">
	<div style="background-image: url('pattern.jpg');">
 <center>
 	<form method='POST' action=''>
    	<table border='3' bgcolor='pink'>
    		<h1><font color=''><b>UTTARAKHAND TECHNICAL UNIVERSITY, DEHRADUN</b><br><br><b>STATEMENT OF PROVISIONAL MARKS</b></font></center></h1>
   			<tr>
   				<center>
   				<td width='310'><b>Select Any One:</b>
   					<select name='op'>
   						<option>Select Categary</option>
 						<option value='RollNo'>Roll_Number </option>
 					</select>
 				</td>
 				<td>
 					<input type='text' name='ty'><input type='submit' name='s1' value='search'>
 				</td>
 				</center>
 			</tr>
 		</table>
 	</form>
 </center><br><br><br><br><br>

<?php
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
				$q1=mysql_query("select col2,col3,col4,col5,col6,col7,col8,col9,col10,col11,col12,col13,col14,col15,col16,col17,col18,col19,col20,col21,col22,col23,col24,col25,col26,col27,col28,col29,col30,col31,col32,col33 from Result1 where col2='$ty'") OR DIE(mysql_error());
								
					while($rows=mysql_fetch_array($q1))
					{
						$rn=$rows['col2'];
						$name=$rows['col3'];
						$fname=$rows['col4'];
						$em1=$rows['col5'];
						$em2=$rows['col6']; 
						$t1=$rows['col7'];
						$tc1=$rows['col8'];
						$tc2=$rows['col9'];
						$t2=$rows['col10'];
						$ec1=$rows['col11'];
						$ec2=$rows['col12'];
						$t3=$rows['col13'];
						$me1=$rows['col14'];
						$me2=$rows['col15'];
						$t4=$rows['col16'];
						$ee1=$rows['col17'];
						$ee2=$rows['col18'];
						$t5=$rows['col19'];
						$cl1=$rows['col20'];
						$cl2=$rows['col21'];
						$t6=$rows['col22'];
						$mel1=$rows['col23'];
						$mel2=$rows['col24'];
						$t7=$rows['col25'];
						$eel1=$rows['col26'];
						$eel2=$rows['col27'];
						$t8=$rows['col28'];
						$dl1=$rows['col29'];
						$dl2=$rows['col30'];
						$t9=$rows['col31'];
						$t=$rows['col32'];
						$p=$rows['col33'];

						$p1=round($p,2);
		
					echo "<center>
							<table border=\"1\" bgcolor=\"#e3e3e3\">
								<tr><td>
									<table border=\"1\" cellpadding=\"2\">
										<tr>
											<td colspan=\"9\" align=\"center\"><b>UTTARAKHAND TECHNICAL UNIVERSITY, DEHRADUN</b></td>
										</tr>
										<tr>
											<td colspan=\"9\" align=\"center\"><b>STATEMENT OF PROVISIONAL MARKS</b></td>
										</tr>
										<tr>
											<td colspan=\"9\" align=\"center\"><b>MCA III SEMESTER</b></td>
										</tr>
										<tr>
											<td colspan=\"9\">Institute Name : BIRLA INSTITUTE OF APPLIED SCIENCE</td>
										</tr>
										<tr>
											<td colspan=\"1\">Student Name : </td><td colspan=\"4\"><b>$name</b></td><td colspan=\"1\">Roll No. : </td><td colspan=\"3\"><b>$rn</b></td>
										</tr>
										<tr>
											<td colspan=\"1\">Father's Name : </td><td>$fname</td>
										</tr>
										<tr>
											<th rowspan=\"2\" colspan=\"3\">Subject Code & Name</th>
											<th colspan=\"2\">Maximum Marks</th>
											<th rowspan=\"2\">Total</th>
											<th colspan=\"2\">Marks Obtained</th>
											<th rowspan=\"2\">Total</th>
										</tr>
										<tr>
											<td>Ext.</td>
											<td>Sess.</td>
											<td>Ext.</td>
											<td>Sess.</td>
										</tr>
										<tr>
											<td colspan=\"3\">Engineering Mathematics-I, TMA101</td>
											<td>100</td>
											<td>50</td>
											<td>150</td>
											<td>$em1</td>
											<td>$em2</td>
											<td>$t1</td>
										</tr>
										<tr>
											<td colspan=\"3\">Basic Technical Communication, THM101</td>
											<td>100</td>
											<td>50</td>
											<td>150</td>
											<td>$tc1</td>
											<td>$tc2</td>
											<td>$t2</td>
										</tr>
										<tr>
											<td colspan=\"3\">Engineering Chemistry, TCY101</td>
											<td>100</td>
											<td>50</td>
											<td>150</td>
											<td>$ec1</td>
											<td>$ec2</td>
											<td>$t3</td>
										</tr>
										<tr>
											<td colspan=\"3\">Basic Mechanical Engineering, TME 101</td>
											<td>100</td>
											<td>50</td>
											<td>150</td>
											<td>$me1</td>
											<td>$me2</td>
											<td>$t4</td>
										</tr>
										<tr>
											<td colspan=\"3\">Fundamentals of Electronic Engineering, TEC 101</td>
											<td>100</td>
											<td>50</td>
											<td>150</td>
											<td>$ee1</td>
											<td>$ee2</td>
											<td>$t5</td>
										</tr>
										<tr>
											<td colspan=\"3\">Chemistry Lab, PCY 101</td>
											<td>25</td>
											<td>25</td>
											<td>50</td>
											<td>$cl1</td>
											<td>$cl2</td>
											<td>$t6</td>
										</tr>
										<tr>
											<td colspan=\"3\">Basic Mechanical Engineering Lab, PME 101</td>
											<td>25</td>
											<td>25</td>
											<td>50</td>
											<td>$mel1</td>
											<td>$mel2</td>
											<td>$t7</td>
										</tr>
										<tr>
											<td colspan=\"3\">Fundamentals of Electronic Engineering Lab,  PEC 101</td>
											<td>25</td>
											<td>25</td>
											<td>50</td>
											<td>$eel1</td>
											<td>$eel2</td>
											<td>$t8</td>
										</tr>
										<tr>
											<td colspan=\"3\">Engineering Drawing Lab,  PED 101</td>
											<td>25</td>
											<td>25</td>
											<td>50</td>
											<td>$dl1</td>
											<td>$dl2</td>
											<td>$t9</td>
										</tr>
										<tr>
											<td colspan=\"5\" align=\"right\">Grand Total : </td>
											<td>950</td>
											<td colspan=\"2\">Total Marks : </td>
											<td><b>$t</b></td>
										</tr>
										<tr>
											<td colspan=\"7\" align=\"right\">Percentage of Marks : </td>
											<td colspan=\"2\"><b>$p1</b></td>
										</tr>
									</table>
								</td></tr>
							</table>
							<p>* Marks as per University Cross list.</p>
						</center>";
					}	
			}
		}
	}
?>
</div>

<center>
	<button onclick="window.print()">Print this page</button>
</center>
<br><br>	
	<form name="logout" method="POST" action="logout.php" align="right">
		<button name="out" style="background-color:black;color:white;width:120px;height:40px;"><b><u>LOGOUT</u></b></button>
	</form>
	<form name="query" method="POST" action="query.html" align="left">
		<button name="help" style="background-color:white;color:red;width:120px;height:40px;"><b><u>Any Query</u></b></button>
	</form>

</body>
</html>