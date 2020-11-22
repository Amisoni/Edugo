<?php
include("../config.php");

$id=$_SESSION['id'];

if(isset($_GET['old']))
{
$nleng=strlen($_GET['new']);
$cleng=strlen($_GET['new']);
if($nleng>7)
{
if($_GET['new']==$_GET['cnew'])
{

$result=mysql_query("update father set password='".$_GET['new']."' where password='".$_GET['old']."' and id=".$id."");
$no=mysql_affected_rows();

if($no==1)
{
	echo "<td colspan='3' style='color:green'>Password Successfully Updated</td>";
}
else
{
echo "<td colspan='3' style='color:red'>Incorrect old Not Match</td>";
}
}
else
{
	echo "<td colspan='3' style='color:red'>Confirm Password dose Not Match</td>";
}
}
else
{
	echo "<td colspan='3' style='color:red'>At Least 8 Character Password </td>";
}
}

function set_city()
{

}


if(isset($_GET['padd']))
{
	
	@mysql_query("update parent set p_p_add='".$_GET['padd']."',p_town='".$_GET['ptown']."', p_t_add='".$_GET['ptadd']."', p_city='".$_GET['city']."',p_zipcode='".$_GET['pzip']."' , p_neighbour='".$_GET['pneigh']."' where p_id=".$id);
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='2' style='color:green'>Address Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='2' style='color:red'>Error For Address Updating</td>";
	}
}

if(isset($_GET['pqua']))
{
	//echo "update parent set p_edu='".$_GET['pqua']."' where p_id=".$id;
	@mysql_query("update parent set p_edu='".$_GET['pqua']."' where p_id=".$id); 
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='2' style='color:green'>Your Interstd Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='2' style='color:red'>Error For Intersted Updating</td>";
	}
	
}

if(isset($_GET['pocc']))
{
	@$f = $_GET['pyear'].$_GET['pmonth'].$_GET['pday'];

@mysql_query("update father set occ='".$_GET['pocc']."',contact='".$_GET['pcontact']."', contact2='".$_GET['pcontact2']."', sex='".$_GET['psex']."', birth_date=$f where id=".$id);
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='2' style='color:green'>Account Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='2' style='color:red'>Error For Acoount Updating</td>";
	}
}

?>