<?php
include("../config.php");

$id=$_SESSION['id'];
//echo "select * from s_info where s_id=".$id;
if(isset($_POST['submit']))
{
	if ($_FILES['sh_image']['type'] != 'image/jpeg')
	{
		//echo "file not supported";
	}
	else
	{
		move_uploaded_file($_FILES['sh_image']['tmp_name'], "images/".$_FILES['sh_image']['name']);
		$filepath = "images/".$_FILES['sh_image']['name']; 
		
		if($_SESSION['id']!="")
		{
			$id=$_SESSION['id'];
			$q="select * from father where ID=".$id;
			$res7=mysql_query($q);
			$data7=mysql_fetch_array($res7);
			
		}
		mysql_query("update father set image='$filepath' where id=$id" ) ;
	}
	mysql_query("update parent set p_p_add='".$_POST['tuaddress']."',p_town='".$_POST['town']."', p_t_add='".$_POST['tpaddress']."', p_city='".$_POST['city']."',p_zipcode='".$_POST['zip']."' , p_neighbour='".$_POST['neigh']."' where p_id=".$id);
	@mysql_query("update father set occ='".$_POST['occ']."',contact='".$_POST['m_no']."', contact2='".$_POST['p_no']."', sex='".$_POST['sex']."', birth_date='".$_POST['year']."-".$_POST['month']."-".$_POST['day']."' where id=".$id);
	mysql_query("update parent set p_edu='".$_POST['edudetail']."' where p_id=".$id); 
}

$result1=mysql_query("select * from father where id=".$id);
$data1=mysql_fetch_array($result1);
$date=$data1['birth_date'];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

$result=mysql_query("select * from parent where p_id=".$id);
$data=mysql_fetch_array($result);
//echo $data[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/popup.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="../css/popup1.js" type="text/javascript"></script>
<script>
function display(id)
{
	
	document.getElementById('s_add').style.display="none";
	document.getElementById('s_acc').style.display="none";
	document.getElementById('cpwd').style.display="none";
	document.getElementById('s_det').style.display="none";
	

	
	//document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	//document.getElementById('p_del').style.display="none";
	//document.getElementById('pro').style.display="none";
	document.getElementById('archi').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('cpwd1').style.backgroundColor="gray";
	document.getElementById('s_acc1').style.backgroundColor="gray";
	
	document.getElementById('s_det1').style.backgroundColor="gray";
	//document.getElementById('p_del1').style.backgroundColor="gray";
	//document.getElementById('pro1').style.backgroundColor="blue";
	document.getElementById('archi1').style.backgroundColor="gray";
	
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";
}

function Change_Address()
{	


var padd=document.forms["edit"]["tuaddress"].value;
var ptown=document.forms["edit"]["town"].value;
var ptadd=document.forms["edit"]["tpaddress"].value;
//var pcity=document.forms["edit"]["city"].value;
//var pstate=document.forms["edit"]["state"].value;
var pzip=document.forms["edit"]["zip"].value;
var pneigh=document.forms["edit"]["neigh"].value;
var a=document.getElementById("city");	
var city=a.options[a.selectedIndex].value;

	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  
  	
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addmsg1").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?padd="+padd+"&&ptown="+ptown+"&&ptadd="+ptadd+"&&city="+city+"&&pzip="+pzip+"&&pneigh="+pneigh,true);
	 //xmlhttp.open("GET","edit_php.php?padd="+padd+"&&ppadd="+ppadd+"&&pcity="+pcity+"&&pzip="+pzip+"&&pneg="+pneg,true); 
	 xmlhttp.send();

}

function Change_Qulification()
{

var a=document.getElementById("edudetail");	
var pqua=a.options[a.selectedIndex].value;


//alert(city);
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  
  	
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addmsg2").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?pqua="+pqua,true);
xmlhttp.send();
	
}
function Change_Password()
{
	
var old=document.forms["edit"]["opwd"].value;
var pwd=document.forms["edit"]["npwd"].value;
var cpwd=document.forms["edit"]["rpwd"].value;

	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  
  	
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pmsg").innerHTML=xmlhttp.responseText;
    }
  	}
  
	 xmlhttp.open("GET","edit_php.php?old="+old+"&&new="+pwd+"&&cnew="+cpwd,true); 
	 xmlhttp.send();
}


function get_radio_value()
{
            var inputs = document.getElementsByName("sex");
            for (var i = 0; i < inputs.length; i++) {
              if (inputs[i].checked) {
                return inputs[i].value;
              }
      }
}
function Change_Account()
{	
var pocc=document.forms["edit"]["occ"].value;
var pday=document.forms["edit"]["day"].value;
var pmonth=document.forms["edit"]["month"].value;
var pyear=document.forms["edit"]["year"].value;
var pcontact=document.forms["edit"]["number1"].value;

var pcontact2=document.forms["edit"]["pnumber2"].value;
var psex = get_radio_value();

	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  
  	
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("addmsg3").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?pocc="+pocc+"&&pcontact="+pcontact+"&&pday="+pday+"&&pmonth="+pmonth+"&&pyear="+pyear+"&&pcontact2="+pcontact2+"&&psex="+psex,true);
	 //xmlhttp.open("GET","edit_php.php?padd="+padd+"&&ppadd="+ppadd+"&&pcity="+pcity+"&&pzip="+pzip+"&&pneg="+pneg,true); 
	 xmlhttp.send();

}


</script>

  <link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
 u{
     color:#0099CC; 
    }
td
{
	font-family:Calibri, Verdana;
	font-size:14px;
}
</style> 
</head>
<body style="margin:0px" onload="set_city()">

