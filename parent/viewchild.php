<html>
<head>

<link href="../pagestyle.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php 
include("../config.php");

$q="select * from sun where p_id=".$_SESSION['id']; 
//echo $q;
$result1=mysql_query($q);
echo "<table cellspacing='0' align='center' style='text-align:left;font-family:Arial, Helvetica, sans-serif; font-size:16px;'  width='50%'><tr bgcolor='#CCCCCC'><th colspan='2'>Image</th><th>Information</th></tr>";
while($data1=mysql_fetch_array($result1))
{
@$result=mysql_query("select * from student where ID=".$data1['s_id']);

$i=0;

while($data=mysql_fetch_array($result))
{	
	echo "<tr><td rowspan='4' colspan='2'>";
	echo "<img src='../student/".$data[1]."' width='150px' height='70px'/>";
    echo "</td><td>";
	echo "Name : ".$data[3]." ".$data[4];
	echo "</td></tr><tr><td>School Name : ".$data[5]."</td></tr>";
	echo "<tr><td>Contact No:".$data[7]."</td></tr>";
	echo "<tr><td><a target='_new' href='sunprofile.php?id=".$data[0]."'>View Profile</a></td></tr>";
	
}
echo "<tr><td colspan='3'><br></td></tr>";
}

@$no=mysql_num_rows($result);
if($no==0)
{
	echo "<tr><td colspan='3'><font color='#FF0000'> Record Not Fonund</font></td></tr>";
}
echo "</table>";


?>
</body>
</html>