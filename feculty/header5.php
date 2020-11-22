<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/popup.css" />
<script src="../css/popup1.js" type="text/javascript"></script>
<style>
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
	padding-right:10px;
}
</style>
</head>
<body style="margin:0px">
<div style="margin-top:-8px;"> 
<form method="get" style="margin-bottom:0px">
<table width="100%" bgcolor="#F0F0F0">
<tr>
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div style="margin-left:5px"><img src="../registration/image/logo.png"/><img src="../registration/image/teacher1.png" width='55px' height='55px'></div></td>
    <td style="font-family:inherit;font-size:16px;font-weight:bold">
    	<?php 

			
                        include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
			$q="select * from feculty where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#0099CC'>Welcome ".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."</font>";
			}
			else
			{
				header('location:../registration/first.php');	
			}
		?>
 </td>
   <td width="10%" style="vertical-align: middle; font-size: 16px; font-family: Miriam; color: #FFFFFF; font-weight: bold;"><a href="../logout.php?logout=1" style="color:#0099CC"> Logout </a></td>
</tr>
</table>
</form>

<div id="overlay" style="height:800px;">
	<div class="over_box">
    <div id="close" style="width:10px;" onclick="toverlay()">X</div>
		<table align=javascript:document.forms['EditForm'].screen.value=3;document.forms['EditForm'].submit();"center">
<tr>
<td colspan="2" ><h2>Upload Images</h2></td>
</tr>
<tr>
<td>
<form method="post" action="header5.php" enctype="multipart/form-data">
<input type="file" name="fileupload" />
<input type="submit" name="submit" /> 
</form></td><td align="left">
           
                    </td></tr></table>
   </div>
</div>
<div>

<table width="100%" style="height:540px">
<tr>
<td width="200px" style="font-size:16px; vertical-align:top; border-right:Solid #03F 1px">
  <table width="200px" height="315" style="text-decoration:none; color: #36F; margin-left:30px;">
  <tr>
  <td width="10%" align="left" valign="top" >
<table align="left" height="60px" border="0">
<tr align="left">
 <?php

			include("../config.php");
			
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
		
			@$q="select * from feculty where ID=".$id;
			@$res=mysql_query($q);
			@$data=mysql_fetch_array($res);
			echo "<td width='50px' height='70px' align='left'><img src=".$data['image']." name='img1'  width='60px' height='60px'></td><td style='font-size:13px; width:100px; color:#0099CC;padding-top:10px;font-weight:bold'>".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."<br/><label style='font-size:11px;font-family:Calibri; color:#0099CC; text-decoration:underline; cursor:pointer;'><a href='upload_image.php' target='ifrm'/>Edit Photo</a></label></td>";
			}
			if(isset($_POST['submit']))
			{
	
			if ($_FILES['fileupload']['type'] != 'image/jpeg')
			{
				echo "file not supported";
			}
			else
			{
			move_uploaded_file($_FILES['fileupload']['tmp_name'], "images/".$_FILES['fileupload']['name']);
			$filepath = "images/".$_FILES['fileupload']['name']; 
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from feculty where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			
			}
			mysql_query("update feculty set image='$filepath' where id=$id" ) ;

			mysql_close($con);
			header('Location:header5.php');
			
	}
}
	?>
</tr>
<tr>
<td colspan="2">
<ul id="topul">
<li>
<a href="home.php" target="ifrm"><img src="../images/home.jpg" width="20px" height="20px"/>Home
</li>
<li><a href="new_view_profile.php" target="ifrm">
<img src="../images/view.jpg" width="20px" height="20px" border="0"/>View Profile</a>
</li>
<li><a href="new_edit_profile.php" target="ifrm">
<img src="../images/edit_profile.png" width="20px" height="20px"/>Edit Profile</a>
</li>

</li>
<li>
<a href="changepwd.php" target="ifrm"><img src="../images/password-icon.png" width="20px" height="20px"/>Change Password
</li>
<li><a href="teacherque.php"  target="ifrm" >
<img src="../images/question.jpg" width="20px" height="20px" />Question Paper</a>
</li>
<li><a href="view_paper.php"  target="ifrm" style="position:absolute">
<img src="../images/paper.jpg" width="20px" height="20px" />View Paper</a>
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
	