<?php
include("../config.php");

$id=$_SESSION['id'];
//echo "select * from s_info where s_id=".$id;
if(isset($_POST['first_name']))
{
	
include("../config.php");
if ($_FILES['sh_image']['type'] != 'image/jpeg')
			{
			
				//echo "file not supported";
			}
			else
			{
				
			move_uploaded_file($_FILES['sh_image']['tmp_name'], "images/".$_FILES['sh_image']['name']);
			$filepath = "images/".$_FILES['sh_image']['name']; 
			$id=$_SESSION['id'];
						
			mysql_query("insert into profile_picture (s_id,image) values(".$id.",'".$filepath."')");
			$r1=mysql_query("select max(p_id) from profile_picture");
			$d1=mysql_fetch_array($r1);
			$nid=$d1[0];
			mysql_query("insert into profile(n_id,t_id,s_id) values (".$nid.",1,".$id.")");
			mysql_query("update student set image='$filepath' where id=$id" ) ;
			}
			if($_SESSION['id']!="")
			{
			$q="select * from student where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);			
			}
			@mysql_query("update s_info set s_p_add='".$_POST['paddress']."', s_town='".$_POST['town']."', s_zipcode='".$_POST['zipcode']."',s_neighbour='".$_POST['neighberhood']."' , s_t_add='".$_POST['taddress']."', s_city='".$_POST['city']."' where s_id=".$id);
			mysql_query("update s_info set s_schoolname='".$_POST['schoolname']."', s_principalname='".$_POST['sch_pri_name']."', s_contactnumber='".$_POST['contactno']."' where s_id=".$id);
			
			@mysql_query("update s_info set s_relegions='".$_POST['Relegions']."', s_description='".$_POST['discription']."' where s_id=".$id);
			mysql_query("update s_info set s_hobby='".$_POST['hobby']."', s_sport='".$_POST['sport']."', s_subject='".$_POST['subject']."' where s_id=".$id);
			mysql_query("update student set s_name='".$_POST['school_name']."', contact=".$_POST['number'].",phone=".$_POST['pnumber'].", sex='".$_POST['sex']."', birth_date='".$_POST['year']."-".$_POST['month']."-".$_POST['day']."', std='".$_POST['standard']."' where id=".$id);
			
}
$result1=mysql_query("select * from student where id=".$id);
$data1=mysql_fetch_array($result1);
$result=mysql_query("select * from s_info where s_id=".$id);
$data=mysql_fetch_array($result);
//echo $data[0];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css" />
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function change()
{
	//alert("hi....");
	var x=document.forms["edit"]["standard"].value;
	//alert(x);
	document.getElementById("gra").options[0].selected = true;
	//document.getElementById("stand").options[0].selected = true; 
	if(x=="Graduate")
	{
		document.getElementById("gra").style.display="block";
		//document.getElementById("stand").style.display="block";	
	}
	else
	{
		//document.getElementById("stand").style.display="none";
		document.getElementById("gra").style.display="none";
	}
		
}
function display(id)
{
	document.getElementById('s_add').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	document.getElementById('pro').style.display="none";
	document.getElementById('cpwd').style.display="none";
	document.getElementById('archi').style.display="none";
	document.getElementById('acco').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	document.getElementById('pro1').style.backgroundColor="gray";
	document.getElementById('archi1').style.backgroundColor="gray";
	document.getElementById('cpwd1').style.backgroundColor="gray";
	document.getElementById('acco1').style.backgroundColor="gray";
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";
}
function Change_Password()
{
	
var old=document.forms["edit"]["opwd"].value;
var pwd=document.forms["edit"]["npwd"].value;
var cpwd=document.forms["edit"]["rpwd"].value;
var reg = /^([a-zA-Z0-9]{0,8})$/;
	var opwd1=document.forms["edit"]["opwd"].value;
	var npwd1=document.forms["edit"]["npwd"].value;
	var rpwd1=document.forms["edit"]["rpwd"].value;
	/*if(rpwd1.length<8)
     {   
	   		alert("Enter AtLeast 8 character Password \n");
	  		return false;
	 }*/
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
  
	 xmlhttp.open("GET","edit_php.php?old="+old+"&&new="+pwd+"&&cnew="+cpwd+"&&rpwd1="+rpwd1,true); 
	 xmlhttp.send();
}

