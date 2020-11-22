<?php
if(isset($_GET['s_id']))
{
	include('../config.php');
	
	if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			}
	//echo "insert into sun (p_id,s_id) values(".$id.",".$_GET['s_id'];
	mysql_query("insert into sun (p_id,s_id) values(".$id.",".$_GET['s_id'].")");
	header("Location:viewchild.php");
	
}
else
{
	echo "Abe Dofa Bandh kar taru kam";
}



?>