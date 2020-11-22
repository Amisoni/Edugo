<?php
include("../config.php");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

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
mysql_query("INSERT INTO feculty (f_name,l_name,u_name,email,contact,std,sex,birth_date,sub,password)
VALUES ('$_POST[f_name]','$_POST[l_name]','$_POST[institute]','$_POST[email]','$_POST[number]','".$_POST['standard1'].$_POST['standard2'].$_POST['standard3'].$_POST['standard4'].$_POST['standard5'].$_POST['standard6']."','$_POST[sex]','".$_POST['year'].$_POST['month'].$_POST['day']."','$_POST[sub]','$_POST[pwd]')");



@$result=mysql_query("Select * from feculty where email='$_POST[email]'");
@$data=mysql_fetch_array($result);

session_start();
$_SESSION['id']=$data[0];
mysql_close($con);

header('Location:../feculty/header5.php');	
}
else
{
	header('Location:feculty.php?p=1');	
}
?>