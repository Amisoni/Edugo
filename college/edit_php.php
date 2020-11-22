<?php
include("../config.php");
$id=$_SESSION['id'];
//$id=232;

if(isset($_GET['old']))
{
include("../config.php");
//echo "<td colspan='3'>Password Successfully Updated</td>";
//echo "update student set password='".$_GET['new']."' where password='".$_GET['old']."' and id=".$id."";
$lnew=strlen($_GET['new']);
if($lnew>7)
{

	if($_GET['cnew']==$_GET['new'])
	{
	$result=mysql_query("update student set password='".$_GET['new']."' where password='".$_GET['old']."' and id=".$id."");
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
		echo "<td colspan='3' style='color:red'>Confirm Password Not Match</td>";
	}
	}
else
{
	echo "<td colspan='3' style='color:red'>At Least 8 character Enter</td>";
}
}
if(isset($_GET['padd']))
{
	
	@mysql_query("update s_info set s_p_add='".$_GET['padd']."', s_town='".$_GET['ptown']."', s_zipcode='".$_GET['pzip']."',s_neighbour='".$_GET['pneg']."' , s_t_add='".$_GET['tadd']."', s_city='".$_GET['city']."' where s_id=".$id);
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
if(isset($_GET['hobby']))
{
	@mysql_query("update s_info set s_hobby='".$_GET['hobby']."', s_sport='".$_GET['sport']."', s_subject='".$_GET['subject']."' where s_id=".$id);
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
if(isset($_GET['s_name']))
{
	//echo "update s_info set s_schoolname='".$_GET['s_name']."', s_principalname='".$_GET['s_p_name']."', s_contactnumber='".$_GET['s_p_cont']."' where s_id=".$id;
	//echo "update s_info set s_relegions='".$_GET['relg']."', s_description='".$_GET['desc']."' where s_id=".$id;
	@mysql_query("update s_info set s_schoolname='".$_GET['s_name']."', s_principalname='".$_GET['s_p_name']."', s_contactnumber='".$_GET['s_p_cont']."' where s_id=".$id);
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
if(isset($_GET['relg']))
{
	//echo "update s_info set s_schoolname='".$_GET['s_name']."', s_principalname='".$_GET['s_p_name']."', s_contactnumber='".$_GET['s_p_cont']."' where s_id=".$id;
	//echo "update s_info set s_relegions='".$_GET['relg']."', s_description='".$_GET['desc']."' where s_id=".$id;
	@mysql_query("update s_info set s_relegions='".$_GET['relg']."', s_description='".$_GET['desc']."' where s_id=".$id);
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

if(isset($_GET['f_name']))
{
	//echo "update student set s_name='".$_GET['sch_name']."', contact=".$_GET['m_no'].",phone=".$_GET['p_no'].", sex='".$_GET['sex']."' std='".$_GET['stand']."' where id=".$id;
	include("../config.php");
	//echo "update student set s_name='".$_GET['sch_name']."', contact=".$_GET['m_no'].",phone=".$_GET['p_no'].", sex='".$_GET['sex']."', birth_date='".$_GET['date']."' where id=".$id;
	//echo "update student set s_name='".$_GET['sch_name']."', contact=".$_GET['m_no'].",phone=".$_GET['p_no'].", sex='".$_GET['sex']."', birth_date='".$_GET['date']."' and std='".$_GET['stand']."' where id=".$id;
	@mysql_query("update student set s_name='".$_GET['sch_name']."', contact=".$_GET['m_no'].",phone=".$_GET['p_no'].", sex='".$_GET['sex']."', birth_date='".$_GET['date']."', std='".$_GET['stand']."' where id=".$id);
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='2' style='color:green'>Account Details Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='2' style='color:red'>Error For Account Details Updating</td>";
	}
	
}


?>