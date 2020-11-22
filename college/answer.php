<?php 
			
            include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
			$q="select * from result where sid=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#FFFFFF'>Welcome..".$data['sname']."!</font>";
			}
			else
			{
				header('location:registration/first.php');	
			}
			$sql="select * from result where sid=".$id." order by sid desc";
			$res=mysql_query($sql);
			echo "<table frame='box' style='border:2px' align='center' cellspacing='0px' cellpadding='10px'>";
			echo "<tr bgcolor='#666666' style='color:#FFF'>";
	echo "<td>Name</td>";
	echo "<td>Attempt</td>";
	echo "<td>Skipped</td>";
	echo "<td>TotalMarks</td>";
	echo "<td>Score</td><td>Date</td><td>Time</td>";
	echo "<td>Take Exam</td><td>View Result</td></tr>";
			$count=0;
			while($data=mysql_fetch_array($res))
			{$count++;
				$mod=$count%2;
				$date=$data['date'];
				//echo $date;
				//$s='10-01-2010';
				$date= date('d-m-Y',strtotime($date));
				$time=date('h:i:s a',strtotime($date));
				
				if($mod==0)
				{
				echo "<tr  bgcolor='#CCFFCC'><td>$data[2]</td><td>$data[3]</td><td>$data[3]</td><td>$data[5]</td><td>$data[6]</td><td>$date</td><td>$time</td>";
				}else
				{
					echo "<tr bgcolor='#FFFFFF'><td>$data[2]</td><td>$data[3]</td><td>$data[3]</td><td>$data[5]</td><td>$data[6]</td><td>$date</td><td>$time</td>";
				}
				/*$per=($data[6]/$data[5])*100;
				if($per<40)
				{*/
				echo "<td><a href='showque.php?again=".$data[0]."'>Click</a></td>";
				echo "<td><a href='showresultque.php?id=".$data[0]."'>Click</a></td></tr>";
				/*}
				else
				{*/
					//echo "<td>Good</td></tr>";
				//}
//echo "Welcome..".$_POST['$var']."!";
			}
			//echo date('dS.m.Y');
			

		?>