function set_city()
{
//alert("hi...");	
	<?php
  $d=explode("-",$data1['birth_date']);
  ?>
  //alert ('<?php echo $d[2]; ?>');
var ddl = document.getElementById('day');
	var opts = ddl.options.length;
	for (var i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[2]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('month');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[1]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('city');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['s_city']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('year');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[0]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	var no=1;
	ddl = document.getElementById('stand');
	opts = ddl.options.length;
	
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data1['std']; ?>'){
		no=0;
        ddl.options[i].selected = true;
        break;
    }
	}
	//alert("hi..."+no);
	if(no==1)
	{
	//alert("hi...");
	document.getElementById('stand').options[9].selected = true;
	document.getElementById("gra").style.display="block";
	ddl = document.getElementById('gra');
	opts = ddl.options.length;
		for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data1['std']; ?>'){
		no=1;
        ddl.options[i].selected = true;
        break;
    }
	}
	}
	
}


function Change_Address()
{	
document.getElementById("z_id").style.display="none"; 
var padd=document.forms["edit"]["paddress"].value;
var ptown=document.forms["edit"]["town"].value;
var pzip=document.forms["edit"]["zipcode"].value;
var pneg=document.forms["edit"]["neighberhood"].value;
var tadd=document.forms["edit"]["taddress"].value;
var a=document.getElementById("city");	
var city=a.options[a.selectedIndex].value;
var numbers = /^[0-9]+$/; 
 if((!numbers.test(pzip))|| pzip.length!=6)
      { 
	  document.getElementById("z_id").style.display="block"; 
	  document.getElementById("addmsg").innerHTML=""; 
      
      }  
	 else
	 {
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
    document.getElementById("addmsg").innerHTML=xmlhttp.responseText;
    }
  	}

  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip="+pzip+"&&pneg="+pneg+"&&tadd="+tadd+"&&city="+city,true); 
	 xmlhttp.send();
}
}
function change_interst()
{
	var hobby=document.forms["edit"]["hobby"].value;
	var sport=document.forms["edit"]["sport"].value;
	var subject=document.forms["edit"]["subject"].value;
	
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
    document.getElementById("intmsg").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?hobby="+hobby+"&&sport="+sport+"&&subject="+subject,true); 
	 xmlhttp.send();
}
function change_aboutyou()
{
	
	var relg=document.forms["edit"]["Relegions"].value;
	var desc=document.forms["edit"]["discription"].value;
	//var subject=document.forms["edit"]["subject"].value;

	
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
    document.getElementById("abtarchi").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?relg="+relg+"&&desc="+desc,true); 
	 xmlhttp.send();
}
function change_school()
{
	
	var s_name=document.forms["edit"]["schoolname"].value;
	var s_p_name=document.forms["edit"]["sch_pri_name"].value;
	var s_p_cont=document.forms["edit"]["contactno"].value;
	//var subject=document.forms["edit"]["subject"].value;
	//alert("hi..");
	//alert("hi..");
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
    document.getElementById("archimsg").innerHTML=xmlhttp.responseText;
    }
  	}
	//alert("edit_php.php?s_name="+s_name+"&&s_p_name="+s_p_name+"&&s_p_cont="+s_p_cont);
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?s_name="+s_name+"&&s_p_name="+s_p_name+"&&s_p_cont="+s_p_cont,true); 
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
function change_account()
{
	change_aboutyou();
	change_school();
	change_interst();
	Change_Address();
	//alert("ashdkj");
var numbers = /^[0-9]+$/;  

var a=document.getElementById("stand");
var stand=a.options[a.selectedIndex].value;
//alert("sadhaskj");
if(stand=="Graduate")
{
	//alert("hi..");
	 a=document.getElementById("gra");
	 stand=a.options[a.selectedIndex].value;
	 //alert(stand);
}
a=document.getElementById("day");	
var day=a.options[a.selectedIndex].value;
a=document.getElementById("month");	
var month=a.options[a.selectedIndex].value;
a=document.getElementById("year");
year=a.options[a.selectedIndex].value;
date=year+"-"+month+"-"+day;
//alert(date);
//a=document.getElementById("stand");
//var stand=a.options[a.selectedIndex].value;
//alert(stand);
	var f_name=document.forms["edit"]["first_name"].value;
	var l_name=document.forms["edit"]["last_name"].value;
	var sch_name=document.forms["edit"]["school_name"].value;
	var e_id=document.forms["edit"]["email"].value;
	var m_no=document.forms["edit"]["number"].value;
	var p_no=document.forms["edit"]["pnumber"].value;
    var no=0;
 var id = get_radio_value();
	//alert(id);
	if((!numbers.test(m_no))|| m_no.length!=10)
      {   
	  no++;
      }  
	  if((!numbers.test(p_no)))
      {   
	  no++;
      }  
	if(no==0)
	{
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
    document.getElementById("new").innerHTML=xmlhttp.responseText;
	document.getElementById("myfrom").submit();
    }
  	}
	//alert("edit_php.php?f_name="+f_name+"&&l_name="+l_name+"&&sch_name="+sch_name+"&&e_id="+e_id+"&&m_no="+m_no+"&&p_no="+p_no+"&&sex="+id+"&&stand="+stand+"&&date="+date);
	 xmlhttp.open("GET","edit_php.php?f_name="+f_name+"&&l_name="+l_name+"&&sch_name="+sch_name+"&&e_id="+e_id+"&&m_no="+m_no+"&&p_no="+p_no+"&&sex="+id+"&&stand="+stand+"&&date="+date,true); 
	 xmlhttp.send();

	}
	else
	{
		document.getElementById("new").innerHTML="<td colspan='2'><label style='color:red;'>Please Fill Valid Details</label></td>";
	}
}
</script>
<style>
    label
    {
        text-align: left;
    }
    u{
     color:#0099CC; 
    }
    .new
    {
        border-right: 1px #c0c4c7 solid;  
    }
	td
	{
		text-align:left;
		font-size:14px;
		font-family:Calibri, Verdana;
	}
