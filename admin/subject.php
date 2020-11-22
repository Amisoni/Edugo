<?php
include("../config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Subject</title>
<script>
function view_sub()
{
	
	var a=document.getElementById("class");
	var id=a.options[a.selectedIndex].value;
//alert(id);
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  	}
  	//alert("view_sub.php?c_id="+id);
	 xmlhttp.open("GET","view_sub.php?c_id="+id,true); 
	 xmlhttp.send();
}
function edit_sub(id)
{
	//document.getElementById("labcname"+id).sty
	//document.getElementById("labcname"+id).style.display="none";
	//document.getElementById("txtcname"+id).style.display="block";
	document.getElementById("labsname"+id).style.display="none";
	document.getElementById("txtsname"+id).style.display="block";
	document.getElementById("labcancel"+id).style.display="block";
	document.getElementById("labename"+id).style.display="none";
	document.getElementById("labupdate"+id).style.display="block";
}
function cancel_sub(id)
{
	//document.getElementById("labcname"+id).sty
	document.getElementById("labcname"+id).style.display="block";
	document.getElementById("txtcname"+id).style.display="none";
	document.getElementById("labsname"+id).style.display="block";
	document.getElementById("txtsname"+id).style.display="none";
	document.getElementById("labcancel"+id).style.display="none";
	document.getElementById("labename"+id).style.display="block";
	document.getElementById("labupdate"+id).style.display="none";
}
function delete_sub(id)
{
//alert(id);
//alert("hi....");
var a=document.getElementById("class");
	var cid=a.options[a.selectedIndex].value;
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  	}
  	//alert("view_sub.php?c_id="+id);
	 xmlhttp.open("GET","view_sub.php?s_id="+id+"&&cid="+cid,true); 
	 xmlhttp.send();
	 
}
function update_sub(id)
{
//alert(id);
//alert("hi....");
//var a=document.getElementById("class");
	//var cid=a.options[a.selectedIndex].value;\
	var c_name=document.forms["myform"]["txtcname"+id].value;
	var s_name=document.forms["myform"]["txtsname"+id].value;
	var a=document.getElementById("class");
	var clid=a.options[a.selectedIndex].value;
	//alert(c_name+s_name);
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  	}
  	//alert("view_sub.php?c_id="+id);
	 xmlhttp.open("GET","view_sub.php?up_id="+id+"&&cname="+c_name+"&&s_name="+s_name+"&&clid="+clid,true); 
	 xmlhttp.send();
	 
}

</script>
</head>

<body>

<?php include("adminheader.php"); ?>



<form action="" method="post" name="myform">
<br />
<table border="0" cellspacing="8px" cellpadding="8px" align="center"  width="50%" style="vertical-align:top;" >
<tr>
	<td colspan="3" style="font-weight:bold;font-size:25px;"><u> Add Subject</u> </td>
</tr>
<tr>
<td>
Class
</td>
<td>
:
</td>
<td>
<select name="class" id="class" style="width:120px;">
<option value="">--Select Class--</option>
<?php 
$result=mysql_query("select * from class");
while($data=mysql_fetch_array($result))
{
	echo "<option value='".$data[0]."'>".$data[1]."</option>";
}
?>
</select>
</td>
</tr>
<tr>
<td>
<input type="button" value="View Subject" name="view" onclick="view_sub()"/>
</td>
<?php
if(isset($_POST['submit']))
{
	mysql_query("insert into subject (c_id,sname) value(".$_POST['class'].",'".$_POST['addsub']."')");
	echo "<td colspan='2' style='color:#FF0000'>Record Successfully Inserted</td>";
}

?>
</tr>
<tr>
<td colspan="4" id="view" name="view">
</td>
</tr>
</table>

</form>
</body>
</html>