<html>
<head>
<script type="text/javascript">
function checkedAll () {
	var a;
	if(document.getElementById('chkid').checked==true)
	{
		a=true;
	}
	else
	{
		a=false;
	}
	var c = new Array();
  c = document.getElementsByTagName('input');
  for (var i = 0; i < c.length; i++)
  {
    if (c[i].type == 'checkbox')
    {
      c[i].checked = a;
    }
  }
}
</script>
</head>
</html>

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
	
	echo"<table align='center' width='60%' cellpadding='10px' cellspacing='0px' border='1'><tr align='left' id='msg' style='display:none; color:red;'><th colspan='4'>Please Select At List One Question</th></tr><tr  bgcolor='gray'><td><input type='checkbox' id='chkid' name='checkall' onclick='checkedAll();' /><th colspan='2'>Select Question</th><th>Marks</th></tr>";
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
		echo "<tr><td><input type='checkbox' value='$data[chkid]' name='cnt[]'></td><td>".$queno."</td><td>".$data['que']."</td><td align='center'><input type='text' name='qnt[]' value='$data[marks]' size='1' /></td></tr>";
		$queno++;
		$checkbox++;
		$cbid=$cbid + $checkbox;
		$total +=$data['marks'];
	
	
	}
	}
	echo"<tr><td colspan='4' align='center'><input type='submit' name='generate' value='Start Exam' onclick='total($total)' > </td></tr></table></form>";
	
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

$p=0;
//echo $_SESSION['id'];
//echo "insert into expert_paper (u_id,c_id,s_id) values('".$_SESSION['id']."','".$_POST['cla_id']."','".$_POST['sub_id']."')";
$result=mysql_query("insert into  expert_paper (u_id,c_id,s_id,u_type) values('".$_SESSION['id']."','".$_POST['cla_id']."','".$_POST['sub_id']."','p')");

$result=mysql_query("select max(p_id) from expert_paper");
$data=mysql_fetch_array($result);
echo "<table align='center' width='50%' cellspacing='0' cellpadding='10px'><tr><td colspan='3' style='color:green;'>Question Paper Successfully Generated</td></tr><tr bgcolor='gray' style='text-align:center;color:white;' ><td>NO</td><td>Question</td><td>Marks</td></tr>";
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
