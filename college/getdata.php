<?php 
include("../config.php");

if (isset($_GET['q']))
{

echo "<select id='subject' style='width:140px; font-size:15px;' onchange='showchap(this.value)'>";
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
{
	$chpq="select * from chapter where s_id=".$_GET['sname']." order by chap_no";
	$result=mysql_query($chpq);
	echo "<td align='left' colspan='3'><table  border='1' width='100%'>";
	echo "<tr><td ><input type='checkbox' id='chkid' name='checkall' onclick='checkedAll();' /></td><td>Select All</td></tr>";
	$i=0;	

	
	while(@$data1=mysql_fetch_array($result))
	{
		echo "<tr><td><input type='checkbox' name='chk[]' value='$data1[ch_id]'/></td><td>Chapter".$data1['chap_no']."(".$data1['chapname'].")</td></tr>";
		$i++;	
	}

	echo'<tr>
      <td></td><td align="left"><input type="submit" name="comp" value="View Question"/></td>
    </tr>';

	echo "</table></td>";
	
	
}
?>
