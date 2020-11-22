 
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
	echo "<tr bgcolor='#ccccc'><td>No</td>";
	echo "<td>Question</td>";
	echo "<td>Your Ans</td>";
	echo "<td>Right Ans</td>";
	echo "<td>Marks</td>";
	echo "<td></td></tr>";
	for($i=0;$i<$cnt;$i++)
	{
		
		$que=mysql_query("select * from chap2 where chkid=".$ques_id[$i]);
		$ques=mysql_fetch_array($que);
		
		echo "<tr><td>".$no."</td><td>".$ques['que']."</td><td>".$ans[$i]."</td><td style='color:green'>".$rightans[$i]."</td><td>".$marks[$i]."</td>";
		
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
			$date1 = date('Y-m-d h:i:s a', time());
$query="insert into result(sid,sname,attempt,skip,totalmarks,getmarks,date) values('".$_SESSION['id']."','".$data['f_name']."','".$attemp."','".$skipp."','".$t_marks."','".$count."','".$date1."')";
echo "<tr bgcolor='#ccccc'><td></td><td>Total Attempted Que : ".$attemp=(($no-$skipp)-1)."</td><td></td><td>Skipped Question :".$skipp."</td><td><font>Obtains  Marks ".$count."/".$t_marks."</td><td></td></tr></table>"; 

mysql_query($query);
@$result=mysql_query("select max(rid) from result");
@$data=mysql_fetch_array($result);
//echo $_POST['p_id'];
mysql_query("insert into exam_expert(r_id,p_id,u_type) value(".$data[0].",'".$_POST['p_id']."','".$_POST['u_type']."')");
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