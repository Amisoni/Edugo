<?php
include("../config.php");

$id=$_SESSION['id'];
//echo "select * from s_info where s_id=".$id;
if(isset($_POST['saveimg']))
{
	if ($_FILES['sh_image']['type'] != 'image/jpeg')
			{
				echo "file not supported";
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
   
   <table width="100%" border="0" cellpadding="0" cellspacing="0">  
    <tr bgcolor="#f1f1f1">
      <td colspan="2">
             
      <table width="50%" align="center" border="0" >
                <tr><td style="text-align:center;"><u><h2>Profile Picture</h2></u></td></tr>
                <tr>
    <td style="text-align:center;">
        <img src='<?php echo $data1['image'] ?>' width="300" height="300" />
        
        </td>
    </tr>
    <tr>
      </tr>

</table>
</td>
 </tr>
  
  <tr bgcolor="#f1f1f1">
            <td valign="top" colspan="2">
            <hr/>
            </td>
            </tr>
            
 <tr bgcolor="#f1f1f1">
   <td colspan="2">
   
   <table border="0" align="center" width="60%">
      <tr><td colspan="2" style="text-align:center;"><h2><u>Account Detail</u></h2></td></tr>
<tr><td>First Name:</td>
	
	<td><?php echo $data1['f_name']; ?><?php echo $data1['l_name']; ?></td>
</tr>

<tr>
	<td>Occupation:</td>
	<td><?php echo $data1['occ']; ?>
	</td>
</tr>

<tr>
	<td>Email:</td>
	<td><?php echo $data1['email']; ?></td>

</tr>

<tr>
	<td>Mobile:</td>
	<td><?php echo $data1['contact']; ?>
	</td>
</tr>

<tr>
	<td>Phone No:</td>
	<td><?php echo $data1['contact2']; ?>
	</td>
</tr>

<tr>	
	<td>Birth Date:</td>
	
	<td>
	<?php echo $day+$month+$year; ?>
</td>
</tr>

<tr>
	<td>Gender:</td>
	<td style="color:#000; font-size:15px">
	<?php 
    echo $data1['sex']; ?>
    </td>
</tr>
 </table>
</td>
</tr>
<tr bgcolor="#f1f1f1">
            <td valign="top" colspan="2">
            <hr/>
            </td>
            </tr>
   
<tr bgcolor="#f1f1f1" >
<td valign="top" style="border-right:solid 1px;border-color:#999">   
   
   <table width="90%"  border="0" align="center">
                <tr><td colspan="2"><h2><u>Address Detail</u></h2></td>
</tr>
<tr>	
        <td>
        Permenent Address:
        </td>
        <td><?php echo $data['p_p_add']; ?></td>
            </tr>
		    <tr>   
            <td> Town : </td><td><?php echo $data['p_town']; ?></td>
			</tr>
            <tr>
           <td> City : </td><td><?php echo $data['p_city']; ?></td></tr>
			<tr>
            <td>
            Zip code : </td><td><?php echo $data['p_zipcode']; ?></td>
			</tr>
            <tr>
            <td>
            
 	         Neighberhood : </td><td><?php echo $data['p_neighbour']; ?></td>
            </tr>
    
    <tr>
		<td>
			<label >Temparary Address: 
        </td>
        <td>
        	<?php echo $data['p_t_add']; ?>
</td>
</tr>
<tr id="msgadd">
</tr>
</table>
</td>
<td valign="top">
<table align="center" border="0" width="90%">

               
                <tr id="prinmsg"> </tr>
                <tr><td colspan="2" ><h2><u>Education Detail</u></h2></td>
</tr><tr>
       	<td>
        	Education Detail :
        </td>
        <td><?php echo $data['p_edu']; ?>
        </td>
        
       </tr>
<tr id="addmsg2"></tr>
               </table>
</td>
</tr>

</td>
      <td>
      
      <table width="90%" style="vertical-align:top;margin-top:-700px">
          <tr>
            <td>
</td>
          </tr>
</td>
          </tr>
        </table></TD>
    </TR>
  </table></form>
</body>
</html>