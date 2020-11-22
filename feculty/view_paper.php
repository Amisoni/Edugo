<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");

$id=$_SESSION['id'];
$result=mysql_query("select * from expert_paper e,class c,subject s where e.u_id=".$id." and e.c_id=c.c_id and s.s_id=e.s_id and e.u_type='f'");
echo "<table cellpadding='5' cellspacing='5' align='center' border='1' style='width:80%'><tr><td>Paper ID</td><td>Class</td><td>Subject</td><td></td></tr>";
while($data=mysql_fetch_array($result))
{
	echo "<tr><td>".$data['p_id']."</td><td>".$data['cname']."</td><td>".$data['sname']."</td><td><a href='viewque.php?p_id=$data[0]'>View</a></td></tr>";
}
?>
</body>
</html>