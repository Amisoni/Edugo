<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Edu Go" />
<meta name="keywords" content="Edu Go" />
<title>Educ Go</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
include("header.php");
?>
<!-- content start -->
<!-- left section start -->
<!-- left section end -->
<form action="../login.php" method="post">
<div class="wrapper">
  <div class="left-panel">
    <div class="parents"><a href="#"></a></div>
    <div class="school"><a href="#"></a></div>
    <div class="tutor"><a href="#"></a></div>
    <div class="teacher"><a href="#"></a></div>
    <div class="middle-icons studentB"><a href="#"></a></div>
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
      </span> </div>
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
      <input type="password" value="Enter Password" class="signup-big-input"/>
    </div>
    <div class="sigup-row">
      <label> Phone No: </label>
      <div class="signup-date-input">
        <select class="selectbox-small" name="day">
          <option>Day</option>
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
          <option>Month</option>
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
          <option>Year</option>
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
