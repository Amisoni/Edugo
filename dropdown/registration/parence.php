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
document.getElementById("occu").style.display="none";
document.getElementById("e_id").style.display="none";
document.getElementById("m_no1").style.display="none";
document.getElementById("p_no1").style.display="none";
document.getElementById("pwd1").style.display="none";
document.getElementById("b_date1").style.display="none";
//document.getElementById("name").style.display="block";
var x=document.forms["myform"]["f_name"].value;
var y=document.forms["myform"]["l_name"].value;
var z=document.forms["myform"]["occ"].value;
var p=document.forms["myform"]["email"].value;
var q=document.forms["myform"]["number1"].value;
var r=document.forms["myform"]["number2"].value;
var t=document.forms["myform"]["pwd"].value
var d=document.forms["myform"]["day"].value;
var m=document.forms["myform"]["month"].value;
var yy=document.forms["myform"]["year"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var numbers = /^[0-9]+$/;  
var pw = /^[a-zA-Z0-9]+$/;  
var reg = /^(.{0,20})$/; 
var reg1 = /^(.{0,50})$/; 
var reg2 = /^([0-9]{0,7})$/; 

var s="";
var a=1;
if(x==null || x=="")
{
	document.getElementById("name").style.display="block";
	s=s+a+"Enter first Name\n";
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
	document.getElementById("name").style.display="block";
	s=s+a+"Enter Last Name\n";
	a++;
}
if(!reg.test(y))
	{
		document.getElementById("name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(z==null || z=="")
{
	document.getElementById("occu").style.display="block";
	s=s+a+"Enter Occuption\n";
	a++;
}
if(!reg1.test(z))
	{
		document.getElementById("occu").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(p==null || p=="")
{
	document.getElementById("e_id").style.display="block";
	s=s+a+"Enter Email\n";
	a++;
}
else
{
	if (!filter.test(p)) {
		document.getElementById("e_id").style.display="block";
    s=s+a+"Please provide a valid email address\n";
    }	
}
if(q==null || q=="")
{
	document.getElementById("m_no1").style.display="block";
	s=s+a+"Enter Number1\n";
	a++;
}
else
	{	
      if((!numbers.test(q))|| q.length!=10)
      {   
	   document.getElementById("m_no1").style.display="block";
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}

if(r==null || r=="")
{
	document.getElementById("p_no1").style.display="block";
	s=s+a+"Enter Number2\n";
}
else
	{	
      if((!numbers.test(r))|| r.length!=10)
      {   
	   document.getElementById("p_no1").style.display="block";
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}

if(t==null || t=="")
{
	 document.getElementById("pwd1").style.display="block";
	s=s+a+"Enter Password\n";
}
else
	{	
      if((!pw.test(t))|| t.length<6)
      {   
	   document.getElementById("pwd1").style.display="block";
      s=s+a+"Enter At Least 6 character Password \n";
	  a++;
      }  
	}

if(d=="--Day--" || m=="--Month--" || yy=="--Year--" )
	{
		 document.getElementById("b_date1").style.display="block";
		s=s+a+"Select Proper Date\n";
		a++;
		
	}

if (s!="" )
  {
  //alert("Please.......\n "+s);
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
<?php include('header.php') ?>
<TR style="width:100%;position:relative">
<?php include('pmenu.php')?>
<TD colspan="3" valign="top" width="40%">
<form action="parence_php.php" method="post" id="myfrom" name="myform" onsubmit="return validateForm()" style="margin-top:-30px">
<H4 style="color:#000; height:10px;">Parent Sign Up</H4>
<hr />
<table border="0" cellpadding="4" cellspacing="2">
<tr>
<td width="130px" class="label">First Name:
</td>
<td width="10px" class="label"><label id="name" style="color:#F00; display:none" class="label">*</label></td>
<td class="label" width="570px"><input name="f_name" type="text" placeholder="Enter First Name" style="width:88px; height:18px; font-size:15px"/>
Last Name:<input name="l_name" type="text" placeholder="Enter Last Name" style="width:88px; height:18px; font-size:15px" />
</td>
</tr>
<tr>

<td width="100px" class="label">Occupation:</td>
<td width="10px""><label id="occu" style="color:#F00; display:none" class="label">*</label></td>
<td>
<input type="text" name="occ" placeholder="Enter Occupation" class="placeholder"/>
</td></tr>
<tr>
<td width="100px" class="label">Email:</td>
<td><label id="e_id" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="email" placeholder="Enter Email Address" class="placeholder"/>
</td>
</tr>
<tr>
<td width="100px" class="label">Mobile:</td>
<td><label id="m_no1" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="number1" placeholder="Enter Mobile Number" class="placeholder"/>

</td>
</tr>
<tr>
<td width="100px" class="label">Ph Number:</td>
<td><label id="p_no1" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="text" name="number2" placeholder="Enter Phone/Mobile Number" class="placeholder"/>
</td>
</tr>
<tr>
<td width="100px" class="label">Password:</td>
<td><label id="pwd1" style="color:#F00; display:none" class="label">*</label></td>
<td><input type="password" name="pwd" placeholder="Enter Password" class="placeholder"/>
</td>
<tr>
<td width="100px" class="label" >Birth Date:</td>
<td><label id="b_date1" style="color:#F00; display:none" class="label">*</label></td>
<td class="placeholder">
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
<td width="100px" class="label">Gender:</td>
<td style="color:#000; font-size:20px">&nbsp;</td>
<td style="color:#000; font-size:15px">
<input name="sex" type="radio" value="Male" checked="checked"/>Male
<input type="radio" name="sex" value="Female" />Female
</td>
</tr>
<tr>
<td colspan="3"><table><tr><td>
 <label id="submit" class="signup" onclick="validateForm()">&nbsp;Sign Up&nbsp;</label></td><td>
<label id="valid" style="color:#F00; display:none" class="label">Please Fill Above Details</label>
</td><td class="label" style="color:#F00;">
<?php 
if(isset($_GET['p']))
{
	echo "Email ID is Allready Exist";
}
?>
</td>
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