<form name="edit" id="myfrom" method="post" action="#" enctype="multipart/form-data">
 
 
  <div class="signup">
    <div class="indicator"></div>
    <h1>Parent Detail</h1>
   
    <div class="sigup-row"> <span class="left">
    <img src='<?php echo $data1['image'] ?>' width="70" height="70" style="margin-left:350px; margin-top:-200px;" />
    <br />
     Profile Picture : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="sh_image" id="sh_image" />
      <br />
	<br />
      <label> First Name:</label><label id="name" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
  <input type="text" placeholder="First Name" name="f_name" class="signup-name-input" onfocus="validation('f_n')" value="<?php echo $data1['f_name']; ?>" readonly="readonly"/>
      
      </span> <span class="left">
      <label class="label2"> Last Name:</label><label id="name" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
      <input type="text" placeholder="Last Name" name="l_name" class="signup-name-input" onfocus="validation('l_n')" value="<?php echo $data1['l_name']; ?>" readonly="readonly"/> 
      </span>
      </div>
    <div class="sigup-row">
      <label> Occupation:</label><label id="occu" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
      <input type="text" placeholder="Your Occupation" name="occ" class="signup-big-input" onfocus="validation('o_n')" value="<?php echo $data1['occ']; ?>" />
    </div>
    <div class="sigup-row">
      <label> Email:</label><label id="e_id" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
      <input type="text" name="email" placeholder="Enter Email Address" class="signup-big-input" onfocus="validation('e_i')" value="<?php echo $data1['email']; ?>" readonly="readonly"/>
    </div>
    <div class="sigup-row">
      <label> Mobile No:</label><label id="m_no1" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
      <input type="text" placeholder="Mobile Number" name="m_no" class="signup-big-input" onfocus="validation('m_n')" value="<?php echo $data1['contact']; ?>"/>
    </div>
    <div class="sigup-row"> <span class="left">
      <label> Phone No: </label>
      <input type="text" name="p_no"  class="signup-big-input" onclick="validation('p_n')" placeholder="Enter Phone Number"  maxlength="12"  value="<?php echo $data1['contact2']; ?>"/>
    
    <div class="sigup-row">
      <label> Birth Date: </label><label id="b_date1" style="color:#F00; display:none;margin-left:-110px" class="label">*</label>
      <div class="signup-date-input">
        <select name="day" class="selectbox-small">
	<option selected="selected"><?php echo $day; ?></option>
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
      </div>
      <div class="signup-date-input"> <span class="left">
        <select name="month" class="selectbox-small">
<option selected="selected"><?php echo $month; ?></option>
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
</span>
      </div>
      <div class="signup-date-input">
        <select name="year" class="selectbox-small">
<option selected="selected" ><?php echo $year; ?></option>
<?php
$i=1900;
while($i<2031)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
</select>
      </div>
    </div>
  
    <div class="sigup-row" onmouseover="validation('drop_sex')" onkeyup="validation('drop_sex')"> <span class="left">
      <label style="margin-top:-13px;"> Gender:</label>
     <div class="radio">
  <?php 
    if($data1['sex']=="Male")
	{
		echo '<input name="sex" type="radio" value="Male" checked="checked"/>Male';
		echo '<input type="radio" name="sex" value="Female" />Female';
	}
	else
	{
		echo '<input name="sex" type="radio" value="Male" />Male';
		echo '<input type="radio" name="sex" value="Female" checked="checked" />Female';	
		
	}
	
	?>
     
    </div>
    </span>
    </div>
    
    <div class="sigup-row"> <span class="left">
     <label>Permanent Address:</label>
     <input type="text" name="tuaddress" id="tuaddress" class="signup-big-input" value="<?php echo $data['p_p_add']; ?>" />
      </span> 
      </div>
     
      <div class="sigup-row"> <span class="left">
    <label>Town :</label>
      <input type="text" class="signup-big-input" name="town" id="town" value="<?php echo $data['p_town']; ?>"/>
      </span> 
      </div>
     
     <div class="sigup-row">
     <span class="left-panel"> 
      <label>City :</label>
      <div class="signup-date-input">
              <select name="city" id="city" class="selectbox-small">
           <option selected="selected"><?php echo $data['p_city']; ?></option>
		<option value="ahmd">Ahmedabad</option>
		<option value="Baroda">Baroda</option>
		<option value="Surat">Surat</option>
		<option value="Bharuch">Bharuch</option>
            </select>
            </div>
      </span>
      </div>
     
      <div class="sigup-row"> <span class="left">
      <label>Zip code :</label><input type="text" class="signup-big-input" name="zip" id="zipcode" value="<?php echo $data['p_zipcode']; ?>" />
      </span>
      </div>
     
      <div class="sigup-row"> <span class="left">
      <label>Neighbourhood :</label><input type="text" class="signup-big-input" name="neigh" id="neighberhood" value="<?php echo $data['p_neighbour']; ?>" />
      </span></div>
     
      <div class="sigup-row"> <span class="left">
      <label>Temporary Address:</label>
       
        	<input type="text" name="tpaddress" class="signup-big-input" id="taddress" value="<?php echo $data['p_t_add']; ?>"/>
      </span></div>
     
      <div class="sigup-row"> <span class="left">
            <label>Education Detail :</label>
      <div class="signup-name-input">
         <select name="edudetail" class="selectbox-small" id="edudetail"  style="width:110px;">
            <option selected="selected"><?php echo $data['p_edu']; ?></option>
            <option value="10th">10th</option>
            <option value="12th">12th</option>
            <option value="Graduate">Graduate</option>
            <option value="Post Graduate">Post Graduate</option>
     	 </select>
		</div>
      </span></div>
  <div class="sigup-row"><span class="left-panel"> 
      <input type="submit" name="submit" class="signup-btn" value="Update" >
      </span>
      </div>
</div>
</form>
    
</body>
</html>