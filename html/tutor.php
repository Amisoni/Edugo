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
	alert("hi..");
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
	alert("hi..");
if(x==null || x=="")
{
	
	s=s+a+"Enter first Name\n";
	//document.getElementById("name").style.display="block";
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
	s=s+a+"Enter Last Name\n";
	//document.getElementById("name").style.display="block";
	a++;
}

if(z==null || z=="")
{
	s=s+a+"Enter Institute Name\n";
	//document.getElementById("sname").style.display="block";
	a++;
}
if(!reg1.test(z))
	{
		//document.getElementById("sname").style.display="block";
		s=s+a+"MAximum 50 character...\n";
		a++;
	}
	
if(p==null || p=="")
{
	s=s+a+"Enter Email\n";
	//document.getElementById("email").style.display="block";
	a++;
}
else
{
	if (!filter.test(p)) {
    s=s+a+"Please provide a valid email address\n";
	
	}
}


if(r==null || r=="")
{
	s=s+a+"Enter Subject\n";
	//document.getElementById("sub").style.display="block";
	a++;
}

if(t==null || t=="")
{
	s=s+a+"Enter Contact Number\n";
	//document.getElementById("contact").style.display="block";
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
	//document.getElementById("pass").style.display="block";
	a++;
}
 if(u.length<8)
      {   
	  // document.getElementById("pass").style.display="block";
      s=s+a+"Enter At Least 6 character Password \n";
	  a++;
      } 
if(d=="" || m=="" || yy=="" )
	{
		s=s+a+"Select Proper Date\n";
		//document.getElementById("bd").style.display="block";
		a++;
	}
	
	var a_no=0;
	for(var i=0;i<4;i++)
	{
		//alert("hi..");
		if(document.getElementById("c["+i+"]").checked==true)
		{
			//alert("hi..me");
			a_no++;
		}
	
		
		
	}
	//alert(no);
	if(a_no<=0)
	{
		//document.getElementById("fei").style.display="block";
	}
	b_no=0;
	for(i=0;i<3;i++)
	{
		//alert("hi..");
		if(document.getElementById("b["+i+"]").checked==true)
		{
			//alert("hi..me");
			b_no++;
		}
	
		
		
	}
	alert("hi..me");
	//alert(no);
	
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
<body>
<?php
include("header.php");
?>
<!-- content start -->
<!-- left section start -->
<!-- left section end -->
<form id="myfrom" action="tutorphp.php" method="post" name="myform" onsubmit="return validateForm()">
<div class="wrapper">
  <div class="left-panel">
    <div class="parents"><a href="parent.php"></a></div>
    <div class="school"><a href="school.php"></a></div>
    <div class="student"><a href="first.php"></a></div>
    <div class="setstudent"><a href="feculty.php"></a></div>
    <div class="middle-icons tutorB"><a href="tutor.php"></a></div>
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
      <label> School Name:</label>
      <input type="text" value="School Name" name="institute" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Email:</label>
      <input type="text" name="email" value="Enter Email Address" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Subject:</label>
      <input type="text" name="sub" value="Enter Email Address" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Standard:</label>
      
        <?php
	include("../config.php");
	$result1=mysql_query("select * from class");
    $i=1;
	while(@$data1=mysql_fetch_array($result1))
	{
		//echo "hi..".$i%4;
		if(($i%4)<1)
		{
			//echo "<br />";	
		}
		echo "<input type='checkbox' name='cb[]' value='".$data1[0]."' />".$data1[1];
		$i++;
		
	}
	?></select>
     
    </div>
    <div class="sigup-row">
      <label> Medium:</label>
      <div class="radio">
        <input type="checkbox" name="hindi" value="Hindi," id="b[0]"/>Hindi	
        </div>
      <div class="radio">
        <input type="checkbox" name="english" value="English," id="b[1]"/>English
         </div>
      <div class="radio">
        <input type="checkbox" name="gujarati" value="Gujarati" id="b[2]"/>Gujarati
         </div>
      <div class="radio">
        <input type="checkbox" name="Other" value="Other" id="b[3]"/>
        Other </div>
    </div>
    <div class="sigup-row">
      <label> Mobile No:</label>
      <input type="text" value="Mobile Number" name="number" class="signup-big-input"/>
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
      <label> Affiliation:</label>
      <div class="radio">
        <input type="checkbox" name="state" value="State Board," id="c[0]" />
        State Board </div>
      <div class="radio">
        <input type="checkbox" name="CBSE" value="CBSE," id="c[1]"/>
        CBSE </div>
      <div class="radio">
       <input type="checkbox" name="ICSE" value="ICSE," id="c[2]"/>
        ICSE </div>
      <div class="radio">
        <input type="checkbox" name="IB" value="IB" id="c[3]"/>
        IB </div>
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
      <label> </label>
      <input type="submit" value="Sign up" class="signup-btn"/><label id="valid" style="color:#F00; display:none" class="label">Enter Above Details</label>
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
