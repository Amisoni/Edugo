<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body>

<table border="0" height="50%" width="60%" align="center">
	
			<?php
			include("../config.php");
				
				echo "<tr bgcolor='#666666' style='color:#FFF'>";	
				
				echo"<td>ID</td>";
				echo"<td>Name</td>";
				echo"<td>Result</td>";
				
				echo "</tr>";
			$result=mysql_query("SELECT * FROM result");
			
			while($test = mysql_fetch_array($result))
			{
				
				
				echo "<tr align='center'>";	
				
				echo"<td><font color='black'>" .$test['rid']."</font></td>";
				echo"<td><font color='black'>" .$test['name']."</font></td>";
				echo"<td><font color='black'>". $test['result']. "</font></td>";
				
				//echo"<td> <a href ='view.php?userId=$id'>Edit</a>";
				//echo"<td> <a href ='del.php?userId=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			//mysql_close($conn);
			?>
</table>

</body>
</html>
