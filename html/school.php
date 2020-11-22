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
	//alert("hi...");
var x=document.forms["myform"]["s_name"].value;
//alert("hi..");
var y=document.forms["myform"]["email"].value;
var z=document.forms["myform"]["contact"].value;
var l=document.forms["myform"]["pnumber"].value;
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

if(l==null || l=="")
{
	//document.getElementById("lan").style.display="block";
}
if(x==null || x=="")
{
	//document.getElementById("school").style.display="block";
	s=s+a+"Enter School Name\n";
	a++;
}
if(!reg.test(x))
	{
		//document.getElementById("school").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}

if(y==null || y=="")
{
	//document.getElementById("e_id").style.display="block";
	s=s+a+"Enter Email\n";
	a++;
}
else
{
	if (!filter.test(y)) {
		//document.getElementById("e_id").style.display="block";
    s=s+a+"Please provide a valid email address\n";
	a++;
	}	
}
if(z==null || z=="")
{
	//document.getElementById("cnt").style.display="block";
	s=s+a+"Enter Contact No.\n";
	a++;
}
else
	{	
	
      if((!numbers.test(z))|| z.length!=10)
      { 
	  //document.getElementById("cnt").style.display="block";  
      s=s+a+"Enter Valid Number \n";
	  a++;
      }  
	}

if(p==null || p=="")
{
	//document.getElementById("p_name").style.display="block";
	s=s+a+"Enter HOD \n";
	a++;
}
if(!reg1.test(p))
	{
		//document.getElementById("p_name").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}

if(q==null || q=="")
{
	//document.getElementById("std").style.display="block";
	s=s+a+"Enter Student\n";
	a++;
}
if(!reg2.test(q))
	{
		//document.getElementById("std").style.display="block";
		s=s+a+"MAximum 20 character...\n";
		a++;
	}
if(r=="Select Affiliation")
{
	//document.getElementById("afflia").style.display="block";
	s=s+a+"Enter Affilation\n";
	a++;
}

if(t==null || t=="")
{
	//document.getElementById("pwd1").style.display="block";
	s=s+a+"Enter Password\n";
	a++;
}

 	if(t.length<8)
      {   
	   //document.getElementById("pwd1").style.display="block";
      s=s+a+"Enter At Least 8 character Password \n";
	  a++;
	  }
	 // alert("hi..");
if(d=="" || m=="" || yy=="" )
	{
		//document.getElementById("b1_date").style.display="block";
		s=s+a+"Select Proper Date\n";
		a++;
	}
	
	
	
	var b_no=0;
	for(var i=0;i<3;i++)
	{
		//alert("hi..");
		if(document.getElementById("b["+i+"]").checked==true)
		{
			//alert("hi..me");
			b_no++;
			
		}
	
		
		
	}
		  
	//alert(no);
	if(b_no<=0)
	{
		//document.getElementById("medium").style.display="block";
	}
	// alert("hi...");
if (s!="")
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
<form id="myfrom" action="school_php.php" method="post" name="myform" onsubmit="return validateForm()">
<div class="wrapper">
  <div class="left-panel">
    <div class="parents"><a href="parent.php"></a></div>
    <div class="student1"><a href="first.php"></a></div>
    <div class="tutor"><a href="tutor.php"></a></div>
    <div class="teacher"><a href="feculty.php"></a></div>
    <div class="middle-icons schoolB"><a href="school.php"></a></div>
  </div>
  <div class="signup">
    <div class="indicator"></div>
    <h1>Student Sign Up</h1>
    <div class="sigup-row">
      <label> School Name:</label>
      <input type="text" value="School Name" name="s_name" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Email:</label>
      <input type="text" name="email" value="Enter Email Address" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Principal Name:</label>
      <input type="text" name="HOD" value="Enter Principal Name" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Strength:</label>
      <input type="text" name="student" value="Enter Principal Name" class="signup-big-input"/>
    </div>
   
    <div class="sigup-row">
      <label> Medium:</label>
      <div class="radio">
        <input type="checkbox" name="hindi" value="Hindi," id="b[0]"/>Hindi
      <div class="radio">
        <input type="checkbox" name="english" value="English," id="b[1]"/>English
        </div>
      <div class="radio">
        <input type="checkbox" name="gujarati" value="Gujarati" id="b[2]"/>Gujarati </div>
      <div class="radio">
        <input type="checkbox" name="Other" value="Gujarati" id="b[2]"/>Other
        Other </div>
    </div>
    <div class="sigup-row">
      <label> Mobile No:</label>
      <input type="text" value="Mobile Number" name="contact" class="signup-big-input"/>
    </div>
    <div class="sigup-row"> <span class="left">
      <label> Phone No: </label>
      <input type="text" value="+91" name="pnumber" class="signup-small-input"/>
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
      <label> Established Date: </label>
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
      <label> Affiliation:</label>
      <div class="radio">
        <input type="radio" name="affi" value="State Board" />
        State Board </div>
      <div class="radio">
        <input type="radio" name="affi" value="CBSE" />
        CBSE </div>
      <div class="radio">
        <input type="radio" name="affi" value="ICSE" />
        ICSE </div>
      <div class="radio">
        <input type="radio" name="affi" value="IB" />
        IB </div>
    </div>
    <div class="sigup-row">
      <label> Genter:</label>
      <div class="radio">
        <input type="radio" name="sex" value="boy" />
        Boys </div>
      <div class="radio">
        <input type="radio" name="sex" value="girl" />
        Girls </div>
      <div class="radio">
        <input type="radio" name="sex" value="coeducation" />
        Coeducation </div>
    </div>
    <div class="sigup-row clear">
      <label> </label>
      <input type="submit" value="Sign up" class="signup-btn" /><label id="valid" style="color:#F00; displays:none" class="label">Enter Above Details</label>
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
