<?php
require_once('calendar/classes/tc_calendar.php');

header ( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0"); 
header ("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="calendar/calendar.js"></script>
<!--<link href="calendar/calendar.css" rel="stylesheet" type="text/css">
--></head>
<body>
<form id="form1" method="post" name="form1" action="que.php" >
<table align="left" style="margin-top:50px" border="1">
<tr>
	<td>Select :</td>
    <td><select name="class" style="height:30px; font-size:20px;">
    		<option value="">Select class</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
    	</select>

    	<select name="subject" style="height:30px; font-size:20px;">
    		<option value="">Select Subject</option>
            <option value="english">English</option>
            <option value="hindi">Hindi</option>
            <option value="resanoing">Resanoing</option>
            <option value="math">Mathematics</option>
    	</select>
       <?php

$myCalendar = new tc_calendar("date5", true, false);
$myCalendar->setIcon("calendar/images/iconCalendar.gif");
$myCalendar->setDate(date('d'), date('m'), date('Y'));
$myCalendar->setPath("calendar/");
$myCalendar->setYearInterval(2000, 2015	);
$myCalendar->dateAllow('2008-05-13', '2015-03-01');
$myCalendar->setDateFormat('j F Y'); 
$myCalendar->setAlignment('left', 'bottom');
//$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
//$myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
//$myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
$myCalendar->writeScript();
?>
            </td>
</tr>
<tr>
	<td>Question :</td>
	<td><input type='text' name='q11' size='40' style="height:30px; font-size:20px;" placeholder=' Enter Your Question ?'/><br /></td>
</tr>
<tr>
	<td>Answer 1 :</td>
	<td ><input type='text' name='a1'size='20' style="height:30px; font-size:20px;" placeholder=' Enter First Answer' /> <input type="radio" name="rightans" value='a'/>Select True Answer<br /></td>
	
</tr>
<tr>
	<td>Answer 2 :</td>
	<td><input type='text' name='a2' size='20' style="height:30px; font-size:20px;" placeholder=' Enter Second Answer'/> <input type="radio" name="rightans" value='b' />Select True Answer<br /></td>
</tr>
<tr>
	<td>Answer 3 :</td>
	<td><input type='text' name='a3' size='20' style="height:30px; font-size:20px;" placeholder=' Enter Third Answer'/> <input type="radio" name="rightans" value='c'  />Select True Answer<br /></td>
</tr>
<tr>
	<td>Answer 4 :</td>
	<td><input type='text' name='a4' size='20' style="height:30px; font-size:20px;" placeholder=' Enter First Answer'/> <input type="radio" name="rightans" value='d' />Select True Answer<br /></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type='submit' name='gn' value='generate' style="height:40px;font-size:20px;" /><input type='submit' name='sp' value='Show Paper' style="height:40px;font-size:20px;"/></td>
</tr>
</table>
<?php

//if(isset($_POST['bt1']))

/*echo "Question 1 : <input type='text' name='q11' size='50'/><input type='text' name='a1'
 size='15'/><input type='text' name='a2' size='15'/><input type='text' name='a3' size='15'/><input type='text' name='a4' size='15'/><br /><input type='submit' name='gn' value='generate' /><input type='submit' name='sp' value='Show Paper' />";*/

 if(isset($_POST['gn']))
{
echo $_POST['q11']."<input type='radio' name='ra'>".$_POST['a1']."<input type='radio' name='ra'>".$_POST['a2']."<input type='radio' name='ra'>".$_POST['a3']."<input type='radio' name='ra'>".$_POST['a4'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

header ( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0"); 
header ("Pragma: no-cache");

mysql_select_db("wabsupport", $con);
$mydate = isset($_REQUEST["date5"]) ? $_REQUEST["date5"] : "";
@mysql_query("INSERT INTO form1 (csd_id,que,ans1,ans2,ans3,ans4,trueans)VALUES ('".$_POST['class'].' '.$_POST['subject'].' '.$mydate."','$_POST[q11]','$_POST[a1]','$_POST[a2]','$_POST[a3]','$_POST[a4]','$_POST[rightans]')");
mysql_close($con);
//header('location:questionpaper.php');
}

if(isset($_POST['sp']))
{
	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("accountdb", $con);

$q=mysql_query("select * from form1");
$s="jp";
$p=0;
while($d=mysql_fetch_row($q))
{
 echo "<table><tr><td>".$d[2]."</td><td><input type='radio' name=".$s." >".$d[3]."</td><td><input type='radio' name=".$s.">".$d[4]."</td><td><input type='radio' name=".$s.">".$d[5]."</td><td><input type='radio' name=".$s.">".$d[6]."</td></tr></table>";
 $p=$p+1;
 $s=$s+$p;
}
mysql_close($con);
}
?>


</form>
</body>
</html>

