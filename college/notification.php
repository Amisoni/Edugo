<?php
include('../config.php');

$id=$_SESSION['id'];
//$id=233;
//echo "select * from expert_Paper e, sun s,class c  where e.u_type='p' and e.u_id=s.p_id and c.c_id=e.c_id and c.s_id=e.s_id and s.s_id=".$id."";
$result=mysql_query("SELECT *
FROM expert_paper e, sun s, class c, subject s1, father f
WHERE e.u_type = 'p'
AND e.u_id = s.p_id
AND c.c_id = e.c_id
AND s1.s_id = e.s_id
AND s.s_id =".$id." and s.p_id=f.id");
echo "<table style='width:60%;'>";
while(@$data=mysql_fetch_array($result))
{
	echo "<tr><td rowspan='4'><img src='../parent/".$data['image']."' width='150px' height='150px' /> </td>";
	echo "<td colspan='3'>Your Parent Generate a Paper</td></tr>";
	echo "<tr><td>Class</td><td>:</td><td>".$data['cname']."</td></tr>";
	echo "<tr><td>Subject</td><td>:</td><td>".$data['sname']."</td></tr>";
	echo "<tr><td colspan='4'><a href='expert_paper_exam.php?p_id=".$data[0]."&&u_type=p'>Click Here To Take Exam</a></td></tr>";
	echo "<tr><td colspan='4'><hr style='background-color:#03F;'/></td></tr>";
	mysql_query("update expert_paper set status=0 where p_id=".$data[0]."");
}
echo "</table>";
mysql_close();
?>

