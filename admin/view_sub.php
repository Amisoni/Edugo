<?php
include("../config.php");
if(isset($_GET['c_id']))
{
	//echo "hi...";
	$result=mysql_query("select * from subject s, class c where c.c_id=s.c_id && s.c_id=".$_GET['c_id']);
	echo "<table border='1' width='100%'>";
	echo "<tr><td style='width:40%;'>Class</td><td style='width:40%;'>subject</td><td style='width:10%;'>edit</td><td style='width:10%;'>delete</td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><label id='labcname".$data[0]."'>".$data['cname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['cname']." style='display:none;' /></td>";
		echo "<td><label id='labsname".$data[0]."'>".$data['sname']."</label><input type='text' id='txtsname".$data[0]."' name='txtsname".$data[0]."' value=".$data['sname']." style='display:none;' /></td>";
		echo "<td><label id='labename".$data[0]."' onclick='edit_sub(".$data[0].")'>Edit</label>";
		echo "<label id='labcancel".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>cancel</label><label id='labupdate".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onclick='delete_sub(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
}
if(isset($_GET['s_id']))
{
	//echo "hi...";
	//echo "delete from subject where s_id=".$_GET['s_id'];
	mysql_query("delete from subject where s_id=".$_GET['s_id']);
	echo "<lable style='color:green;'>Record Successfully Deleted</label>";
	$result=mysql_query("select * from subject s, class c where c.c_id=s.c_id && s.c_id=".$_GET['cid']);
	echo "<table border='1' width='100%' style='color:black'>";
	echo "<tr><td style='width:40%;'>Class</td><td style='width:40%;'>subject</td><td style='width:10%;'>edit</td><td style='width:10%;'>delete</td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><label id='labcname".$data[0]."'>".$data['cname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['cname']." style='display:none;' /></td>";
		echo "<td><label id='labsname".$data[0]."'>".$data['sname']."</label><input type='text' id='txtsname".$data[0]."' name='txtsname".$data[0]."' value=".$data['sname']." style='display:none;' /></td>";
		echo "<td><label id='labename".$data[0]."' onclick='edit_sub(".$data[0].")'>Edit</label>";
		echo "<label id='labcancel".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>cancel</label><label id='labupdate".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onclick='delete_sub(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
}
if(isset($_GET['up_id']))
{
	//echo "hi...";
	//echo "delete from subject where s_id=".$_GET['s_id'];
	mysql_query("update subject set sname='".$_GET['s_name']."' where s_id=".$_GET['up_id']);
	echo "<lable style='color:green;'>Record Successfully Updated</label>";
	$result=mysql_query("select * from subject s, class c where c.c_id=s.c_id && s.c_id=".$_GET['clid']);
	echo "<table border='1' width='100%' style='color:black;'>";
	echo "<tr><td style='width:40%;'>Class</td><td style='width:40%;'>subject</td><td style='width:10%;'>edit</td><td style='width:10%;'>delete</td></tr>";
	while($data=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><label id='labcname".$data[0]."'>".$data['cname']."</label><input type='text' id='txtcname".$data[0]."' name='txtcname".$data[0]."' value=".$data['cname']." style='display:none;' /></td>";
		echo "<td><label id='labsname".$data[0]."'>".$data['sname']."</label><input type='text' id='txtsname".$data[0]."' name='txtsname".$data[0]."' value=".$data['sname']." style='display:none;' /></td>";
		echo "<td><label id='labename".$data[0]."' onclick='edit_sub(".$data[0].")'>Edit</label>";
		echo "<label id='labcancel".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>cancel</label><label id='labupdate".$data[0]."' onclick='update_sub(".$data[0].")' style='display:none'>Update</label></td>";
		echo "<td><label onclick='delete_sub(".$data[0].")'>Delete</label></td></tr>";
	}
	echo "</table>";
}

?>