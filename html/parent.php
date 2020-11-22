<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Edu Go" />
<meta name="keywords" content="Edu Go" />
<title>Educ Go</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
function validateForm()
{
	
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
	//document.getElementById("name").style.display="block";
	s=s+a+"Enter first Name\n";
	a++;
}
if(!reg.test(x))
	{
		//document.getElementById("name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(y==null || y=="")
{
	//document.getElementById("name").style.display="block";
	s=s+a+"Enter Last Name\n";
	a++;
}
if(!reg.test(y))
	{
		//document.getElementById("name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(z==null || z=="")
{
	//document.getElementById("occu").style.display="block";
	s=s+a+"Enter Occuption\n";
	a++;
}
if(!reg1.test(z))
	{
		//document.getElementById("occu").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(p==null || p=="")
{
	//document.getElementById("e_id").style.display="block";
	s=s+a+"Enter Email\n";
	a++;
}
else
{
	if (!filter.test(p)) {
		//document.getElementById("e_id").style.display="block";
    s=s+a+"Please provide a valid email address\n";
    }	
}
if(q==null || q=="")
{
	//document.getElementById("m_no1").style.display="block";
	s=s+a+"Enter Number1\n";
	a++;
}
else
	{	
      if((!numbers.test(q))|| q.length!=10)
      {   
	   //document.getElementById("m_no1").style.display="block";
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}


if(t==null || t=="")
{
	 //document.getElementById("pwd1").style.display="block";
	s=s+a+"Enter Password\n";
}
else
	{	
      if(t.length<8)
      {   
	   //document.getElementById("pwd1").style.display="block";
      s=s+a+"Enter At Least 8 character Password \n";
	  a++;
      }  
	}

if(d=="" || m=="" || yy=="" )
	{
		 //document.getElementById("b_date1").style.display="block";
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
<body>
<?php
include("header.php");
?>
<!-- content start -->
<!-- left section start -->
<!-- left section end -->
<form id="myfrom" action="parence_php.php" method="post" name="myform" onsubmit="return validateForm()">
<div class="wrapper">
  <div class="left-panel">
    <div class="setschool"><a href="first.php"></a></div>
    <div class="school"	><a href="school.php"></a></div>
    <div class="tutor"><a href="tutor.php"></a></div>
    <div class="teacher"><a href="feculty.php"></a></div>
    <div class="middle-icons parentB"><a href="parent.php"></a></div>
  </div>
  <div class="signup">
    <div class="indicator"></div>
    <h1>Student Sign Up</h1>
    <div class="sigup-row"> <span class="left">
      <label> First Name:</label>
      <input type="text" value="First Name" name="f_name" class="signup-name-input"/>
      
      </span> <span class="left">
      <label class="label2"> Last Name:</label>
      <input type="text" value="Last Name" name="l_name" class="signup-name-input"/> 
      </span>
      </div>
    <div class="sigup-row">
      <label> Occupation:</label>
      <input type="text" value="School Name" name="occ" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Email:</label>
      <input type="text" name="email" value="Enter Email Address" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Mobile No:</label>
      <input type="text" value="Mobile Number" name="number1" class="signup-big-input"/>
    </div>
    <div class="sigup-row"> <span class="left">
      <label> Phone No: </label>
      <input type="text" value="+91" name="number2" class="signup-small-input"/>
      </span> <span class="left">
      <input type="text" value="Code" name="pnumber1" class="signup-name-input"/>
      </span> <span class="left">
      <input type="text" value="Number" name="pnumber2" class="signup-name-input"/>
      </span> </div>
    <div class="sigup-row">
      <label> Password:</label>
      <input type="password" name="pwd" value="Enter Password" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Birth Date: </label>
      <div class="signup-date-input">
        <select class="selectbox-small" name="day">
          <option value="">Day</option>
          <?php
		  $i=1;
		  while($i<=31)
		  {
			  echo "<option value=$i>$i</option>";
			  $i++;
		  }
		  ?>
        </select>
      </div>
      <div class="signup-date-input">
        <select class="selectbox-small" name="month">
          <option value="">Month</option>
          <?php
          $i=1;
		  while($i<13)
		  {
			  echo "<option value=$i>$i</option>";
			  $i++;
		  }
		  ?>
        </select>
      </div>
      <div class="signup-date-input">
        <select class="selectbox-small" name="year">
          <option value="">Year</option>
          <?php
          $i=date('Y');
		  $i=$i-10;
		  while($i>1900)
		  {
			  echo "<option value=$i>$i</option>";
			  $i--;
		  }
		  ?>
        </select>
      </div>
    </div>
  
    <div class="sigup-row">
      <label> Gender:</label>
      <div class="radio">
        <input type="radio" name="sex" value="Male" />
        Male </div>
      <div class="radio">
        <input type="radio" name="sex" value="Female" />
        Female </div>
    </div>
    <div class="sigup-row clear">
    <label></label>
    <label id="valid" style="color:#F00; display:none" class="label">Enter Above Details</label>
      <input type="submit" value="Sign up" class="signup-btn"/>
    </div>
  </div>
</div>
</form>
<?php
include("footer.php");
?>
<!-- content end -->
<!-- footer start -->
<!-- footer end -->
</body>
</html>
