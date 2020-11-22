<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/StyleSheet.css" />
<script type="text/javascript">
function validateForm()
{
	document.getElementById("name").style.display="none";
	document.getElementById("school").style.display="none";
	document.getElementById("emailv").style.display="none";
	document.getElementById("std").style.display="none";
	document.getElementById("cnt").style.display="none";
	document.getElementById("pwd1").style.display="none";
	document.getElementById("b_date").style.display="none";
	var x=document.forms["myform"]["first_name"].value;
	var y=document.forms["myform"]["last_name"].value;
	var z=document.forms["myform"]["school_name"].value;
	var p=document.forms["myform"]["email"].value;
	var q=document.forms["myform"]["standard"].value;
	var g=document.forms["myform"]["Graduate"].value;
	var r=document.forms["myform"]["number"].value;
	var t=document.forms["myform"]["sex"].value;
	var u=document.forms["myform"]["pwd"].value;
	var d=document.forms["myform"]["day"].value;
	var m=document.forms["myform"]["month"].value;
	var yy=document.forms["myform"]["year"].value;
	var numbers1 = /^[0-9]+$/;  
	var char = /^[A-Za-z]+$/;  
	var reg = /^(.{0,20})$/;
	var s="";
	var a=1;
	if(x==null || x=="" || y==null || y=="")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("name").style.display="block";
		a++;
	}
	if(!reg.test(x))
	{
		document.getElementById("name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
	if(z==null || z=="")
	{
		document.getElementById("school").style.display="block";
		s=s+a+"Enter School Name\n";
		a++;
	}
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(p==null || p=="")
	{
		document.getElementById("emailv").style.display="block";
		s=s+a+"Enter Email\n";
		a++;
	}	
	if(!filter.test(p))
	{
		document.getElementById("emailv").style.display="block";
		s=s+a+"Enter Valid Email\n";
		a++;
	}
	if((q==null || q=="Select Standard") && (g==null || g=="Select Graduate"))
	{
		document.getElementById("std").style.display="block";
		s=s+a+"Select standard\n";
		a++;
	}
	
	if(r==null || r=="" )
	{
		document.getElementById("cnt").style.display="block";
		s=s+a+"Enter Number\n";
		a++;
	}
	if( !numbers1.test(r) || r.length!=10)
	{
		document.getElementById("cnt").style.display="block";
		s=s+a+"Enter Valid Number\n";
		a++;
	}
	if(u==null|| u=="")
	{
		document.getElementById("pwd1").style.display="block";
		s=s+a+"Enter Password\n";
		a++;
	}
	if(d=="--Day--" || m=="--Month--" || yy=="--Year--" )
	{
		document.getElementById("b_date").style.display="block";
		s=s+a+"Select Proper Date\n";
		a++;
	}
 	
	if (s!="")
	  {
	 // alert("Please.......\n "+s);
	 document.getElementById("valid").style.display="block";
	 
	 return false;
	  }
	  else
	  {
		  document.getElementById("myfrom").submit();
	  }
}

function change()
{
	var x=document.forms["myform"]["drop1"].value;
	//alert(x);
	document.getElementById("gra").options[0].selected = true;
	document.getElementById("stand").options[0].selected = true; 
	if(x==1)
	{
		document.getElementById("gra").style.display="none";
		document.getElementById("stand").style.display="block";	
	}
	if(x==2)
	{
		document.getElementById("stand").style.display="none";
		document.getElementById("gra").style.display="block";
	}
		
}

</script>
 <script src="../dropdown/jquery.min.js" type="text/javascript"></script>
    <link href="../dropdown/modalPopLite1.3.0.css" rel="stylesheet" type="text/css" />
    <script src="../dropdown/modalPopLite1.3.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(function () {
           
	        $('#popup-wrapper').modalPopLite({ openButton: '#clicker', closeButton: '#close-btn', isModal: false });
function f1()
{
	}
	    });
		
	</script>
</head>
<body style="alignment-adjust: central; text-align: left; font-size: 36px; font-family: 'Times New Roman', Times, serif; font-style: normal; vertical-align: top; color: #D6D6D6; border: 0; outline: 0; outline-color: #0033FF;margin:0px;">
<table border="0" width="100%" height="100%" align="center" cellpadding="0" cellspacing="0" style="margin-top:-10px;">

<?php include('header.php')?>
<TR style="width:100%; position:relative" >
<?php include('smenu.php')?>

