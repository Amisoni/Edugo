<?php
include("../config.php");

$id=$_SESSION['id'];
//$id=232;
if(isset($_GET['old']))
{
$lnew=strlen($_GET['new']);
if($lnew>7)
{

if($_GET['cnew']==$_GET['new'])
{
$result=mysql_query("update feculty set password='".$_GET['new']."' where password='".$_GET['old']."' and id=".$id."");
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
}}
if(isset($_GET['padd']))
{
		@mysql_query("update f_info set f_p_add='".$_GET['padd']."', f_town='".$_GET['ptown']."', f_zipcode='".$_GET['pzip']."',f_neighbourhood='".$_GET['pneg']."', f_city='".$_GET['city']."' where f_id=".$id);
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
	@mysql_query("update f_info set f_schoolname='".$_GET['f_name']."', f_principalname='".$_GET['f_p_name']."', f_contactno='".$_GET['f_p_cont']."' where f_id=".$id);
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
if(isset($_GET['qua']))
{
@mysql_query("update f_info set f_edu='".$_GET['qua']."', f_yearofjoin='".$_GET['year']."', f_yearofexperiance='".$_GET['expe']."' where f_id=".$id);
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='3' style='color:green'>Address Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='3' style='color:red'>Error For Address Updating</td>";
	}
	
}
if(isset($_GET['file1']))
			{
			move_uploaded_file($_FILES['file1']['tmp_name'], "images/".$_FILES['file1']['name']);
			$file1 = "images/".$_FILES['file1']['name']; 
			mysql_query("update feculty set image=file1 where id=45" ) ;

			mysql_close($con);
	}
if(isset($_GET['inst']))
{
	$f = $_GET['year1'].$_GET['month'].$_GET['day'];
//	echo "hii...".$f;
@mysql_query("update feculty set u_name='".$_GET['inst']."', contact='".$_GET['no']."', phone='".$_GET['pno']."',sub='".$_GET['sub1']."', sex='".$_GET['sex']."',birth_date='".$_GET['date']."' where ID=".$id);
//'".$_GET['year'].$_GET['month'].$_GET['day']."'
	$no=mysql_affected_rows();
	if($no>0)
	{
		echo "<td colspan='3' style='color:green'>Address Successfully Updated</td>";
	}
	else
	{
		echo "<td colspan='3' style='color:red'>Error For Address Updating</td>";
	}
}

?>