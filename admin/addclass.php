
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function edit_class(id)
{
	document.getElementById("cl_name"+id).style.display="none";
	document.getElementById("txtview"+id).style.display="block";
	document.getElementById("labedit"+id).style.display="none";
	document.getElementById("labcancel"+id).style.display="block";
	document.getElementById("labupdate"+id).style.display="block";
			
}
function cancel_class(id)
{
	document.getElementById("txtview"+id).style.display="none";
	document.getElementById("cl_name"+id).style.display="block";
	document.getElementById("labedit"+id).style.display="block";
	document.getElementById("labcancel"+id).style.display="none";
	document.getElementById("labupdate"+id).style.display="none";
			
}

function update_class(id)
{
	
	document.getElementById("txtview"+id).style.display="none";
	document.getElementById("cl_name"+id).style.display="block";
	document.getElementById("labedit"+id).style.display="block";
	document.getElementById("labcancel"+id).style.display="none";
	document.getElementById("labupdate"+id).style.display="none";
	
	var cname=document.forms["myfrom"]["txtcname"+id].value;
	//alert(cname);
	window.location="del_class.php?id1="+id+"&&cname="+cname;
			
}
</script>
</head>

<body>
<?php include("adminheader.php"); ?>
<form action="" name="myfrom" method="post">
<table align="center">
	<tr>
    	<td>Class Name</td><td>:</td>
        <td><input type="text" name="c_name" required="Required" /></td>
    	<td><input type="submit" name="addclass" value="Insert"/></td>
     </tr>
     <tr>
     <td colspan="3" style="color:#090;">
     <?php 
	 if(isset($_GET['id']))
	 {
		 if($_GET['id']==1)
		 {
			 echo "Record Successfully Deleted";
		 }
		 else
		 {
			 echo "Record Successfully Updated";
		 }
	 }
	 ?>
     </td>
     <tr>   
 
<?php
include("../config.php");
if(isset($_POST['addclass']))
{
	$q2="select * from class where cname='".$_POST['c_name']."'";
	$res2=mysql_query($q2);
	$data2=mysql_fetch_array($res2);
	if($_POST['c_name']!=$data2['cname'])
	{
	//echo "insert into class (cname) value('".$_POST['c_name']."')";
	$q="insert into class (cname) value('".$_POST['c_name']."')";
	mysql_query($q);
	echo "<td colspan='3'><font color='#339900'> Record Successfuly Inserted.</font></td>";	

	}
	else
	{
		echo "<td colspan='3'><font color='#FF0000'> Class Has Been Already Inserted.</font></td>";	
	}
}
   
$q1="select * from class";
$res=mysql_query($q1);

echo "<table align='center'><tr><td>No.</td><td>Class</td><td>Update</td><td>Delete</td></tr>";
$no=1;
while($data=mysql_fetch_array($res))
{
	echo "<tr><td>$no</td><td><label id='cl_name".$data[0]."'>$data[cname]</label><input type='text' id='txtview".$data[0]."' name='txtcname".$data[0]."' value='".$data['cname']."' style='display:none;'/></td>
	<td>
	<label id='labedit".$data[0]."' onclick='edit_class(".$data[0].");'> Edit</label>
	<label id='labcancel".$data[0]."' onClick='cancel_class(".$data[0].")' style='display:none'>Cancel</label>		    <label id='labupdate".$data[0]."' onClick='update_class(".$data[0].")' style='display:none'>Update</label>
	</td>
	<td><a href='del_class.php?id=".$data['c_id']."'>Delete</a></td></tr>";		
	$no++;
}
echo "</table>";

?>

</tr>
</table>

</form>
</body>
</html>