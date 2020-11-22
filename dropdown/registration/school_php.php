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

mysql_query("INSERT INTO school(email,contact,HOD,s_date,s_type,n_student,affi,s_name,password)
VALUES('$_POST[email]','$_POST[contact]','$_POST[HOD]','".$_POST['year'].$_POST['month'].$_POST['day']."','$_POST[sex]','$_POST[student]','$_POST[affi]','$_POST[s_name]','$_POST[pwd]')");


@$result=mysql_query("Select * from school where email='$_POST[email]'");
@$data=mysql_fetch_array($result);

session_start();
$_SESSION['id']=$data[0];
header('Location:../school/header6.php');
mysql_close($con);
}
else
{
	header('Location:school.php?p=1');
}

?>