<?php
include("../config.php");
//$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//mysql_select_db("wabsupport", $con);
$no=0;

@$result=mysql_query("Select * from feculty where email='$_POST[email]'");
@$no=$no+mysql_num_rows($result);
@$result=mysql_query("Select * from student where email='$_POST[email]'");
@$no=$no+mysql_num_rows($result);
@$result=mysql_query("Select * from tutor where email='$_POST[email]'");
@$no=$no+mysql_num_rows($result);
@$result=mysql_query("Select * from father where email='$_POST[email]'");
@$no=$no+mysql_num_rows($result);
@$result=mysql_query("Select * from school where email='$_POST[email]'");
@$no=$no+mysql_num_rows($result);
if($no==0)
{

mysql_query("INSERT INTO father (f_name,l_name,occ,email,contact,contact2,sex,birth_date,password)
VALUES ('$_POST[f_name]','$_POST[l_name]','$_POST[occ]','$_POST[email]','$_POST[number1]','$_POST[number2]','$_POST[sex]','".$_POST['year'].$_POST['month'].$_POST['day']."','$_POST[pwd]')");
@$result=mysql_query("Select * from father where email='$_POST[email]'");
$data=mysql_fetch_array($result);
session_start();
$_SESSION['id']=$data[0];

header('Location:../parent/header3.php');	


mysql_close($con);
}
else
{
	header('Location:parence.php?p=1');
}
?>