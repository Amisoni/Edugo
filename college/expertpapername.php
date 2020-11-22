<?php 
include("../config.php");

$id=$_SESSION['id'];
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
	$chpq="SELECT *
FROM expert_paper e, subject s, class c, sun s1
WHERE e.s_id = s.s_id
AND c.c_id = s.c_id
AND (
e.u_type != 'p'
OR (
s1.s_id =$id
AND e.u_id = s1.p_id
)
) order by e.p_id desc ";
	//echo $chpq;
	$result=mysql_query($chpq);
	echo "<td colspan='3' align='left'><table border='1' cellspacing='5' width='100%'>";
	echo "<tr>
		<td>Class</td><td>Subject</td><td>Expert Name</td><td></td></tr>";
	$i=0;	

	
	while(@$data1=mysql_fetch_array($result))
	{
		
		//echo "hi...";
		if($data1['u_type']=='f')
		{
			//echo "hi...";
			$n_result=mysql_query("select * from feculty where id=".$data1['u_id']);
		}
		else
		{
			//echo "hi...";
			//echo "select * from tutor where id=".$data1['u_id'];
			$n_result=mysql_query("select * from tutor where id=".$data1['u_id']);
		}
		$n_data=mysql_fetch_array($n_result);
		//echo $n_data['f_name'];
		if($i%2==0)
		{
		echo "<tr style='text-transform:capitalize;'>";
		echo "<td>".$data1['cname']."</td><td>".$data1['sname']."</td><td>".$n_data['f_name']." ".$n_data['l_name']."</td><td><a href='expert_paper_exam.php?p_id=".$data1[0]."'>Give Exam</a></td></tr>";
		}
		else
		{
			echo "<tr style='text-transform:capitalize;' bgcolor='#CCFFCC'>";
		echo "<td>".$data1['cname']."</td><td>".$data1['sname']."</td><td>".$n_data['f_name']." ".$n_data['l_name']."</td><td><a href='expert_paper_exam.php?p_id=".$data1[0]."'>Give Exam</a></td></tr>";
		}
		//echo "expert_paper_exam.php?p_id=".$data1[0]."<br/>";
		$i++;	
	}

	echo "</table></td>";
}
?>
