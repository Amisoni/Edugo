<?php include("adminheader.php");?>
<?php 
include("../config.php");
if(isset($_POST['comp']))
{
	$cb=$_POST['chk'];
	
	$up=count($cb);
	echo "<form method='post' action='#' onsubmit='return valid()'>";
	echo "<input type='hidden' name='sub_id' value='".$_POST['s_id']."' />";
	//echo $_POST['s_id'];
	echo "<input type='hidden' name='cla_id' value='".$_POST['c_id']."' />";
	//echo $_POST['c_id'];
	//echo $up;
	echo "</br>";
	echo"<table align='center' width='100%' border='1' cellpadding='10px' cellspacing='0px'><tr align='left' id='msg' style='display:none; color:red;'><td>Please Select At List One Question</td></tr><tr  bgcolor='#CCCCCC'><td>No</td><td>Questions</td><td>Ans A</td><td>Ans B</td><td>Ans C</td><td>Ans D</td><td>Marks</td><td>Edit</td><td>Delete</td></tr>";
	$queno=1;
	if($up>0)
	{
	for ($i=0;$i<$up;$i++)
	{
	//	echo $i."<br>";
	//	echo $cb1[$i]."<br>";
	$q="select * from chap2 where sub=".$cb[$i];
	//echo $q;
	
	echo "<input type='hidden' name='sub[]' value='$cb[$i]' />";
    
	$res=mysql_query($q);
	$cbid="cb";
	
	$checkbox=1;
	$total=0;
    
	while($data=mysql_fetch_array($res))	
	{		//echo $queno;
	$a=$queno%2;
	if($a==0){
		echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td>".$data['a']."</td><td>".$data['b']."</td><td>".$data['c']."</td><td>".$data['d']."</td><td align='center'>".$data['marks']."</td><td><a href='adminview.php?id=$data[chkid]'>Edit</a></td><td><a href='delete.php?id=$data[chkid]'>Delete</a></td></tr>";
	}else{
		echo "<tr bgcolor=#CCFFCC><td>".$queno."</td><td>".$data['que']."</td><td>".$data['a']."</td><td>".$data['b']."</td><td>".$data['c']."</td><td>".$data['d']."</td><td align='center'>".$data['marks']."</td><td><a href='adminview.php?id=$data[chkid]'>Edit</a></td><td><a href='delete.php?id=$data[chkid]'>Delete</a></td></tr>";
		}
		$queno++;
		$checkbox++;
		$cbid=$cbid + $checkbox;
		$total +=$data['marks'];
	}
	}
	echo"</table></form>";
	
	mysql_close();
	unset($_POST['submit']);

	}
	else
	{
		header('Location:teacherque.php?q=1');
	}
}

?>

<form method='post' name frm3 action='que1.php'>
<?php
//echo "<form method='post' name='gn' action='que.php'>";
if(isset($_POST['generate']))
{
$foo = $_POST['cnt'];
$qnt=$_POST['qnt'];
$sum=0;
$s=$_POST['sub'];
include("../config.php");
	
if (!$con)
  { 
  die('Could not connect: ' . mysql_error());
  }

if (count($foo) > 0 && count($qnt) > 0) {	
$i=0;
$t=0;
$j=0;
$m=1;
//echo count($foo); 
session_start();
$p=0;
//echo $_SESSION['id'];
//echo "insert into expert_paper (u_id,c_id,s_id) values('".$_SESSION['id']."','".$_POST['cla_id']."','".$_POST['sub_id']."')";
$result=mysql_query("insert into  expert_paper (u_id,c_id,s_id) values('".$_SESSION['id']."','".$_POST['cla_id']."','".$_POST['sub_id']."')");
$result=mysql_query("select max(p_id) from expert_paper");
$data=mysql_fetch_array($result);
echo "<table align='center' width='50%' cellspacing='0' cellpadding='10px'><tr bgcolor='#CCCCCC' style='text-align:center;' ><td>NO</td><td>Question</td><td>Marks</td></tr>";
for($t=0;$t<count($s);$t++)
{
	//echo $t. "<br>";
	//echo "select * from chap2 where sub=".$s[$t]."<br />";
    $j=0;
	$result1=mysql_query("select * from chap2 where sub=".$s[$t]);
	while($d=mysql_fetch_array($result1))
	{
		//echo "loop".$j."<br />";
		//echo $data['chkid'];
		for($j=0;$j<count($foo);$j++)
		{
		if($foo[$j]==$d[0])
		{
			echo "<tr align='center'><td>".$m."</td><td align='left'>".$d[4]."</td><td>".$qnt[$p]."</td></tr>";
		//	mysql_query("insert into 
			//echo $foo[$j]."<br /><br />";
			$m++;
			mysql_query("insert into paper_ques (p_id,chkid,u_marks) values(".$data[0].",".$d[0].",".$qnt[$p].")");
		}		
		}
		$p++;
	}
	
}
echo "</table>";


















/*while($i<count($foo))
{
	echo "select * from chap2 where sub=".$s[$t]."<br />";
$q=mysql_query("select * from chap2 where sub=".$s[$t]."");

$j=0;
$p=0;
echo "<table width=70% cellpadding=5 cellspacing='5'>";
while($d=mysql_fetch_array($q))
{
	
	
	if($foo[$j]==$d[0])
	{
		echo "foo[i]:".$foo[$i]."<br />";
	    echo "foo[i]:".$foo[$j]."<br />";
	    echo "d[i]:".$d[0]."<br />";
	/*	echo "<tr><td>".$foo[$i]."</td> <td>".$d[4]."</td><td>".$qnt[$i]."</td></tr><td rowspan='4'></td><td><input type='radio' name=".$s." >".     $d[5]."</td></tr><tr><td> <input type='radio' name=".$s.">".$d[6]."</td></tr><tr><td><input type='radio' name=".$s."> ".$d[7]."</td></tr>     <tr><td><input type='radio' name=".$s."> ".$d[8]."<td></tr>";
		mysql_query("INSERT INTO teacherque (tqid,que,ans1,ans2,ans3,ans4,marks)VALUES 			        	('$foo[$i]','$d[4]','$d[5]','$d[6]','$d[7]','$d[8]','$qnt[$p]')");
		$j++;
		$i++;
	}
	
	$p++;
	$t++;
}
}*/
echo "</table>";
//echo "</form>";
}
@mysql_close($con);
}


?>
