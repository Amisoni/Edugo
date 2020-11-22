<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("../config.php");
$no=1;
//echo "select * from paper_ques p, chap2 c where p.p_id=".$_GET['p_id']." and c.chkid=p.chkid";
$result=mysql_query("select * from paper_ques p, chap2 c where p.p_id=".$_GET['p_id']." and c.chkid=p.chkid");
echo "<table align='center' cellpadding='5' cellspacing='5' border='1' style='width:80%'><tr><td>No</td><td>Question</td><td>Marks</td></tr>";
while($data=mysql_fetch_array($result))
{
	echo "<tr><td>".$no."</td><td>".$data['que']."</td><td>".$data['u_marks']."</td></tr>";
	$no+=1;
}
?>
</body>
</html>