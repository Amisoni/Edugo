<?php 
include("../config.php");

move_uploaded_file($_FILES['profilephoto']['tmp_name'], "images/".$_FILES['profilephoto']['name']);
			$filepath = "images/".$_FILES['profilephoto']['name']; 
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from father where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			
			}
			mysql_query("update father set image='$filepath' where id=$id" ) ;
$q="INSERT INTO parent (p_photo,p_p_add,p_town,p_city,p_zipcode,p_neighbour,p_t_add,p_edu)
value('$_POST[profilephoto]','$_POST[paddress]','$_POST[town]','$_POST[city]','$_POST[zipcode]','$_POST[neighberhood]','$_POST[taddress]','$_POST[edudetail]')";
echo $q;
@mysql_query($q);
//header("location:header3.php");
//mysql_close();
?>