</style>
<title>Untitled Document</title>
</head>

<body style="margin:0px; text-align: left;" onload="set_city();">
    
<form name="edit" id="myfrom" method="post" action="#" enctype="multipart/form-data">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td valign="top" colspan="2">
    
    
	 <table  width="50%" border="0" align="center" >
		<tr>
    		<td>
<h2 align="center"><u>Profile Picture</u></h2>
			</td>
		</tr>

	<tr>
    	<td style="text-align:center">
        <img src='<?php echo $data1['image'] ?>' width="300" height="300" />
        
        </td>
    </tr>

<tr>
		<td style="text-align:center">
			<input type="file" name="sh_image" id="sh_image" />
                        <br/>
                        <br />
                        <br />
                        
                        
            </td>
</tr>

</table>

</td>
</tr>
   <tr>
            <td valign="top" colspan="2">
            <hr/>
            </td>
            </tr>
   <tr>
	<td colspan="2" >

  
  <table id="acco" style="vertical-align: top;" border="0" width="60%" align="center">
	<tr>
	<td colspan="2" style="text-align:center;">
<h2><u>Account Detail</u></h2>
</td>
</tr>

    <tr width="50%">
	<td  class="label" align="center" >First Name:</td>
	<td class="label"><input type="text" name="first_name" class="login-input" placeholder="First Name" style="width:85px; height:18px; font-size:15px" readonly="readonly" value="<?php echo $data1['f_name']; ?>">
            Last Name <input type="text" name="last_name"class="login-input"  placeholder="Last Name" style="width:85px; height:18px; font-size:15px" readonly="readonly" value="<?php echo $data1['l_name']; ?>"/>
	</td>
</tr>

<tr>
	<td class="label" align="center">School Name:</td>
	<td ><input type="text" name="school_name" placeholder="Enter School Name" class="login-input" value="<?php echo $data1['s_name']; ?>"/></td>
</tr>

<tr>
	<td class="label" align="center">Email:</td>
    
	<td  ><input type="text" name="email" placeholder="Enter Email Address" class="login-input" readonly="readonly" value="<?php echo $data1['email']; ?>"/>
    </td>
