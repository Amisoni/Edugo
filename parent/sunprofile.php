<div style="margin-top:-8px;"> 
<form method="get" style="margin-bottom:0px">
<table width="100%" bgcolor="#3745F0" border="0"  >
<tr>
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div style="margin-left:5px">EduGo&nbsp;<img src="../registration/image/parent1.jpg" height="33px" width="33px" /></div></td>
    <td style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:13px;font-weight:bold"> 
    	<?php 
			
include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from father where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#FFFFFF'>Welcome ".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."</font>";
			}
			else
			{
				header('location:registration/first.php');
			}
		?>
    </td>
   <td width="10%" style="vertical-align: middle; font-size: 20px; font-family: Miriam; color: #FFFFFF; font-weight: bold;"><a href="../logout.php?logout=1" style="color:#FFF"> Logout </a></td>
</tr>
</table>
</form>
<html>
<head>
    <title></title>
    <script src="../dropdown/jquery.min.js" type="text/javascript"></script>
    <link href="../dropdown/modalPopLite1.3.0.css" rel="stylesheet" type="text/css" />
    <script src="../dropdown/modalPopLite1.3.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(function () {
           
	        $('#popup-wrapper').modalPopLite({ openButton: '#clicker', closeButton: '#close-btn', isModal: false });

	    });
	</script>
       <link href="../headerstyle.css" rel="stylesheet" type="text/css" />
<link href="../pagestyle.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF">
<table width="65%" align="center" class="font">
<tr>
<td>
<?php 
include('../config.php');
$id=$_SESSION['id'];
$result1=mysql_query("select * from student where id='".$_GET['id']."'");
$data=mysql_fetch_array($result1);

echo "<table width='100%' align='center' style='border-right:1px solid #cccccc;border-left:1px solid #cccccc;'>";
echo "<tr style='background-color:#cccccc'><td></td><td><table><tr><td style='border:3px solid #999' rowspan='5' width='200px'><img src='../student/".$data['image']."' style='width:200px; height:200px;'/></td>";
echo "<td width='70px'></td><td>Name: ".$data['f_name']." ".$data['l_name']."</td></tr>";
echo "<tr><td></td><td>Studied at: ".$data['s_name']."</td></tr>";
echo "<tr><td></td><td>Sex: ".$data['sex']."</td></tr>";
echo "<tr><td></td><td>Birth Date: ".$data['birth_date']."</td></tr>";
echo "<tr><td></td><td>Email ID: ".$data['email']."</td></tr>";
$result=mysql_query("select * from sun s,profile p,student st,p_type pt  where s.p_id=".$id." and p.s_id=".$_GET['id']." and s.s_id=p.s_id and st.id=s.s_id and pt.id=p.t_id ORDER BY p.c_time desc" );// and p.p_id=s.p_id and s.s_id=p.s_id");
echo "</table></td></tr>";
while($data=mysql_fetch_array($result))
{
	echo "<tr><td colspan='2'><hr /></td></tr>";
	echo "<tr><td valign='top' rowspan='2' align='center'><img src='../student/".$data['image']."' style='width:50px; height:50px;' /></td><td>".$data['f_name']." ".$data['l_name']."";//";
	echo " ".$data['text']." On ".date("d-M-Y g:i:s:A", strtotime($data['c_time']))."<br /><br /></td></tr>";
	if($data['t_id']==1)
	{
		$r1=mysql_query("select * from profile_picture where p_id=".$data['n_id']);
		$d1=mysql_fetch_array($r1);	
		echo "<tr><td><table style='border:1px solid #999'><tr><td><img src='../student/".$d1['image']."' style='width:200px; height:200px;'/></td></tr></table></td></tr>";
	}
	else if($data['t_id']==2)
	{
		$r1=mysql_query("select * from result where rid=".$data['n_id']);
		$d1=mysql_fetch_array($r1);
	    echo "<tr><td><table style='border:1px solid #999; text-align:center;' cellspacing='0'><tr style='background-color:#cccccc;'><td>Total Marks</td><td>Get Marks</td><td>Attampt</td></tr><tr><td>".$d1[5]."</td><td>".$d1[6]."</td><td>".$d1[3]."</td></tr></table></td></tr>"; 	
	}
	
}
echo "</table>";
?>

</td>
</tr>
</table>
</body>
</html>
</div>