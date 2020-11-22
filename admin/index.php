<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
<table border="2" align="center" bordercolor="#990000">
<tr>
	<th colspan="3" style="color:#03F">Login</th>
</tr>
<tr>
	<td>UserName</td><td>:</td>
    <td><input type="text" name="uname"  /></td>
</tr>
<tr>
	<td>Password</td><td>:</td>
    <td><input type="password" name="pass"  /></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="submit" name="login" value="Login" /> </td>
</tr>

</table>
</form>
<?php  
if(isset($_POST['login']))
{
	if($_POST['uname']=="admin" && $_POST['pass']=="admin")
	{
		header("Location:adminheader.php");	
	}
	else
	{
		echo "<font color='#FF0000'>Password Is Wrong.</font>";	
	}	
}
?>
</body>
</html>