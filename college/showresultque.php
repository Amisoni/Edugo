<?php
if(isset($_GET['id']))
{
	include("../config.php");
	$no=0;
	
	$result=mysql_query("select * from result_que r, chap2 c where r.r_id=".$_GET['id']." and r.q_id=c.chkid");
	echo "<table style='width:100%; height:30px;' align='center' cellpadding='0px' cellspacing='0px' border='0'><tr style='background-color:gray;'  align='center'><td>No</td><td>Question</td><td>Answer</td><td>Right Answer</td><td>Marks</td></tr>";
	while($data=mysql_fetch_array($result))
	{
		$no++;
		echo "<tr style='height:30px;'><td>$no</td><td>".$data['que']."</td><td>".$data['r_ans']."</td><td style='color:green;'>".$data['d']."</td><td>".$data['q_marks']."</td></tr>";
	}
	
}
?>