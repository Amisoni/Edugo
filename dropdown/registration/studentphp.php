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
if($_POST['drop1']==1)
{
$std=$_POST['standard'];	
}
else
{
$std=$_POST['Graduate'];
}
if($no==0)
{
mysql_query("INSERT INTO student (f_name,l_name,s_name,email,Contact,std,sex,birth_date,password)
values('$_POST[first_name]','$_POST[last_name]','$_POST[school_name]','$_POST[email]','$_POST[number]','$std','$_POST[sex]','".$_POST['year'].$_POST['month'].$_POST['day']."','$_POST[pwd]')");

@$result=mysql_query("Select * from student where email='$_POST[email]'");
@$data=mysql_fetch_array($result);

session_start();
$_SESSION['id']=$data[0];
echo($_SESSION['id']);
mysql_close($con);
header('Location:../student/header2.php');	
}
else
{
	header('Location:first.php?p=1');
}
?>