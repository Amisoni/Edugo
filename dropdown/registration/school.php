<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/StyleSheet.css" />
<script type="text/javascript">

function validateForm()
{
document.getElementById("school").style.display="none";
document.getElementById("e_id").style.display="none";
document.getElementById("cnt").style.display="none";
document.getElementById("p_name").style.display="none";
document.getElementById("std").style.display="none";
document.getElementById("afflia").style.display="none";
document.getElementById("pwd1").style.display="none";
document.getElementById("b1_date").style.display="none";
var x=document.forms["myform"]["s_name"].value;
var y=document.forms["myform"]["email"].value;
var z=document.forms["myform"]["contact"].value;
var p=document.forms["myform"]["HOD"].value;
var q=document.forms["myform"]["student"].value;
var r=document.forms["myform"]["affi"].value;
var t=document.forms["myform"]["pwd"].value;
var d=document.forms["myform"]["day"].value;
var m=document.forms["myform"]["month"].value;
var yy=document.forms["myform"]["year"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var numbers = /^[0-9]+$/; 
var reg = /^(.{0,20})$/; 
var reg1 = /^(.{0,20})$/; 
var reg2 = /^([0-9]{0,7})$/; 
var s="";
var a=1;
if(x==null || x=="")
{
	document.getElementById("school").style.display="block";
	s=s+a+"Enter School Name\n";
	a++;
}
if(!reg.test(x))
	{
		document.getElementById("school").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}

if(y==null || y=="")
{
	document.getElementById("e_id").style.display="block";
	s=s+a+"Enter Email\n";
	a++;
}
else
{
	if (!filter.test(y)) {
		document.getElementById("e_id").style.display="block";
    s=s+a+"Please provide a valid email address\n";
	a++;
	}	
}
if(z==null || z=="")
{
	document.getElementById("cnt").style.display="block";
	s=s+a+"Enter Contact No.\n";
	a++;
}
else
	{	
	
      if((!numbers.test(z))|| z.length!=10)
      { 
	  document.getElementById("cnt").style.display="block";  
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}

if(p==null || p=="")
{
	document.getElementById("p_name").style.display="block";
	s=s+a+"Enter HOD \n";
	a++;
}
if(!reg1.test(p))
	{
		document.getElementById("p_name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}

if(q==null || q=="")
{
	document.getElementById("std").style.display="block";
	s=s+a+"Enter Student\n";
	a++;
}
if(!reg2.test(q))
	{
		document.getElementById("std").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(r=="Select Affiliation")
{
	document.getElementById("afflia").style.display="block";
	s=s+a+"Enter Affilation\n";
	a++;
}
if(t==null || t=="")
{
	document.getElementById("pwd1").style.display="block";
	s=s+a+"Enter Password\n";
	a++;
}
if(d=="--Day--" || m=="--Month--" || yy=="--Year--" )
	{
		document.getElementById("b1_date").style.display="block";
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



</script>
</head>

<body style="alignment-adjust: central; text-align: left; font-size: 36px; font-family: 'Times New Roman', Times, serif; font-style: normal; vertical-align: top; color: #D6D6D6; border: 0; outline: 0; outline-color: #0033FF;">
<table border="0" width="100%" height="100%" align="center" cellpadding="0" cellspacing="0" style="margin-top:-10px">
<?php include('header.php')?>
<TR style="width:100%;position:relative ">
<?php include('hmenu.php') ?>
<TD colspan="3" valign="top" width="40%">
<form id="myfrom" action="school_php.php" method="post" name="myform" onsubmit="return validateForm()" style="margin-top:-30px;" >
<h4 style="color:#000; height:10px;">School Sign Up</h4>
<hr />

<table border="0" cellpadding="4" cellspacing="2">
<tr>
<td width="130px" class="label">School Name
</td>
<td><label id="school" style="color:#F00; display:none" class="label">*</label></td>
<td>
<input type="text" name="s_name" placeholder="Enter Name Of School" class="placeholder"/>
</td></tr>
<tr>
<td width="10px" class="label">Email:
</td>
<td><label id="e_id" style="color:#F00; display:none" class="label">*</label></td>
<td><input name="email" type="text" placeholder="Enter Email Address" class="placeholder"/>
</td>
</tr>
<tr>
<td width="10px" class="label">Contact No:
</td>
<td><label id="cnt" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="contact" placeholder="Contact Number" class="placeholder"/>

</td>
</tr>
<tr>
<td width="10px" class="label">Principal Name:
</td>
<td><label id="p_name" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="HOD" placeholder="Owner/Principal Name" class="placeholder"/>
</td>
</tr>
<tr>
<td width="10px" class="label">Password:
</td>
<td><label id="pwd1" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="password" name="pwd" placeholder="Enter Password" class="placeholder"/>
</td>
</tr>
<tr>
<td width="10px" class="label">Established Date:
</td>
<td style="color:#000; font-size:20px"><label id="b1_date" style="color:#F00; display:none" class="label">*</label></td>
<td style="color:#000; font-size:20px">
<select name="day">
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
<td  width="10px" class="label">School Type:</td>
<td style="color:#000; font-size:15px"></td>
<td style="color:#000; font-size:15px">
<input name="sex" type="radio" value="boy" checked="checked"/>Boys
<input type="radio" name="sex" value="girl"/>Girls
<input type="radio" name="sex" value="coeducation" />Coeducation
</td>
</tr>
<tr>
<td  width="10px" class="label">Strength:</td>
<td width="10px" style="color:#000; font-size:20px"><label id="std" style="color:#F00; display:none" class="label">*</label></td>
<td width="234" style="color:#000; font-size:15px">
<input type="text" name="student" placeholder="Enter No Of Student" class="placeholder"/>
</td>
</tr>
<tr>
<td  width="10px" class="label">Affiliation:</td>
<td width="10px">
<label id="afflia" style="color:#F00; display:none" class="label">*</label>
</td>
<td width="180" style="color:#000; font-size:15px" colspan="3">
<input type="radio" name="affi" value="State Board" checked="checked" size="18px"/>State Board
<input type="radio" name="affi" value="CBSC" class="label" />CBSE
<input type="radio" name="affi" value="ICSE" class="label"/>ICSE
<input name="sex" type="radio" value="boy" />IB
</td>
</tr>
<tr>
<td colspan="3" ><table><tr><td>
 <label id="submit" class="signup" onclick="validateForm()">&nbsp;Sign Up&nbsp;</label></td><td>
<label id="valid" style="color:#F00; display:none" class="label"> Please Fill Above Details</label>
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