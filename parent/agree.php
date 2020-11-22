<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../registration/css/style.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="margin:1px">
<div style="margin-top:-8px;"> 
<form method="get" action="">
<table width="100%" bgcolor="#F0F0F0">
<tr>
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px">
    <div class="logo"><a href="index.html"><img src="../registration/images/edugo-logo.png" alt="Edu Go" /></a></div>
    </td>
    <td style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:13px;font-weight:bold">
</td></tr><table>

<?php
include("../config.php");

			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			}
			//echo $id;
if(isset($_GET['btndisagree']))
{
$result=mysql_query("delete from father where ID=".$id);
	
	printf("<script>location.href='../registration/parent.php'</script>");
	//header('location:../registration/parent.php');
}
if(isset($_GET['btnagree']))
{
	printf("<script>location.href='../parent/header3.php?id=btnagree'</script>");
	//header('Location:../parent/header3.php?id=btnagree');
}

?>
<div style="margin-left:20px;"> 

<h3>TERMS AND CONDITIONS OF USE</h3>

<br /><input type="submit" name="btnagree" value="Agree" />
<input type="submit" name="btndisagree" value="DisAgree" />
</div>
</form>
</body>
</html>