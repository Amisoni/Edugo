<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

function validateForm()
{
	var a=document.forms["sun"]["e_id"].value;
	var d=document.forms["sun"]["day"].value;
	var m=document.forms["sun"]["month"].value;
	var y=document.forms["sun"]["year"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var s="";
	/*//alert(p);
	if(p==null || p=="")
	{
		
		document.getElementById("e_id").style.display="block";
		s=s+a+"Enter Email\n";
		a++;
		return false;
	}
	else
	{
		if (!filter.test(p)) {
		document.getElementById("e_id").style.display="block";
	    s=s+a+"Please provide a valid email address\n";
    	}	
		return false;
	}
	return false;
/*/
document.getElementById("e_id1").style.display="none";
document.getElementById("b_date1").style.display="none";
	if(a=="" || a==null)
	{
		document.getElementById("e_id1").style.display="block";
		//document.getElementById("e_id").style.display="block";
		s=s+"Enter Email ID\n";
	}
	if (!filter.test(a)) 
	{
		//alert("hello");
		document.getElementById("e_id1").style.display="block";
	    s=s+a+"Please provide a valid email address\n";
    }	
    if(d=="" || d==null || m=="" || m==null || year=="" || year==null)
	{
		document.getElementById("b_date1").style.display="block";
		s=s+"Enter Valid Birth Date\n";
	}

 if(s=="")
	{
		return true;
	}
	else
	{
			
			//alert(s);
//		
	return false;
	}
}

</script>
<link href="../pagestyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form method="post" name="sun" action="#" onsubmit="return validateForm()">
<table align="center" class="font" width="500px" border="0">
<tr>
<td colspan="3">
<h1>Search Student</h1>
</td>
</tr>
<tr>
<td>
<label>Sun Email ID</label>
</td>
<td>
:
</td>
<td>
<input type="text" id="e_id" name="e_id" size="33" placeholder=" Enter Your Sun Email "/>
</td>
<td><label id="e_id1" style="color:#F00; display:none"> Valid Email ID</label></td>
</tr>
<tr>
<td>
<label>Birth Date</label>
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
$i=1900;
while($i<2030)
{
echo "<option value='$i'>$i</option>";
$i++;
}
?>
</select>
</td>
<td><label id="b_date1" style="color:#F00; display:none" class="label"> Valid Birthdate</label></td>
</tr>
<tr>
<td rowspan="1" colspan="3">
<input type="submit" name="select" value="View" onclick="validateForm()" style="width:100px;height:25px"/>
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
	echo "<font color='#FF0000'> Record Not Fonund</font>";
}


}
	
?>
</td>
</tr>
</table>
</form>
</body>
</html>