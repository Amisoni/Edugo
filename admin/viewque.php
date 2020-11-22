<?php include("adminheader.php"); ?>
<?php
include("../config.php");
$result1=mysql_query("select * from chap2 ");
$no=1;

echo "<table cellpadding='0' border='1' cellspacing='0' width='100%' align='center' border='1' style='text-align:center;'><tr style='color:#FFF' bgcolor='gray' height='40px'><td>No.</td><td>Question</td><td>Ans1</td><td>Ans2</td><td>Ans3</td><td>Ans4</td><td>Marks</td><td></td><td></td></tr>";
while($data=mysql_fetch_array($result1))
{
	
	//echo $data['que'];
	echo "<tr style='height:40px;'><td>".$no."</td><td>".$data['que']."</td><td>".$data['a']."</td><td>".$data['b']."</td><td>".$data['c']."</td><td>".$data['d']."</td><td>".$data['marks']."</td><td><a href='editview.php?edit_id=$data[chkid]'>Edit</a></td><td><a href='deleteque.php?del_id=$data[chkid]'>Delete</a></td></tr>";		
	
	$no++;

}
	echo "</table>";

?>