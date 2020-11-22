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
 label
    {
        text-align: left;
		font-size:16px;
		font-family:Calibri, Verdana;
    }
 u{
     color:#0099CC; 
    }
	td
	{
		text-align:left;
		font-size:14px;
		font-family:Tahoma, Geneva, sans-serif;
	}
	

</style> 
</head>

<body style="margin:0px; text-align: left;" onload="set_city();">
    
<form name="edit" id="myfrom" method="post" action="#" enctype="multipart/form-data">
   
 <div class="signup">
    <div class="indicator"></div>
    <h1>Parent Details</h1>
    <img src='<?php echo $data1['image'] ?>' width="50" height="50" style="margin-left:350px; margin-top:-50px;" />
    <table cellpadding="10" cellspacing="10" >
    <tr><td>
    
      <label>Parent Name:</label></td>
      <td>  
      <?php echo $data1['f_name']; ?>
      
      <?php echo $data1['l_name']; ?>
    </td>
    </tr>
    <tr>
    <td>
      <label> Occupation :</label></td>
      <td>
      <?php echo $data1['occ']; ?>
    </td>
    </tr>
   	<tr>
    <td>
    <label> Email ID :</label></td>
    <td>
      <?php echo $data1['email']; ?>
    </td>
   </tr>
    <tr>
      <td> <label>Mobile No:</label></td>
      <td>
      <?php echo $data1['contact']; ?>
   </td>
   </tr>
   <tr>
   <td>
     <label> Phone No:</label></td>
     <td>
      <?php echo $data1['contact2']; ?>
      </td></tr>
      <tr>	
	<td> <label>Birth Date:</label></td>
	
	<td>
	<?php echo $data1['birth_date']; ?>
</td>
</tr>
 <tr><td>
       <label>Gender:</label></td><td><?php echo $data1['sex']; ?>
      </td></tr>
      
  <tr>	
        <td>
        <label> Permanent Address:</label>
        </td>
        <td><?php echo $data['p_p_add']; ?>
        </td></tr>
        <tr>   
            <td>  <label>Town : </label></td><td><?php echo $data['p_town']; ?></td>
			</tr>
            <tr>
           <td> <label> City : </label></td><td><?php echo $data['p_city']; ?></td></tr>
           <tr>
            <td>
             <label>Zip code :</label> </td><td><?php echo $data['p_zipcode']; ?></td>
			</tr>
            <tr>
            <td>
            
 	        <label>  Neighbourhood :</label> </td><td><?php echo $data['p_neighbour']; ?></td>
            </tr>
           <tr>
		<td>
			 <label>Temporary Address: </label>
        </td>
        <td>
        	<?php echo $data['p_t_add']; ?>
		</td>
		</tr>
       <tr>
       	<td>
        	 <label>Education Detail :</label>
        </td>
        <td><?php echo $data['p_edu']; ?>
        </td>
        
       </tr>     
 
   
       </table>
      
</div>
 
  </form>
  </body>