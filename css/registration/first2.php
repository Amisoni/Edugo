<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/StyleSheet.css" />
<script type="text/javascript">
function validateForm()
{
	
	var x=document.forms["myform"]["first_name"].value;
	var y=document.forms["myform"]["last_name"].value;
	var z=document.forms["myform"]["school_name"].value;
	var p=document.forms["myform"]["email"].value;
	var q=document.forms["myform"]["standard"].value;
	var r=document.forms["myform"]["number"].value;
	var t=document.forms["myform"]["sex"].value;
	var u=document.forms["myform"]["pwd"].value;
	var d=document.forms["myform"]["day"].value;
	var m=document.forms["myform"]["month"].value;
	var yy=document.forms["myform"]["year"].value;

	var s="";
	var a=1;
	if(x==null || x=="")
	{
		s=s+a+"Enter first Name\n";
		a++;
	}
	if(y==null || y=="")
	{
		s=s+a+"Enter Last Name\n";
		a++;
	}
	if(z==null || z=="")
	{
		s=s+a+"Enter School Name\n";
		a++;
	}
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(p==null || p=="")
	{
		s=s+a+"Enter Email\n";
		a++;
	}	
	if(!filter.test(p))
	{
		s=s+a+"Enter Valid Email\n";
		a++;
	}
	if(q==null || q=="Select Standard"  )
	{
		s=s+a+"Select standard\n";
		a++;
	}
	var numbers1 = /^[0-9]+$/;  
	if(r==null || r=="" )
	{
		s=s+a+"Enter Number\n";
		a++;
	}
	if( !numbers1.test(r) || r.length!=10)
	{
		s=s+a+"Enter Valid Number\n";
		a++;
	}
	if(u==null|| u=="")
	{
		s=s+a+"Enter Password\n";
		a++;
	}
	if(d=="--Day--" || m=="--Month--" || yy=="--Year--" )
	{
		s=s+a+"Select Proper Date\n";
		a++;
	}

	if (s!="")
	  {
	  alert("Please.......\n "+s);
	  return false;
	  }
}
</script>
</head>
<body style="alignment-adjust: central; text-align: left; font-size: 36px; font-family: 'Times New Roman', Times, serif; font-style: normal; vertical-align: top; color: #D6D6D6; border: 0; outline: 0; outline-color: #0033FF;">
<table border="0" width="100%" height="100%" align="center" cellpadding="0" cellspacing="0" style="margin-top:-10px;">
<?php include('header.php')?>
<TR style="width:100%; position:relative" >
<?php include('smenu.php')?>
<TD colspan="3" valign="top" width="40%" >
<form action="studentphp.php" method="post" name="myform" onsubmit="return validateForm()" style="margin-top:-30px" >
<H4 style="color:#000; height:10px">Student Sign Up</H4>
<hr />
<table cellpadding="4" cellspacing="2" border="0">
<tr>
<td width="100px" class="label">First Name<input type="text" name="first_name" placeholder="Enter First Name" style="width:160px; height:18px; font-size:15px"/>
</td>
<td class="label">Last Name<input type="text" name="last_name" placeholder="Enter Last Name" style="width:154px; height:18px; font-size:15px" />
</td>
</tr>
<tr>
<td colspan="2" class="label">School Name<br />
<input type="text" name="school_name" placeholder="Enter School Name" class="placeholder"/>
</td></tr>
<tr>
<td colspan="2" class="label">Email<br /><input type="text" name="email" placeholder="Enter Email Address" class="placeholder"/>
</td>
</tr>
<tr>
<td colspan="2" class="label">
Standard<br /></font>
<select class="label" name="standard">
<option value="Select Standard">Select Standard</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select>
</td>
</tr>

<tr>
<td colspan="2" class="label">Contact No<br /><input type="text" name="number" placeholder="Enter Contact Number" class="placeholder"/>
</td>
</tr>
<tr>
<td colspan="2" class="label">Password<br /><input type="password" name="pwd" placeholder="Enter Password" class="placeholder"/>
</td>
</tr>

<tr>
<td colspan="2" width="600px" class="label">Birth Date:<br />
<select style=" height:25px;font-size:20px;" name="day">
<option value="--Day--">--Day--</option>
<?php
$i=1;
while($i<32)
{
echo "<option value='$i'>$i</option>";
$i++;
}
?>
</select>
<select style=" height:25px;font-size:20px;" name="month">
<option value="--Month--">--Month--</option>
<option value='Jan'>Jan</option>
<option value='Feb'>Feb</option>
<option value='March'>March</option>
<option value='April'>April</option>
<option value='May'>May</option>
<option value='Jun'>Jun</option>
<option value='July'>July</option>
<option value='Aug'>Aug</option>
<option value='Sep'>Sep</option>
<option value='Oct'>Oct</option>
<option value='Nov'>Nov</option>
<option value='Dec'>Dec</option>
</select>
<select style=" height:25px;font-size:20px;" name="year">
<option value="--Year--">--Year--</option>
<?php
$i=1990;
while($i<2006)
{
echo "<option value='$i'>$i</option>";
$i++;
}
?>
</select>
</td>
</tr>
<tr>
<td colspan="2" style="color:#000; font-size:20px">
<input name="sex" type="radio" value="Male" checked="checked"/>Male
<input type="radio" name="sex" value="Female" />Female
</td>
</tr>
<tr>
<td colspan="1"><input type="submit" value="" style="background-image:url(image/images.jpg); width:192px; height:50px"/>
</td>
<td style="color:#F00; font-size:15px" valign="top">
<?php 
if(isset($_GET['p']))
{
	echo "Email ID is Allready Exist";
}
?>
</td>
</tr>
</table>
</form>
</TD>

</TR>
</table>
</body>
</html>