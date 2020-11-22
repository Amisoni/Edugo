<form method="get">
<?php
include("config.php");
//$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$no=0;
//mysql_select_db("wabsupport", $con);

@$result=mysql_query("Select * from student where email='$_COOKIE[ID_username]' and password='$_COOKIE[Key_password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);

//echo $_SESSION['uname'];
//if($_SESSION['id']!="")
//{
if($count==1)
{
	
$_SESSION['id']=$data[0];
	$a="Location:student/header2.php";	
	//echo("logIn Successfully");
	$no=$no+1;
}
//}
/*else
{
	header("Location:first.php");	
}*/
@$result=mysql_query("Select * from father where email='$_COOKIE[ID_username]' and password='$_COOKIE[Key_password]'");// where email='$_COOKIE['ID_username'])',password='$_COOKIE[Key_password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);//$data=mysql_fetch_array($result);
//$_SESSION['id']=$data[0];
//echo $_SESSION['uname'];
/*if($_SESSION['id']!="")
{*/

if($count==1)
{
	
$_SESSION['id']=$data[0];
	$a="Location:parent/header3.php";	
	//echo("logIn Successfully");
	$no=$no+1;
}

/*else
{
	header("Location:first.php");	
}*/
@$result=mysql_query("Select * from feculty where email='$_COOKIE[ID_username]' and password='$_COOKIE[Key_password]'");// where email='$_COOKIE['ID_username'])',password='$_COOKIE[Key_password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	
$_SESSION['id']=$data[0];
	$a="Location:feculty/header5.php";	
	//echo("logIn Successfully");
	$no=$no+1;
}
@$result=mysql_query("Select * from tutor where email='$_COOKIE[ID_username]' and password='$_COOKIE[Key_password]'");// where email='$_COOKIE['ID_username'])',password='$_COOKIE[Key_password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	
$_SESSION['id']=$data[0];
	$a="Location:tutor/header4.php";	
	//echo("logIn Successfully");
	$no=$no+1;
}
@$result=mysql_query("Select * from school where email='$_COOKIE[ID_username]' and password='$_COOKIE[Key_password]'");// where email='$_COOKIE['ID_username'])',password='$_COOKIE[Key_password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	
$_SESSION['id']=$data[0];
	$a="Location:school/header6.php";	
	//echo("logIn Successfully");
	$no=$no+1;
}
if($no==1)
{
	header($a);
	echo("LogIn Successfully Compliated");
	
}
else
{
	echo $_COOKIE['ID_username'];
	echo $_COOKIE['Key_password'];
	$error="Wrong User Name Or Password";
	//header('location:registration/first.php?msg=1');
	
	//echo "Wrong User Name Or Password";
}

mysql_close($con);
?>
</form>