<?php
if(isset($_GET['id']))
{
	include("../config.php");
	$no=0;
	
	$result=mysql_query("select * from result_que r, chap2 c where r.r_id=".$_GET['id']." and r.q_id=c.chkid");
	echo "<table style='width:100%; height:50px;' align='center' cellpadding='0px' cellspacing='0px' border='0'><tr style='background-color:gray; height:40px;'  align='center'><td>No</td><td>Question</td><td>Answer</td><td>Right Answer</td><td>Marks</td></tr>";
	while($data=mysql_fetch_array($result))
	{
		$no++;
		if($no%2==0)
		{
		echo "<tr style='height:50px;' align='center'  bgcolor=#CCFFCC><td>$no</td><td>".$data['que']."</td><td>".$data['r_ans']."</td><td style='color:green;'>".$data['d']."</td><td>".$data['q_marks']."</td></tr>";
		}
		else
		{
			echo "<tr style='height:50px;' align='center' ><td>$no</td><td>".$data['que']."</td><td>".$data['r_ans']."</td><td style='color:green;'>".$data['d']."</td><td>".$data['q_marks']."</td></tr>";
		}
	}
	
}
?>