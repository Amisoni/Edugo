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

@$result=mysql_query("Select * from student where email='$_POST[Email]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);

//echo $_SESSION['uname'];
//if($_SESSION['id']!="")
//{
if($count==1)
{
	//session_start();
//$_SESSION['id']=$data[0];
	$a=$data['password'];	
	//echo("logIn Successfully");
	$no=$no+1;
}
//}
/*else
{
	header("Location:first.php");	
}*/
@$result=mysql_query("Select * from father where email='$_POST[Email]'");// where email='$_POST[Email]',password='$_POST[password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);//$data=mysql_fetch_array($result);
//$_SESSION['id']=$data[0];
//echo $_SESSION['uname'];
/*if($_SESSION['id']!="")
{*/

if($count==1)
{
	$a=$data['password'];	
	//echo("logIn Successfully");
	$no=$no+1;
}

/*else
{
	header("Location:first.php");	
}*/
@$result=mysql_query("Select * from feculty where email='$_POST[Email]'");// where email='$_POST[Email]',password='$_POST[password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	
	$a=$data['password'];	
	//echo("logIn Successfully");
	$no=$no+1;
}
@$result=mysql_query("Select * from tutor where email='$_POST[Email]'");// where email='$_POST[Email]',password='$_POST[password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	
	$a=$data['password'];	
	//echo("logIn Successfully");
	$no=$no+1;
}
@$result=mysql_query("Select * from school where email='$_POST[Email]'");// where email='$_POST[Email]',password='$_POST[password]'");

$count=mysql_num_rows($result);
$data=mysql_fetch_array($result);
if($count==1)
{
	$a=$data['password'];
	//echo("logIn Successfully");
	$no=$no+1;
}
if($no==1)
{
	//echo $no; 
     $sender = $_POST['Email'];  
     $message = "your Password Is ".$a;  
    // $name = $_POST['name'];  
      
     $to = $_POST['Email'];  
     $subject = "Your Password";  
     $header = "From:".$sender;  
      
     mail($to,$subject,$message,$header);  
     echo "($to,$subject,$message,$header)";  
	//echo "Password is".$a;
	
	header('location:registration/first.php?l=2');
}
else
{
	echo $_POST['Email'];
	echo $_POST['password'];
	//$error="Wrong User Name Or Password";
	
	header('location:registration/first.php?l=3');
	
	//echo "Wrong User Name Or Password";
}

mysql_close($con);
?>
</form>