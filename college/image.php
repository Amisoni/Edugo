<?php
//session_start();
//$id=$_SESSION['id'];
include("../config.php");
$id=232;
if ($_FILES['fileupload']['type'] != 'image/jpeg')
			{
				echo "file not supported";
			}
			else
			{
			move_uploaded_file($_FILES['fileupload']['tmp_name'], "images/".$_FILES['fileupload']['name']);
			$filepath = "images/".$_FILES['fileupload']['name']; 
			//$id=$_SESSION['id'];
			//if($_SESSION['id']!="")
			{
			$q="select * from student where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);			
			}
			mysql_query("insert into profile_picture (s_id,image) values(".$id.",'".$filepath."')");
			$r1=mysql_query("select max(p_id) from profile_picture");
			$d1=mysql_fetch_array($r1);
			$nid=$d1[0];
			mysql_query("insert into profile(n_id,t_id,s_id) values (".$nid.",1,".$id.")");
			mysql_query("update student set image='$filepath' where id=$id" ) ;

			mysql_close($con);
			echo "tari masi ni ankh";
			}


?>