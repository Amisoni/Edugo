<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

function valid()
{
	var a=document.forms["sun"]["e_id"].value;
	var d=document.forms["sun"]["day"].value;
	var m=document.forms["sun"]["month"].value;
	var y=document.forms["sun"]["year"].value;
	var s="";
	if(a=="" || a==null)
	{
		s=s+"Enter Email ID\n";
	}
    if(d=="" || d==null || m=="" || m==null || year=="" || year==null)
	{
	  s=s+"Enter Valid Birth Date\n";
	}

	if(s=="")
	{
		return true;
	}
	else
	{
			alert(s);
//		alert("hi...");
	return false;
	}
}

</script>
<link href="../pagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" name="sun" action="#" onsubmit="return valid()">
<table align="center" class="font" width="500px">
<tr>
<td colspan="3">
<h1>Search Student</h1>
</td>
</tr>
<tr>
<td>
<label>Sun Email ID:</label>
</td>
<td>
:
</td>
<td>
<input type="text" id="e_id" name="e_id" size="35"/>
</td>
</tr>
<tr>
<td>
<label>Birth Date:</label>
</td>
<td width="10px">
:
</td>
<td>
<select name="day">
<option value="">--Day--</option>
<?php
$i=1;
while($i<32)
{
echo "<option value='$i'>$i</option>";
$i++;
}
?>
</select>
<select name="month">
<option value="">--Month--</option>
<option value='01'>Jan</option>
<option value='02'>Feb</option>
<option value='03'>March</option>
<option value='04'>April</option>
<option value='05'>May</option>
<option value='06'>Jun</option>
<option value='07'>July</option>
<option value='08'>Aug</option>
<option value='09'>Sep</option>
<option value='10'>Oct</option>
<option value='11'>Nov</option>
<option value='12'>Dec</option>
</select>
<select name="year">
<option value="">--Year--</option>
<?php
$i=1990;
while($i<2013)
{
echo "<option value='$i'>$i</option>";
$i++;
}
?>
</select>
</td>
</tr>
<tr>
<td rowspan="1" colspan="3">
<input type="submit" name="select" value="View"/>
</td>
</tr>
<tr><td colspan="3">
<?php
if(isset($_POST['select']))
{
include("../config.php");
$date=($_POST['year']."-".$_POST['month']."-".$_POST['day']);
//echo $date."<br />";
//echo ("select * from student where email='".$_POST['e_id']."'"); //and birth_date='".$date."'")."<br />";

@$result=mysql_query("select * from student where email='".$_POST['e_id']."' and birth_date='".$date."'");


$i=0;
while($data=mysql_fetch_array($result))
{
	$s="images/right.jpg";
	
	echo "<tabel width='500px'><tr><td rowspan='4' colspan='2'>";
	echo "<img src='../student/".$data[1]."' width='170px' height='90px'/>";
    echo "</td><td>";
	echo $data[3]." ".$data[4];
	echo "</td></tr><tr><td>".$data[5]."</td></tr>";
	echo "<tr><td>Contact No:".$data[7]."</td></tr>";
	echo "<tr><td><a href='addsun.php?s_id=".$data[0]."'>Add to sun</a></td></tr></table>";
	$i++;
}
$no=mysql_num_rows($result);
if($no==0)
{
	echo "Record Not Fonund";
}


}
	
?>
</td>
</tr>
</table>
</body>
</html>