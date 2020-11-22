<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile Page</title>
<link rel="stylesheet" type="text/css" href="../css/popup.css" />
<link rel="stylesheet" type="text/css" href="a.css" />
<style type="text/css">
a{
	text-decoration:none;
}
a:hover
{
	text-decoration:underline;
}
img
{
	border:0px;
	padding-right:5px;
}
</style>
</head>
<body style="margin:0px">
<div style="margin-top:-8px;"> 
<form method="get" style="margin-bottom:0px">
<table width="100%" bgcolor="#F0F0F0">
<tr>
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div class="logo"><a href="index.html"><img src="../registration/images/edugo-logo.png" alt="Edu Go" /></a><img src="../registration/image/studsmall.png" width="55px" height="55px"></div></td>
    <td style="font-family:inherit;font-size:18px;font-weight:bold">
    	<?php 
			
            include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
			$q="select * from student where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#0099CC'>Welcome ".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."</font>";
			}
			else
			{
				@header('location:registration/first.php');	
			}

		?>
    </td>
   <td width="10%" style="vertical-align: middle; font-size: 20px; font-family: Miriam; color: #FFFFFF; font-weight: bold;"><a href="../logout.php?logout=1" style="color:#0099CC"> Logout </a></td>
</tr>
</table>
</form>

<table width="100%" style="height:540px">
<tr>
<td width="200px" style="font-size:16px; vertical-align:top; border-right:Solid #03F 1px">
  <table width="200px" height="315" >
  <tr>
  <td width="10%" align="left" valign="top" >
<table align="left" height="60px" border="0">
<tr align="left">
 <?php

			include("../config.php");
			
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
		
			@$q="select * from student where ID=".$id;
			@$res=mysql_query($q);
			@$data=mysql_fetch_array($res);
			echo "<td width='50px' height='70px' align='left'><a href='new_view_profile.php' target='ifrm'><img src=".$data['image']." name='img1'  width='60px' height='60px'></a></td><td style='font-size:16px; width:100px; color:#0099CC;padding-top:10px;font-weight:bold'>".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."<br/><label onclick='toverlay()' style='font-size:11px;font-family:Calibri; color:#0099CC; text-decoration:underline; cursor:pointer;' ><a href='upload_image.php' target='ifrm'>Edit Photo</a></label></td>";
			}
			if(isset($_POST['submit']))
			{
				echo $_FILES['fileupload']['type']."jhkjsd"; 
			if ($_FILES['fileupload']['type'] != 'image/jpeg' && $_FILES['fileupload']['type'] != 'image/png' && $_FILES['fileupload']['type'] != 'image/gif' && $_FILES['fileupload']['type'] !='image/jpg')
			{
				echo "file not supported";
			}
			else
			{
			move_uploaded_file($_FILES['fileupload']['tmp_name'], "images/".$_FILES['fileupload']['name']);
			$filepath = "images/".$_FILES['fileupload']['name']; 
			$id=$_SESSION['id'];
			if($_SESSION['id']!="")
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
			header('Location:header2.php');
			
	}
}
	?>
</tr>
<tr>
<td colspan="2">
<ul id="topul">
<li style='display:none'>
<img src="images/home.jpg" width="20px" height="20px" />Home
</li>
<li>
<a href="new_view_profile.php" target="ifrm"><img src="../images/view.jpg" width="20px" height="20px" />View Profile</a> 
</li>
<li>
<a href="new_edit_profile.php" target="ifrm" ><img src="../images/edit_profile.png" width="20px" height="20px" />Edit Profile</a> 
</li>
<li style="width:200px">
<a href="changepwd.php" target="ifrm" ><img src="../images/password-icon.png" width="20px" height="20px"/>Change Password</a> 
</li>
<li style="width:200px">
<a href="..\quiz\quiz-maker Test-1.php" target="ifrm" ><img src="../images/takeexam.jpg" width="20px" height="20px"/>Take Exam</a>
<?php
include("../config.php");
$id=$_SESSION['id'];
$result=mysql_query("SELECT *
FROM expert_paper e, sun s, class c, subject s1, father f
WHERE e.u_type = 'p'
AND e.u_id = s.p_id
AND c.c_id = e.c_id
AND s1.s_id = e.s_id
AND s.s_id =".$id." and s.p_id=f.id and e.status=1");
@$no=mysql_num_rows($result);
if($no>0)
{
	echo "<label style='background-color:orange; color:white'>+".$no."</label>";
}
else
{
}
?> 
</li>
<li style="width:200px">
<a href="..\quiz\quiz-maker Test-1.php" target="ifrm"><img src="../images/takeexam.jpg" width="20px" height="20px"/>School Exam</a>
<?php
include("../config.php");
$id=$_SESSION['id'];
$result=mysql_query("SELECT *
FROM expert_paper e, class c, subject s1, school sc
WHERE e.u_type = 's'

AND c.c_id = e.c_id
AND s1.s_id = e.s_id
AND s.s_id =".$id." and s.p_id=sc.id and e.status=1");
@$no=mysql_num_rows($result);
if($no>0)
{
	echo "<label style='background-color:orange; color:white'>+".$no."</label>";
}
else
{
}
?> 
</li>
<!--<li>
<img src="../images/asse.jpg" width="20px" height="20px" />Assessment
<ul id="bottomul">
<li>
<a href="quedetail.php" target="ifrm"><img src="../images/paper.jpg" width="20px" height="20px" />Generate Test
</a></li>
<li>
<a href="expertpaper.php" target="ifrm"><img src="../images/paper.jpg" width="20px" height="20px" />Expert Paper</a>
</li>
</ul>
</li>
<li>-->
<a href="result.php" target="ifrm">
<img src="../images/result.jpg" width="20px" height="20px" />Result</a>
</li> 
</ul>
</td></tr>
</table>

  </td>
  </tr>
          		
	
</table>
</td>
<td width="*" valign="top">
<?php
if(isset($_GET['id']))
{
echo '<iframe name="ifrm" frameborder="0" allowtransparency="true" scrolling="auto" height="530px" src="home.php" style="width:100%; font-size: 0.8em;"/>';
}else
{
echo '<iframe name="ifrm" frameborder="0" allowtransparency="true" scrolling="auto" height="530px" style="width:100%; font-size: 0.8em;"/>';
}
?>

</td>

</tr>
</table>
</div>
                      
                        
</div>
</body>
</html>