</tr>
    
 
<tr>
	<td align="center" class="label">Standard:</td>
	<td  >
	<table cellpadding="0" cellspacing="0" style="text-transform:capitalize;"><tr><td>
	<select  class="selectbox" id="stand" name="standard" onchange="change()">
		<option value="Select Standard">--Standard--</option>
		<?php
		include("../config.php");
	$result9=mysql_query("select * from class");
	while($data9=mysql_fetch_array($result9))
	{
		echo "<option value='".$data9[0]."'>".ucfirst($data9[1])."</option>";
	}
		?>
		<option value="Graduate">Other >></option>
	</select ></td><td>
	<select id="gra"  class="selectbox" name="Graduate" style="display:none;">
		<option value="Select Graduate">--Graduate--</option>	
		<option value="Diploma">Diploma</option>
		<option value="BCA">BA</option>
		<option value="BCom">BCom</option>		
		<option value="BBA">BSC</option>
		<option value="BSC IT">BBA</option>
	</select>
	</td></tr></table>
	</td>
</tr>

<tr>
	<td align="center" class="label">Mobile:</td>
	<td><input align="center" type="text" class="login-input" name="number" placeholder="Enter Mobile Number" value="<?php echo $data1['contact']; ?>"/>
	</td>
</tr>

<tr>
<td align="center" class="label">Phone No:</td>
<td><input type="text" name="pnumber" class="login-input" style=" margin-right:5%" maxlength="20" value="<?php echo $data1['phone']; ?>" />
</td>
</tr>

<tr>
<td align="center" class="label">Birth Date:</td>
<td style="color:#000; font-size:15px">
  
  <select name="day"  class="selectbox1" id="day">  
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
<select  class="selectbox1" name="month" id="month">
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
<select name="year"  class="selectbox1" id="year">
<?php
$i=1900;

while($i<2031)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
</select></td></tr>
<tr>
	<td align="center" class="label">Gender:</td>
	<td style="color:#000; font-size:15px">
	 <?php
	if($data1['sex']=="Male")
	{
		echo '<input name="sex" id="sex" type="radio" value="Male" checked="checked"/>Male';
	echo '<input type="radio" name="sex" id="sex" value="Female" />Female';
	}
	else
	{
		echo '<input name="sex" type="radio" id="sex" value="Male" />Male';
	echo '<input type="radio" name="sex" value="Female" id="sex" checked="checked"/>Female';
	}
	?>
	</td>

</tr>


</table>   


      </td></tr>
    
     <tr>
            <td valign="top" colspan="2">
            <hr/>
            </td>
            </tr>
    <tr>
    <td style="border-right:solid 1px;border-color:#999">
    
    <table border="0" align="center" width="90%">
<tr style="text-align: left;">
	<td colspan="2" align="center">
		<h2><u>Address Detail</u></h2>
	</td>
</tr>
<tr style="text-align: left;">
        <td>
        <label>Permanent Address:</label>
        </td>
        <td>
        	<input type="text" width="200" name="paddress" id="paddress" class="login-input" value="<?php echo $data['s_p_add'] ?>" /></td></tr>	
		    <tr>   
            <td align="center" ><label>Town :</label></td><td><input type="text" width="200" class="login-input" name="town" id="town" value="<?php echo $data['s_town'] ?>" /></td>
			</tr>
            <tr>
           <td align="center"><label>City :</label></td><td>
               <select name="city" id="city" class="selectbox">
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Diu">Diu</option>
            <option value="Maheshana">Maheshana</option>
            <option value="London">London</option>
            </select></td></tr>
			<tr>
            <td align="center">
            <label>Zip code :</label></td><td><input type="text" size="6" class="login-input" name="zipcode" id="zipcode" maxlength="6" value="<?php echo $data['s_zipcode'] ?>"/></td>
			</tr>
            
            <tr>
            <td align="center">
            
 	        <label>Neighborhood :</label></td><td><input type="text" class="login-input" width="200" name="neighberhood" id="neighberhood" value="<?php echo $data['s_neighbour'] ?>"/></td>
            </tr>
            
    
	
    <tr>
		<td align="center">
			<label>Temporary Address:</label>
        </td>
        <td>
        	<input type="text" width="200" name="taddress" class="login-input" id="taddress" value="<?php echo $data['s_t_add'] ?>"/>
        </td>
	</tr>    
    <tr id="addmsg">
   </tr>
	<tr>
   	<td colspan="2"><label id="z_id" style="color:#F00;display:none;">Enter Only 6 Digit</label></td>
	</tr>   


