<?php
include("../config.php");
$id=$_GET['id'];
//echo $id;
$result=mysql_query("delete from chap2 where chkid=".$id);
mysql_close();
header("Location:teacherque.php");

?>