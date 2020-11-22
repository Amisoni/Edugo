
<?php
include('../config.php');

//$id=$_SESSION['id'];
$id=$_SESSION['id'];
//echo "SELECT * FROM exam_expert e, result r, sun s, student s1 WHERE s.p_id =".$id." AND r.sid = s.s_id AND e.r_id = r.rid AND s1.id = s.s_id";
$result=mysql_query("SELECT * FROM exam_expert e, result r, student s1 WHERE s.p_id =".$id." AND r.sid = s.s_id AND e.r_id = r.rid AND s1.id = s.s_id and e.u_type='s'");
echo "<table width='60%'>";
while(@$data=mysql_fetch_array($result))
{
	$s=date('d-M-Y h:i:s a',strtotime($data['date']));
	
	echo "<tr><td rowspan='5'><img src='../student/".$data['image']."' width='150px' height='150px' /></td></tr>";
	echo "<tr><td>".$data['f_name']." ".$data['l_name']." Give Exam on ".$s."</td></tr>";
	echo "<tr><td>Score:".$data['getmarks']."</td></tr>";
	echo "<tr><td>Total Marks:".$data['totalmarks']."</td>";
	echo "<tr><td>View Full Result:<a href='showresultque.php?id=".$data['r_id']."'>Click Here</a></td></tr>";
	echo "<tr><td colspan='4'><hr /></td></tr>";
	mysql_query("update exam_expert e set e.v_type=0 where e.id=".$data[0]);
	//echo "</tr>";
}

mysql_close();

?>