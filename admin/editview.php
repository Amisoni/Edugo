
<?php include("adminheader.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="get" action="editque.php?id1=$id">
<?php
include("../config.php");
$id=$_GET['edit_id'];
$result=mysql_query("select * from chap2 where chkid=".$id);

@$data=mysql_fetch_array($result);
?>
<input type="hidden" name="id1" value="<?php echo $id; ?>" />
Question :<input type="text" name="que" value="<?php echo $data['que']; ?>" /><br/>
Ans A<input type="text" name="ansa" value= <?php echo $data['a']; ?> /><br/>
Ans B<input type="text" name="ansb" value= <?php echo $data['b']; ?> /><br/>
Ans C<input type="text" name="ansc" value= <?php echo $data['c']; ?> /><br/>
Ans D<input type="text" name="ansd" value= <?php echo $data['d']; ?> /><br/>
Mark:<input type="text" name="mark" value= <?php echo $data['marks']; ?> /><br/>
<input type="submit" name="update" value="Update" />
</form>

</body>
</html>