<TD colspan="3" valign="top" width="40%" >
<form id="myfrom" action="studentphp.php" method="post" name="myform" onsubmit="return validateForm()" style="margin-top:-30px" >
<H4 style="color:#000; height:10px">Student Sign Up</H4>
<hr />
<table cellpadding="4" cellspacing="2" border="0">
<tr>
<td width="170px" class="label">First Name:
</td>
<td width="10px" class="label"><label id="name" style="color:#F00; display:none" class="label">*</label></td>
<td width="100px" class="label"><input type="text" name="first_name" placeholder="First Name" style="width:88px; height:18px; font-size:15px" maxlength="20"/> Last Name <input type="text" name="last_name" placeholder="Last Name" style="width:88px; height:18px; font-size:15px" maxlength="20" />
</td>
</tr>
<tr>
<td width="130px" class="label">School Name:</td>
<td width="10px"><label id="school" style="color:#F00; display:none" class="label">*</label></td>
<td width="200px">
<input type="text" name="school_name" placeholder="Enter School Name" class="placeholder"/>
</td></tr>
<tr>
<td width="10px" class="label">Email:</td>
<td width="10px"><label id="emailv" style="color:#F00; display:none" class="label">*</label></td>
<td width="200px"><input type="text" name="email" placeholder="Enter Email Address" class="placeholder"/>
</td>
</tr>
<tr>
<td width="10px" class="label">Standard:</td>
<td width="10px"><label id="std" style="color:#F00; display:none" class="label">*</label></td>
<td width="100px">
<table cellpadding="0" cellspacing="0"><tr><td>
<select id="stand" class="label" name="standard" >
<option value="Select Standard">Select Standard</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="9">10</option>
</select>
<select id="gra" class="label" name="Graduate" style="display:none;" >
<option value="Select Graduate">Select Graduate </option>
<option value="Diploma">Diploma</option>
<option value="BE">BE</option>
<option value="BCom">BCom</option>
<option value="BCA">BCA</option>
<option value="BBA">BBA</option>
</select>
</td>
<td>
<select id="drop" name="drop1" class="label" onchange="change()">
<option value="1">Standard</option>
<option value="2">Graduate</option>
</select>
</td></tr>
</table>
</td>

</tr>

<tr>
<td width="75px" class="label">Contact No:</td>
<td width="10px"><label id="cnt" style="color:#F00; display:none" class="label">*</label></td>
<td width="100px"><input type="text" name="number" placeholder="Enter Contact Number" class="placeholder"/>
</td>
</tr>
<tr>
<td width="10px" class="label">Password:</td>
<td width="10px"><label id="pwd1" style="color:#F00; display:none" class="label">*</label></td>
<td width="200px"><input type="password" name="pwd" placeholder="Enter Password" class="placeholder"/>
</td>
</tr>

<tr>
<td width="10px" class="label">Birth Date:</td>
<td width="10px"><label id="b_date" style="color:#F00; display:none" class="label">*</label></td>
<td width="500px">
<select style=" height:18px;font-size:15px;" name="day">
<option value="--Day--">--Day--</option>
<?php
$i=1;
while($i<32)
{if($i<10){
echo "<option value=0$i>0".$i."</option>";}else
{echo "<option value=$i>$i</option>";}
$i++;
}
?>
</select>
<select style=" height:18px;font-size:15px;" name="month">
<option value="--Month--">--Month--</option>
<option value=01>Jan</option>
<option value=02>Feb</option>
<option value=03>Mar</option>
<option value=04>Apr</option>
<option value=05>May</option>
<option value=06>Jun</option>
<option value=07>Jul</option>
<option value=08>Aug</option>
<option value=09>Sep</option>
<option value=10>Oct</option>
<option value=11>Nov</option>
<option value=12>Dec</option>
</select>
<select style=" height:18px;font-size:15px;" name="year">
<option value="--Year--">--Year--</option>
<?php
$i=1990;
while($i<2006)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
</select>
</td>
</tr>
<tr>
<td width="10px" class="label">Gender:</td>
<td colspan="2" style="color:#000; font-size:15px">
<input name="sex" type="radio" value="Male" checked="checked"/>Male

<input type="radio" name="sex" value="Female" />Female
</td>

</tr><tr><td colspan="3">
<table><tr><td>
 <label id="submit" class="signup" onclick="validateForm()">&nbsp;Sign Up&nbsp;</label></td><td>
<label id="valid" style="color:#F00; display:none" class="label">&nbsp;Please Fill Above Details</label>
</td><td class="label" style="color:#F00;">
<?php 
if(isset($_GET['p']))
{
	echo "Email ID is Allready Exist";
}
?></td>
</td></tr></table>
</td>
<tr>
</tr>
</table>
</form>
</TD>

</TR>
</table>
</body>
</html>