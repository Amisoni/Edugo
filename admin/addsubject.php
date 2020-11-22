<?php
include("../config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Subject</title>
<script>
function delete_sub(id)
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
    document.getElementById("pmsg").innerHTML=xmlhttp.responseText;
    }
  	}
  
	 xmlhttp.open("GET","edit_php.php?old="+old+"&&new="+pwd+"&&cnew="+cpwd,true); 
	 xmlhttp.send();
}

</script>
</head>

<body>

<?php include("adminheader.php"); ?>



<form action="" method="post">
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
Subject Name
</td>
<td>:
</td>
<td>
<input type="text" name="addsub" id=="addsub" style="width:200px;" required="Required"/>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Add Subject" name="submit" />
</td>
<?php
if(isset($_POST['submit']))
{
	$q2="select * from subject where sname='".$_POST['addsub']."' and c_id='".$_POST['class']."'";
	//echo $q2;
	$res2=mysql_query($q2);
	$data2=mysql_fetch_array($res2);
	
	if($_POST['addsub']!=$data2['sname'])
	{
	mysql_query("insert into subject (c_id,sname) value(".$_POST['class'].",'".$_POST['addsub']."')");
	echo "<td colspan='2' style='color:#339900' >Record Successfully Inserted</td>";
	}
	else
	{
		echo "<td colspan='3'><font color='#FF0000'> Subject Name Has Been Already Inserted.</font></td>";	
	
	}
}

?>
</tr>
</table>
</form>

</body>

</html>