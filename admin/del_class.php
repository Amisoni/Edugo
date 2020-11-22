<?php
include("../config.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
//echo $id;
$result=mysql_query("delete from class where c_id=".$id);
mysql_close();
header("Location:addclass.php?id=1");
}

if(isset($_GET['id1']))
{
$id1=$_GET['id1'];
//echo "update class set cname='".$_GET['cname']."' where c_id=".$id1;
mysql_query("update class set cname='".$_GET['cname']."' where c_id=".$id1);
mysql_close();
header("Location:addclass.php?id=2");
}


?>