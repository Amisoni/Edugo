<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="css/StyleSheet.css" />
<link rel="stylesheet" href="../css/autocomplete.css" type="text/css" media="screen">
<script src="../panel/Better Coda Slider_files/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../css/jquery.js" type="text/javascript"></script>
<script src="../css/dimensions.js" type="text/javascript"></script>
<script src="../css/autocomplete.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	    setAutoComplete("searchField", "results", "autocomplete.php?part=");
	});
	
function validateForm()
{	
document.getElementById("name").style.display="none";
document.getElementById("sname").style.display="none";
document.getElementById("email").style.display="none";
document.getElementById("std").style.display="none";
document.getElementById("contact").style.display="none";
document.getElementById("sub").style.display="none";
document.getElementById("bd").style.display="none";
document.getElementById("pass").style.display="none";
var x=document.forms["myform"]["f_name"].value;
var y=document.forms["myform"]["l_name"].value;
var z=document.forms["myform"]["institute"].value;
var p=document.forms["myform"]["email"].value;
//var q=document.forms["myform"]["standard"].value;
var r=document.forms["myform"]["sub"].value;
var t=document.forms["myform"]["number"].value;
var u=document.forms["myform"]["pwd"].value;
var d=document.forms["myform"]["day"].value;
var m=document.forms["myform"]["month"].value;
var yy=document.forms["myform"]["year"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var numbers = /^[0-9]+$/;
var reg = /^(.{0,20})$/; 
var reg1 = /^(.{0,50})$/; 
var reg2 = /^([0-9]{0,7})$/; 
var s="";
var a=1;
//alert("hi..");
if(x==null || x=="")
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
if(y==null || y=="")
{
	s=s+a+"Enter Last Name\n";
	//document.getElementById("name").style.display="block";
	a++;
}
if(z==null || z=="")
{
	s=s+a+"Enter Institute Name\n";
	document.getElementById("sname").style.display="block";
	a++;
}
if(!reg1.test(z))
	{
		document.getElementById("sname").style.display="block";
		s=s+a+"MAximum 50 character...\n";
		a++;
	}
if(p==null || p=="")
{
	s=s+a+"Enter Email\n";
	document.getElementById("email").style.display="block";
	a++;
}
else
{
	if (!filter.test(p)) {
    s=s+a+"Please provide a valid email address\n";
	
	}
}
var n = $("input:checkbox:checked").length;
	
	  if(n>0)
	  {}
	  else
	  {
			document.getElementById("std").style.display="block";		  
		  $('#std').show();
		 // alert("Please Select Minimun One Question");
		 
		  
	  }


if(r==null || r=="")
{
	s=s+a+"Enter Subject\n";
	document.getElementById("sub").style.display="block";
	a++;
}
if(t==null || t=="")
{
	s=s+a+"Enter Contact Number\n";
	document.getElementById("contact").style.display="block";
	a++;
}
else
	{	
      if((!numbers.test(t))|| t.length!=10)
      {   
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}
if(u==null || u=="")
{
	s=s+a+"Enter Password\n";
	document.getElementById("pass").style.display="block";
	a++;
}
 if(u.length<6)
      {   
	   document.getElementById("pass").style.display="block";
      s=s+a+"Enter At Least 6 character Password \n";
	  a++;
      } 
if(d=="--Day--" || m=="--Month--" || yy=="--Year--" )
	{
		s=s+a+"Select Proper Date\n";
		document.getElementById("bd").style.display="block";
		a++;
	}

if (s!="")
  {
  //alert("Please.......\n "+s);
   document.getElementById("valid").style.display="block";
	 return false;
	  }
	  else
	  {
//		  alert("tari masi ni ankh");
		  document.getElementById("myfrom").submit();
		  return true;
	  }
	   
}
</script>
</head>

<body style="alignment-adjust: central; text-align: left; font-size: 36px; font-family: 'Times New Roman', Times, serif; font-style: normal; vertical-align: top; color: #D6D6D6; border: 0; outline: 0; outline-color: #0033FF;">
<table border="0" width="100%" height="100%" align="center" cellpadding="0" cellspacing="0" style="margin-top:-10px">
<?php include('header.php')?>
<TR  style="width:100%;position:relative">
<?php include('fmenu.php')?>
<TD colspan="3" valign="top" width="40%">
<form action="fecultyphp.php" method="post" id="myfrom" name="myform" onsubmit="return validateForm()" style="margin-top:-30px">
<H4 style="color:#000; height:10px;"> Faculty Sign Up</H4>
<hr />
<p id="auto"><table cellpadding="4" cellspacing="2" border="0">
<tr>
<td width="10px" class="label">First Name:
</td><td width="10px" class="label"><label id="name" style="color:#F00; display:none" class="label">*</label></td>
<td width="100px" class="label"><input name="f_name" type="text" maxlength="20" placeholder="First Name" style="width:85px; height:18px; font-size:15px"/>
Last Name:<input name="l_name" type="text" maxlength="20" placeholder="Last Name" style="width:85px; height:18px; font-size:15px" />
</td>
</tr>
<tr>
<td width="10px" class="label">School Name:</td>
<td width="10px" class="label"><label id="sname" style="color:#F00; display:none" class="label">*</label></td>
<td>
<input type="text" name="institute" maxlength="50" placeholder="Enter Name Of Institute" class="placeholder"/>
</td></tr>
<tr>
<td width="100px" class="label">Email:</td>
<td width="10px" class="label"><label id="email" style="color:#F00; display:none" class="label">*</label></td>
<td><input name="email" type="text" placeholder="Enter Email Address" class="placeholder"/>
</td>
<tr>
<td width="100px" class="label">Standard:</td>
<td width="10px" class="label"><label id="std" style="color:#F00; display:none" class="label">*</label></td>
<td style="color:#000; font-size:15px">
<!--<select style="width:70%;height:20x;font-size:15px;" name="standard">
<option value="Select Standard">Select Standard</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
</select>-->
<input type="checkbox" name="standard1" value="5"/>5
<input type="checkbox" name="standard2" value=",6"/>6
<input type="checkbox" name="standard3" value=",7"/>7
<input type="checkbox" name="standard4" value=",8"/>8
<input type="checkbox" name="standard5" value=",9"/>9
<input type="checkbox" name="standard6" value=",10"/>10
</td>
</tr>
<tr>
<td width="100px" class="label">Subject:</td>
<td width="10px" class="label"><label id="sub" style="color:#F00; display:none" class="label">*</label></td>
<td>
<input id="searchField" name="sub" type="text" maxlength="100" placeholder="Enter Subject Name" class="placeholder"/>
</td>
</tr>
<tr>
<td width="100px" class="label">Contact No:</td>
<td width="10px" class="label"><label id="contact" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="number" maxlength="10" placeholder="Enter Contact Number" class="placeholder"/>
</td>
</tr>
<tr>
<td width="100px" class="label">Password:</td>
<td width="10px" class="label"><label id="pass" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="password" name="pwd" maxlength="100" placeholder="Enter Password" class="placeholder"/>
</td>
</tr>
<tr>
<td width="100px" class="label">Birth Date:</td>
<td width="10px" class="label"><label id="bd" style="color:#F00; display:none" class="label">*</label></td>
<td style="color:#000; font-size:15px">
<select style=" height:20px;font-size:15px;" name="day">
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
$i=1980;
while($i<2014)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
</select>
</td>
</tr>
<tr>
<td width="100px" class="label">Gender:</td>
<td width="10px" class="label"><label id="gen" style="color:#F00; display:none" class="label">*</label></td>
<td style="color:#000; font-size:15px">
<input name="sex" type="radio" value="Male" checked="checked"/>Male
<input type="radio" name="sex" value="Female" />Female
</td>
</tr>
<tr>
<table><tr><td>
 <label id="submit" class="signup" onclick="validateForm()">&nbsp;Sign Up&nbsp;</label></td><td>
<label id="valid" style="color:#F00; display:none" class="label">Please Fill Above Details</label>

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
</p>

</form>
</TD>

</TR>
<TR>
<TD height="2" colspan="4">
</TD>	
</TR>
</table>
</body>
</html>