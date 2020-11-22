<?php 

include("../config.php");



move_uploaded_file($_FILES['profilephoto']['tmp_name'], "images/".$_FILES['profilephoto']['name']);
$filepath = "images/".$_FILES['profilephoto']['name']; 

$id=$_SESSION['id'];
//echo "update feculty set image='".$filepath."' where id=".$id."" ;
mysql_query("update feculty set image='".$filepath."' where id=".$id."" );
@$q="INSERT INTO f_info (f_id,f_photo,f_p_add,f_town,f_city,f_zipcode,f_neighbourhood,f_t_add,f_edu,f_resume,f_yearofjoin,f_yearofexperiance,f_schoolname,f_principalname,f_contactno)
value(".$id.",'$_POST[profilephoto]','$_POST[address]','$_POST[town]','$_POST[city]','$_POST[zipcode]','$_POST[neighberhood]','$_POST[taddress]','$_POST[edudetail]','$_POST[resume]','$_POST[joinyear]','$_POST[expyear]','$_POST[schoolname]','$_POST[princename]','$_POST[contactno]')";
echo $q;
//header('Location:../feculty/header5.php');
mysql_query($q);
?>
