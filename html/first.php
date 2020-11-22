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
	
	var x=document.forms["myform"]["first_name"].value;
	
	var y=document.forms["myform"]["last_name"].value;
	
	var z=document.forms["myform"]["school_name"].value;
	var p=document.forms["myform"]["email"].value;
	var q=document.forms["myform"]["standard"].value;
	alert("hi..");
	//var g=document.forms["myform"]["Graduate"].value;
	var r=document.forms["myform"]["number"].value;
	var t=document.forms["myform"]["sex"].value;
	var u=document.forms["myform"]["pwd"].value;
	var d=document.forms["myform"]["day"].value;
	var m=document.forms["myform"]["month"].value;
	var yy=document.forms["myform"]["year"].value;
	//alert("hi..");
	var numbers1 = /^[0-9]+$/;  
	var char = /^[A-Za-z]+$/;  
	var reg = /^([a-zA-Z0-9]{0,8})$/;
	var s="";
	var a=1;
	alert("hi..");
	if(x==null || x=="" || y==null || y=="")
	{
		s=s+a+"Enter first Name\n";
		//document.getElementById("name").style.display="block";
		a++;
	}
	/*if()
	{
		s=s+a+"Enter Last Name\n";
		a++;
	}*/
	if(z==null || z=="")
	{
		//document.getElementById("school").style.display="block";
		s=s+a+"Enter School Name\n";
		a++;
	}
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(p==null || p=="")
	{
		//document.getElementById("emailv").style.display="block";
		s=s+a+"Enter Email\n";
		a++;
	}	
	if(!filter.test(p))
	{
		///document.getElementById("emailv").style.display="block";
		s=s+a+"Enter Valid Email\n";
		a++;
	}
	if((q==null || q=="Select Standard") && (g==null || g=="Select Graduate"))
	{
		//document.getElementById("std").style.display="block";
		s=s+a+"Select standard\n";
		a++;
	}
	
	
	if(r==null || r=="" )
	{
		//document.getElementById("cnt").style.display="block";
		s=s+a+"Enter Number\n";
		a++;
	}
	if( !numbers1.test(r) || r.length!=10)
	{
		//document.getElementById("cnt").style.display="block";
		s=s+a+"Enter Valid Number\n";
		a++;
	}
	
	if(u==null|| u=="")
	{
		//document.getElementById("pwd1").style.display="block";
		s=s+a+"Enter Password\n";
		a++;
	}
	 
	 if(u.length<8)
     {   
	   		//document.getElementById("pwd1").style.display="block";
      		s=s+a+"Enter At Least 6 character Password \n";
	  		a++;
	 }
	
	 if(d=="" || m=="" || yy=="" )
	{
		//document.getElementById("b_date").style.display="block";
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
<body>
<?php
include("header.php");
?>
<!-- content start -->
<!-- left section start -->
<!-- left section end -->
<form id="myfrom" action="studentphp.php" method="post" name="myform" onsubmit="return validateForm()">
<div class="wrapper">
  <div class="left-panel">
    <div class="parents"><a href="parent.php"></a></div>
    <div class="school"><a href="school.php"></a></div>
    <div class="tutor"><a href="tutor.php"></a></div>
    <div class="teacher"><a href="feculty.php"></a></div>
    <div class="middle-icons studentB"><a href="first.php"></a></div>
  </div>
  <div class="signup">
    <div class="indicator"></div>
    <h1>Student Sign Up</h1>
    <div class="sigup-row"> <span class="left">
      <label> First Name:</label>
      <input type="text" value="First Name" name="first_name" class="signup-name-input"/>
      
      </span> <span class="left">
      <label class="label2"> Last Name:</label>
      <input type="text" value="Last Name" name="last_name" class="signup-name-input"/> 
      </span>
      </div>
    <div class="sigup-row">
      <label> School Name:</label>
      <input type="text" value="School Name" name="school_name" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Email:</label>
      <input type="text" name="email" value="Enter Email Address" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Standard:</label>
      <div class="signup-big-input right">
        <select class="selectbox" name="standard">
          <option>Select Standard</option>
          <?php
			include("../config.php");
			$result12=mysql_query("select * from class");
			while($data12=mysql_fetch_array($result12))
			{
					echo "<option value='".$data12[0]."' selected='selected'>Standard ".$data12[1]."</option>";
			}
			?>
        </select>
      </div>
    </div>
    <div class="sigup-row">
      <label> Medium:</label>
      <div class="radio">
        <input type="radio" name="md" value="English" />
        English </div>
      <div class="radio">
        <input type="radio" name="md" value="Hindi" />
        Hindi </div>
      <div class="radio">
        <input type="radio" name="md" value="Gujarati" />
        Gujarati </div>
      <div class="radio">
        <input type="radio" name="md" value="Other" />
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
        <input type="radio" name="sex" value="Male" />
        Male </div>
      <div class="radio">
        <input type="radio" name="sex" value="Female" />
        Female </div>
    </div>
    <div class="sigup-row clear">
      <label> </label>
      <input type="submit" value="Sign up" class="signup-btn"/><?php 
if(isset($_GET['p']))
{
	echo "Email ID is Allready Exist";
}
?><label id="valid" style="color:#F00; display:none" class="label">Enter Above Details</label>
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
