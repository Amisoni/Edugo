<?php
echo $_GET['ansa'];
$id=$_GET['id1'];
echo $id;
include("../config.php");
if(isset($_GET['update']))
{
$result=mysql_query("update chap2 set  que='".$_GET['que']."',a='".$_GET['ansa']."',b='".$_GET['ansb']."',c='".$_GET['ansc']."', d='".$_GET['ansd']."',marks='".$_GET['mark']."' where chkid=".$id."");
$no=mysql_affected_rows();
}
header('location:teacherque.php');
?>
