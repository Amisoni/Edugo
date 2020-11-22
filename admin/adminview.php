<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("adminheader.php"); ?>

<form method="get" action="update.php?id1=$id">
<?php
include("../config.php");
$id=$_GET['id'];
$result=mysql_query("select * from chap2 where chkid=".$id);

@$data=mysql_fetch_array($result);
?>
<input type="hidden" name="id1" value="<?php echo $id; ?>" />
<table align="center" style="margin-top:5px;">
<tr>
	<td>Question</td><td>:</td><td><input type="text" name="que" value="<?php echo $data['que']; ?>" size="50" /></td>
  </tr>
  <tr>
<td>Ans A</td><td>:</td><td><input type="text" name="ansa" value= <?php echo $data['a']; ?> /></td>
</tr>
<tr>
<td>Ans B</td><td>:</td><td><input type="text" name="ansb" value= <?php echo $data['b']; ?> /></td>
</tr>
<tr>
<td>Ans C</td><td>:</td><td><input type="text" name="ansc" value= <?php echo $data['c']; ?> /></td>
</tr>

<td>Ans D</td><td>:</td><td><input type="text" name="ansd" value= <?php echo $data['d']; ?> /></td>
</tr>
<tr>
<td>Marks</td><td>:</td><td><input type="text" name="mark" value= <?php echo $data['marks']; ?> /></td>
</tr>
<tr>
<td colspan="3"><input type="submit" name="update" value="Update Question" /></td>
</tr>
</table>
</form>
</body>
</html>