<?php
if($_GET['hindi']==2010)
{
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wabsupport", $con);

$q=mysql_query("select * from form1 where csd_id Like '%hindi 2010%'");

$s="jp";
$p=0;
$que=1;
echo"<table border='1'>";
while($d=mysql_fetch_array($q))
{
 echo "<tr><td>".$que."</td><td>".$d[2]."</td><td><input type='radio' name=".$s." >".$d[3]."</td><td><input type='radio' name=".$s.">".$d[4]."</td><td><input type='radio' name=".$s.">".$d[5]."</td><td><input type='radio' name=".$s.">".$d[6]."</td></tr>";
 $p=$p+1;
 $s=$s+$p;
 $que++;
}
echo"</table>";
mysql_close($con);
}

if($_GET['hindi']==2013)
{
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wabsupport", $con);

$q=mysql_query("select * from form1 where csd_id Like '%hindi 2013%'");

$s="jp";
$p=0;
$que=1;
echo"<table border='1'>";
while($d=mysql_fetch_array($q))
{
 echo "<tr><td>".$que."</td><td>".$d[2]."</td><td><input type='radio' name=".$s." >".$d[3]."</td><td><input type='radio' name=".$s.">".$d[4]."</td><td><input type='radio' name=".$s.">".$d[5]."</td><td><input type='radio' name=".$s.">".$d[6]."</td></tr>";
 $p=$p+1;
 $s=$s+$p;
 $que++;
}
echo"</table>";
mysql_close($con);
}

?>