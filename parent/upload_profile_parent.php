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
<body style="margin:0px">
<form name="edit" action="" method="post" enctype="multipart/form-data">
   
   <table width="100%" align="center" border="1" cellpadding="0" cellspacing="0">  
    <tr>
      <td>
         Profile Picture:</td>    
    <td>
        <img src='<?php echo $data1['image'] ?>' width="50" height="50" />
       <input type="file" name="sh_image" id="sh_image"/></td>
       
    </tr>
      
<tr><td>Parent Name:</td>
	
	<td><input name="f_name" type="text"class="login-input" maxlength="20" placeholder="First Name" style="width:85px; height:18px; font-size:15px" onclick="validation('f_n')" value="<?php echo $data1['f_name']; ?>" readonly="readonly"/>
 <input name="l_name" type="text" maxlength="20" class="login-input" placeholder="Last Name" style="width:85px; height:18px; font-size:15px" onclick="validation('l_n')" value="<?php echo $data1['l_name']; ?>" readonly="readonly"/></td>
</tr>

<tr>
	<td>Occupation:</td>
	<td>
 <input type="text" name="occ" class="login-input"maxlength="50" placeholder="Enter Occupation"   onclick="validation('o_n')" value="<?php echo $data1['occ']; ?>"/>	
	</td>
</tr>

<tr>
	<td>Email:</td>
	<td><input type="text" name="email" class="login-input" placeholder="Enter Email Address" onclick="validation('e_i')" value="<?php echo $data1['email']; ?>" readonly="readonly"/>
</td>

</tr>

<tr>
	<td>Mobile:</td>
	<td>
    <input type="text" name="m_no" maxlength="10" class="login-input" placeholder="Enter Mobile Number"  onclick="validation('m_n')" value="<?php echo $data1['contact']; ?>"/>
	</td>
</tr>

<tr>
	<td>Phone No:</td>
	<td>
    <input type="text" name="p_no"  class="login-input" onclick="validation('p_n')" placeholder="Enter Phone Number"  maxlength="12"  value="<?php echo $data1['contact2']; ?>"/>
	</td>
</tr>

<tr>	
	<td>Birth Date:</td>
	
	<td  >
	<select name="day" class="selectbox1">
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
<select name="month" class="selectbox1">
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
<select name="year" class="selectbox1">
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
</td>
</tr>

<tr>
	<td>Gender:</td>
	<td style="color:#000; font-size:15px">
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
    </td>
</tr>
 </table>
<table>

<tr><td colspan="2"><h2><u>Address Detail</u></h2></td>
</tr>
<tr>	
        <td>
        Permenent Address:
        </td>
        <td>
        	<input type="text" name="tuaddress" id="tuaddress" class="login-input" value="<?php echo $data['p_p_add']; ?>" /></td>
            </tr>
		    <tr>   
            <td> Town : </td><td><input type="text" class="login-input" name="town" id="town" value="<?php echo $data['p_town']; ?>"/></td>
			</tr>
            <tr>
           <td> City : </td><td>
           <select name="city" id="city" class="selectbox">
           <option selected="selected"><?php echo $data['p_city']; ?></option>
		<option value="ahmd">Ahmedabad</option>
		<option value="Baroda">Baroda</option>
		<option value="Surat">Surat</option>
		<option value="Bharuch">Bharuch</option>
            </select></td></tr>
			<tr>
            <td>
            Zip code : </td><td><input type="text" class="login-input" name="zip" id="zipcode" value="<?php echo $data['p_zipcode']; ?>" /></td>
			</tr>
            <tr>
            <td>
            
 	         Neighberhood : </td><td><input type="text" class="login-input" name="neigh" id="neighberhood" value="<?php echo $data['p_neighbour']; ?>" /></td>
            </tr>
    
    <tr>
		<td>
			<label >Temparary Address: 
        </td>
        <td>
        	<input type="text" name="tpaddress" class="login-input" id="taddress" value="<?php echo $data['p_t_add']; ?>"/>
</td>
</tr>
</table>
<table>
                <tr><td colspan="2" ><h2><u>Education Detail</u></h2></td>
</tr><tr>
       	<td>
        	Education Detail :
        </td>
        <td>
        	<select name="edudetail" class="selectbox" id="edudetail">
            <option selected="selected"><?php echo $data['p_edu']; ?></option>
            <option value="10th">10th</option>
            <option value="12th">12th</option>
            <option value="Graduate">Graduate</option>
            <option value="Post Graduate">Post Graduate</option>
            
            </select>
        </td>
        
       </tr>
    <tr style="background-color:#f1f1f1">
    <td colspan="2" align="center">
    <input type="submit" name="submit" value="Update" class="login-btn" />  
    </td>
    </tr>
    </table>

</form>
</body>
</html>