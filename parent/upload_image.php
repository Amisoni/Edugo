<?php
include("../config.php");

$id=$_SESSION['id'];
//echo "select * from s_info where s_id=".$id;
if(isset($_POST['submit']))
{
	if ($_FILES['sh_image']['type'] != 'image/jpeg' && $_FILES['sh_image']['type'] != 'image/png' && $_FILES['sh_image']['type'] != 'image/gif' && $_FILES['sh_image']['type'] !='image/jpg')
	{
		//echo "file not supported";
	}
	else
	{
		move_uploaded_file($_FILES['sh_image']['tmp_name'], "images/".$_FILES['sh_image']['name']);
		$filepath = "images/".$_FILES['sh_image']['name']; 
		
		if($_SESSION['id']!="")
		{
			$id=$_SESSION['id'];
			$q="select * from father where ID=".$id;
			$res7=mysql_query($q);
			$data7=mysql_fetch_array($res7);
			
		}
		mysql_query("update father set image='$filepath' where id=$id" ) ;
	}

}
$result1=mysql_query("select * from father where id=".$id);
$data1=mysql_fetch_array($result1);
?>
<html>
<body>
<form action="#" method="post" enctype="multipart/form-data">
 <table width="50%" align="center" border="0" >
                <tr><td style="text-align:center;"><u><h2>Profile Picture</h2></u></td></tr>
                <tr>
    <td style="text-align:center;">
        <img src='<?php echo $data1['image'] ?>' width="300" height="300" />
        
        </td>
    </tr>
    <tr>
    	<td style="text-align:center;"><input type="file" name="sh_image" id="sh_image"/></td>
    </tr>
<tr>
<td>
<input type="submit" value="Upload" name="submit" />
</td>
</tr>
</table>
</form>
</body>
</html>