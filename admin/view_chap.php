<?php
include("../config.php");
if(isset($_GET['s_id']))
{
	$result=mysql_query("select * from chapter c,subject s,class c1 where s.s_id=".$_GET['s_id']."&& s.s_id=c.s_id && c1.c_id=s.c_id order by c.chap_no");
	echo "<table style='width:100%; color:black;' border='1'>";
	echo "<tr><td width='15%'>Class Name</td><td width='15%'>Subject Name</td><td>Chapter No</td><td width='30%'>Chapter Name</td><td width='10%'></td><tdwidth='10%'></td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr><td>".$data['cname']."</td>";
		echo "<td>".$data['sname']."</td>";
		echo "<td>Chapter".$data['chap_no']."</td>";
		echo "<td><label name='labcname' id='labcname".$data[0]."'>".$data['chapname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['chapname']." style='display:none' /></td>";
		echo "<td><label id='labename".$data[0]."' onClick='edit_chap(".$data[0].")'>edit</label><label id='labcancel".$data[0]."' onClick='cancel_chap(".$data[0].")' style='display:none'>Cancel</label><label id='labupdate".$data[0]."' onClick='update_chap(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onClick='delete_chap(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
}
if(isset($_GET['chapid']))
{
	mysql_query("delete from chapter where ch_id=".$_GET['chapid']);
	echo "<lable style='color:green;'>Record Successfully Deleted</label>";
	$result=mysql_query("select * from chapter c,subject s,class c1 where s.s_id=".$_GET['sid']."&& s.s_id=c.s_id && c1.c_id=s.c_id Order by c.chap_no");
	echo "<table style='width:100%;color:black;' border='1'>";
	echo "<tr><td width='15%'>Class Name</td><td width='15%'>Subject Name</td><td>Chapter No<td width='30%'>Chapter Name</td><td width='25%'></td><tdwidth='15%'></td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr><td>".$data['cname']."</td>";
		echo "<td>".$data['sname']."</td>";
		echo "<td>Chapter".$data['chap_no']."</td>";
		echo "<td><label name='labcname' id='labcname".$data[0]."'>".$data['chapname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['chapname']." style='display:none' /></td>";
		echo "<td><label id='labename".$data[0]."' onClick='edit_chap(".$data[0].")'>edit</label><label id='labcancel".$data[0]."' onClick='cancel_chap(".$data[0].")' style='display:none'>Cancel</label><label id='labupdate".$data[0]."' onClick='update_chap(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onClick='delete_chap(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
}
if(isset($_GET['ch_id']))
{
	//echo "update chapter set chapname='".$_GET['cname']."' where ch_id=".$_GET['ch_id'];
	mysql_query("update chapter set chapname='".$_GET['cname']."' where ch_id=".$_GET['ch_id']);
	echo "<lable style='color:green;'>Record Successfully Updated</label>";
	$result=mysql_query("select * from chapter c,subject s,class c1 where s.s_id=".$_GET['sub_id']."&& s.s_id=c.s_id && c1.c_id=s.c_id order by c.chap_no");
	echo "<table style='width:100%;color:black;' border='1'>";
	echo "<tr><td width='15%'>Class Name</td><td width='15%'>Subject Name</td><td>Chapter No</td><td width='30%'>Chapter Name</td><td width='25%'></td><tdwidth='15%'></td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr><td>".$data['cname']."</td>";
		echo "<td>".$data['sname']."</td>";
		echo "<td>Chapter".$data['chap_no']."</td>";
		echo "<td><label name='labcname' id='labcname".$data[0]."'>".$data['chapname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['chapname']." style='display:none' /></td>";
		echo "<td><label id='labename".$data[0]."' onClick='edit_chap(".$data[0].")'>edit</label><label id='labcancel".$data[0]."' onClick='cancel_chap(".$data[0].")' style='display:none'>Cancel</label><label id='labupdate".$data[0]."' onClick='update_chap(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onClick='delete_chap(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
	}
?>