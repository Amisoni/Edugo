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

echo "SELECT *
FROM expert_Paper e, sun s, class c, subject s1, father f
WHERE e.u_type = 'p'
AND e.u_id = s.p_id
AND c.c_id = e.c_id
AND s1.s_id = e.s_id
AND s.s_id =".$id." and s.p_id=f.id";

echo "<table style='width:60%;'>";
while(@$data=mysql_fetch_array($result))
{
	echo "<tr><td rowspan='4'><img src='../parent/".$data['image']."' width='150px' height='150px' /> </td>";
	echo "<td colspan='3'>Your Parent Generate a Paper</td></tr>";
	echo "<tr><td>Class</td><td>:</td><td>".$data['cname']."</td></tr>";
	echo "<tr><td>Subject</td><td>:</td><td>".$data['sname']."</td></tr>";
	echo "<tr><td colspan='4'><a href='expert_paper_exam.php?p_id=".$data[0]."'>Click Here To Give Exam</a></td></tr>";
	echo "<tr><td colspan='4'><hr style='background-color:#03F;'/></td></tr>";
}
echo "</table>";
mysql_close();
?>


   <?php
    include("../config.php");
	error_reporting(0);
	$t_marks=0;
	$a=0;
	$ans=$_POST['ans'];
	$cnt=count($_POST['ans']);
	echo "<br />";
	array_chunk($ans,2);
	$ques_id=$_POST['id'];
	$rightans=$_POST['r_ans'];
	$ab=0;
	$marks=$_POST['marks'];
	$count=0;
	$q_cnt=count($_POST['id']);
	$skipp=0;
	$no=1;
	$attemp=0;
	echo "<table frame='box' style='border:2px' align='center' cellspacing='0px' cellpadding='10px'>";
	echo "<tr bgcolor='#CCCCCC'><td>No</td>";
	echo "<td>Question</td>";
	echo "<td>Your Ans</td>";
	echo "<td>Right Ans</td>";
	echo "<td>Marks</td>";
	echo "<td></td></tr>";
	
	for($i=0;$i<$cnt;$i++)
	{
		
		$que=mysql_query("select * from chap2 where chkid=".$ques_id[$i]);
		$ques=mysql_fetch_array($que);
		if($i%2==0)
		{
		echo "<tr><td>".$no."</td><td>".$ques['que']."</td><td>".$ans[$i]."</td><td style='color:green'>".$rightans[$i]."</td><td>".$marks[$i]."</td>";
		}
		else
		{
			echo "<tr bgcolor='#CCFFCC'><td>".$no."</td><td>".$ques['que']."</td><td>".$ans[$i]."</td><td style='color:green'>".$rightans[$i]."</td><td>".$marks[$i]."</td>";
		}
		if($rightans[$i]==$ans[$i])
		{
		//	if($ans[$i]=='null')
		
			
			echo "<td><img src='images/right.jpg' width=25px height=25px></td></tr>";
			
			$count=$count+$marks[$i];
			//echo "<br>".$count;
		}
		else
		{
			if($ans[$i]=="none")
			{
				echo "<td><img src='images/skipp5.jpg'width=25px height=25px></td></tr>";
				$skipp++;
			}
			else
			{
				echo "<td><img src='images/wrong.jpg'width=25px height=25px></td></tr>";
				//$count=$count-($marks[$i]/4);	
			}
		}
		$t_marks=$t_marks+$marks[$i];
		$no++;
		$ab=$ab+$a[$i];
		//echo "$ques_id[$i]";
	}
	$attemp=(($no-$skipp)-1);

                        include("../config.php");
						$id=$_SESSION['id'];
			if($_SESSION['id']!="")
			{
			
			
			$q="select * from student where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			}
			else
			{
				header('location:registration/first.php');	
			}
			$date=date("d.m.Y");
			$date1 = date('Y-m-d h:i:s', time());
$query="insert into result(sid,sname,attempt,skip,totalmarks,getmarks,date) values('".$_SESSION['id']."','".$data['f_name']."','".$attemp."','".$skipp."','".$t_marks."','".$count."','".$date1."')";
echo "<tr bgcolor='#ccccc'><td></td><td>Total Attempted Que : ".$attemp=(($no-$skipp)-1)."</td><td></td><td>Skipped Question :".$skipp."</td><td><font>Obtains  Marks ".$count."/".$t_marks."</td><td></td></tr></table>"; 

mysql_query($query);
@$result=mysql_query("select max(rid) from result");
@$data=mysql_fetch_array($result);
$no=count($ques_id);
//echo $no;
$i=0;
$a=$data[0];
while($i<$no)
{
	//echo "insert into result_que (r_id,q_id,q_marks,r_ans) value(".$a.",".$ques_id[$i].",".$marks[$i].",'".$ans[$i]."')";
	mysql_query("insert into result_que (r_id,q_id,q_marks,r_ans) value(".$a.",".$ques_id[$i].",".$marks[$i].",'".$ans[$i]."')");
	$i++;
}
mysql_query("insert into profile (n_id,t_id,s_id) values(".$a.",2,".$id.")");
mysql_close();


?>	