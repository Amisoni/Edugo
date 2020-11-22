<?php 
include("../config.php");
$q="delete from chap2 where chkid=".$_GET['del_id'];
mysql_query($q);
mysql_close();
header("Location:viewque.php");

?>