</table>
</td>
<td valign="top">

<table border="0" align="center" width="90%">
<tr >
<td colspan="2" align="center" >
<h2><u>Interest</u></h2>
</td>
</tr>	
    <tr>
   	 <td align="center">
            <label>Hobby :</label>
            </td>
 
        <td>
        	<input type="text"  name="hobby" id="hoby" class="login-input" value="<?php echo $data['s_hobby'] ?>"/>
        </td></tr>
         <tr>   
        <td align="center">
        	<label>Sports :</label>
        </td>
        <td>
        	<input type="text"  class="login-input" name="sport" id="sport" value="<?php echo $data['s_sport'] ?>"/>
        </td>
        </tr>
         <tr>   
        <td align="center">
        	<label>Subject :</label>
        </td>
        <td>
        	<input type="text"  name="subject" class="login-input" id="subject" value="<?php echo $data['s_subject'] ?>"/>
        </td>
        </tr>
        
 		   
</table>
        </td>
        
</tr>
<tr>
            <td valign="top" colspan="2">
            <hr/>
            </td>
            </tr>
<tr valign="top">
<td style="border-right:solid 1px;border-color:#999">
	<table id="archi"  border="0" align="center" width="90%">
<tr>
    <td colspan="2" align="center">
<h2><u>About Us</u></h2>
</td>
</tr>	

    	<tr>
        <td align="center"><label>Religion :</label></td>
        <td><input type="text" width="200" name="Relegions" id="Relegions" class="login-input" value="<?php echo $data['s_relegions'] ?>"/>
        </td>
        </tr>
       
        <tr>
        <td align="center">
        	<label>language :</label>
            </td><td>
            <?php
			$d=explode(',',$data['s_language']);
			$no=count($d);
			if(@$d[3]=="gujarati"||@$d[1]=="gujarati"||@$d[2]=="gujarati")
			{
            echo '<input type="checkbox" name="gujarati" id="gujarati" value="gujrati" checked="checked"/>Gujrati';
			}
			else
			{
				echo '<input type="checkbox" name="gujarati" id="gujarati" value="gujrati" checked="checked"/>Gujrati';
			}
            echo '<input type="checkbox" name="Hindi" id="Hindi" value="Hindi"/>Hindi';
            echo '<input type="checkbox" name="English" id="English" value="English"/>English'; 
			?>
        </td></tr>
        <tr>
        <td align="center">
        
        	<label>Description:</label>
        </td>
        <td>
        	<input type="text"  name="discription" class="login-input" id="discription" value="<?php echo $data['s_description'] ?>"/>
       
        
        </td>
        </tr>
        <tr id="abtarchi">
            <td>
                
            </td>
        </tr>
          
    </table>
    
</td>
<td valign="top">
<table id="pro"  align="center" border="0" width="90%">
<tr>
<td colspan="2" align="center">
<h2><u>About School</u></h2>
</td>
</tr>
	<tr>
        <td align="center"><label>School Name :</label></td>
        <td><input type="text" width="200" class="login-input" name="schoolname" id="schoolname" value="<?php echo $data['s_schoolname'] ?>"/>
        </td>
        </tr>
        <tr>
        <td align="center">
        	<label>School principal Name :</label>
        </td>
        <td>
        	<input type="text" width="200" name="sch_pri_name" class="login-input" id="sch_pri_name" value="<?php echo $data['s_principalname'] ?>"/>
        </td></tr>
        <tr>
        <td align="center">
        	<label>Contact Number :</label>
        </td>
         <td>
        	<input type="text" width="200" name="contactno" id="contactno" class="login-input" value="<?php echo $data['s_contactnumber'] ?>" />
        </td>
       </tr>
       <tr id="archimsg">
          
       </tr>
        
</table>

</td>
</tr>        
      <tr>
<td colspan="2" style="text-align:center">
<input type="submit" name="Submit" class="signup-btn" value="Update" >
</td>
</tr>
</table>
</form>



</body>
</html>