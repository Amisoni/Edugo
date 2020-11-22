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
			$q="select * from ffeculty where ID=".$id;
			$res7=mysql_query($q);
			$data7=mysql_fetch_array($res7);
			
			}
			mysql_query("update feculty set image='$filepath' where id=$id" ) ;
			}
		
}

$result1=mysql_query("select * from feculty where id=".$id);
@$data1=mysql_fetch_array($result1);
$date=$data1['birth_date'];
$day=substr($date,8,2);
$month=substr($date,5,2);
$year=substr($date,0,4);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<body>

<form method="get" action="" >
<table align="center" bgcolor="#f0f0f0">
<tr>
<td>
<table align="center">
<tr>
<td colspan="3">
<h2 style="color:#de6e1d;font-size:18px"><u style="color:#de6eld">Change Password</u></h2>
</td>
</tr>
<tr><td>Old Password</td><td>:</td><td><input type="password" width="200px" name="opwd" /></td></tr>
<tr><td>New Password</td><td>:</td><td><input type="password" width="200px" name="npwd" /></td></tr>
<tr><td>Confirm Password</td><td>:</td><td><input type="password" width="200px" name="rpwd" /></td></tr>
<tr </tr>
<tr><td>
<input type="submit" name="submit" value="Save/Close"/>
</td><td>
</form>
<?php
if(isset($_GET['submit']))
{
if($_GET['npwd']==$_GET['rpwd'])
{

$result=mysql_query("update feculty set password='".$_GET['npwd']."' where password='".$_GET['opwd']."' and id=".$id."");	
$no=mysql_affected_rows();

if($no==1)
{
	echo "<td colspan='3' style='color:green'>Password Successfully Updated</td>";
}
else
{
echo "<td colspan='3' style='color:red'>Incorrect old Not Match</td>";
}
}
else{echo "<td colspan='3' style='color:red'>Not Match Password..";
}
}
?>
</td></tr>
</table>
</td>
</tr>
</table>
</body>
</html>