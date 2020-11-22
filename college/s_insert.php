<?php 
include("../config.php");

$id=$_SESSION['id'];
move_uploaded_file($_FILES['fileupload']['tmp_name'], "images/".$_FILES['fileupload']['name']);
			$filepath = "images/".$_FILES['fileupload']['name']; 
			if ($_FILES['fileupload']['type'] != 'image/jpeg')
			{
				echo "file not supported";
			}
			else
			{
			
			mysql_query("update student set image='$filepath' where id=$id" ) ;
			}

@$q="INSERT INTO s_info (s_id,s_photo,s_p_add,s_town,s_city,s_zipcode,s_neighbour,s_t_add,s_hobby,s_sport,s_subject,s_relegions,s_language,s_description,s_schoolname,s_principalname,s_contactnumber)
value(".$id.",'$_POST[fileuploasd]','$_POST[paddress]','$_POST[town]','$_POST[city]','$_POST[zipcode]','$_POST[neighberhood]','$_POST[taddress]','$_POST[hobby]','$_POST[sport]','$_POST[subject]','$_POST[Relegions]','$_POST[gujrati]/$_POST[Hindi]/$_POST[English]','$_POST[discription]','$_POST[schoolname]','$_POST[sch_pri_name]','$_POST[contactno]')";
echo $q;
header("location:header2.php");
mysql_query($q);
mysql_close();
?>
