<?php 
include("../config.php");

if (isset($_GET['q']))
{

echo "<select id='sub' name='sub' style='width:140px; font-size:15px;' onchange='showchap(this.value)'>";
echo "<option value=''>--Select Subject--</option>";
	if($_GET['q']!='no')
	{
	$sq="select * from subject where c_id=".$_GET['q'];
	$res=mysql_query($sq);
	while($data=mysql_fetch_array($res))
	{ 	echo $data['s_id'];
		echo "<option value='".$data['s_id']."'>".$data['sname']."</option>";	
	}
                   		
	}
	echo "</select>";
}

if(isset($_GET['cname']) && isset($_GET['sname']))
{	//echo "select * from chapter where s_id=".$_GET['sname'];
	$chpq="select * from chapter where s_id=".$_GET['sname']." order by chap_no";
	$result=mysql_query($chpq);
	echo "<td colspan='2'></td><td align='left'><table>";
	$i=0;	
echo "<tr><td>";
	echo "<select name='chap_id' style='width:140px; font-size:15px;'>";
	echo "<option value=''>--Select Chapter--</option>";
	while(@$data1=mysql_fetch_array($result))
	{		echo $data1[0];
		echo "<option value='$data1[ch_id]'/>Chapter".$data1['chap_no']."(".$data1['chapname'].")</option>";
		$i++;	
	}
	echo "</td></tr>";
	echo "</table></td>";
}
?>