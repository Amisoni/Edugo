<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php include("adminheader.php"); ?>
<form name="newfile" action="#" method="post" enctype="multipart/form-data">
<table align="center" border="0" width="50%">
<tr>
<td>
Upload File
</td>
<td>:</td>
<td><input type="file" name="excel" id="excel" />
</td>
<td>
<input type="submit" name="upload" id="upload" value="Submit"/>
</td>
</tr>

</table>
<input type="hidden" name="chap_id" value="<?php echo $_POST['chap_id']; ?>"/>
<table  border="0" cellspacing="8px" cellpadding="8px" align="center"  width="50%" style="vertical-align:top">
<tr>
	<td colspan="2" style="font-weight:bold;font-size:25px;"><u> Insert Question</u> </td>
</tr>
<tr>
	<td>Question:</td>
	<td colspan="2"><input type="text" name="que" id="que" placeholder=" Enter Question" size="40" /></td>
</tr>

<tr>
	<td>Option1:</td>
	<td>
    	<input type="text" name="opt1"  placeholder=" Enter First Option"  />
    </td>
    <td>	
        <img src="image/wrong.jpg" width="25px" height="30px"/>
    </td>
</tr>
<tr>
<td>
Option2:
</td>
<td>
<input type="text" name="opt2" placeholder=" Enter First Option"  />
</td>
<td>	
        <img src="image/wrong.jpg" width="25px" height="30px"/>
    </td>
</tr>

<tr>
<td>
Option3:
</td>
<td>
<input type="text" name="opt3" placeholder=" Enter First Option" />
</td>
<td>	
        <img src="image/wrong.jpg" width="25px" height="30px"/>
    </td>
</tr>
<tr>
<td>
Option4:
</td>
<td>
<input type="text" name="opt4" placeholder=" Enter First Option"  />
</td>
<td>	
        <img src="image/right.jpg" width="25px" height="30px"/>
    </td>
</tr>
<tr>
<td>Marks:
</td>
<td>
<input type="text" name="marks" size="5" />
</td>
</tr>
<tr>
<td>
<input type="submit" name="submitque"  />
</td>
<td>
<?php
if(isset($_POST['submitque']))
{
	include("../config.php");
	//echo "insert into chap2 (sub,que,a,b,c,d,marks) value(".$_POST['chap_id'].",'".$_POST['que']."','".$_POST['opt1']."','".$_POST['opt2']."','".$_POST['opt3']."','".$_POST['opt4']."','".$_POST['marks']."'";
	$result=mysql_query("insert into chap2 (sub,que,a,b,c,d,marks) value(".$_POST['chap_id'].",'".$_POST['que']."','".$_POST['opt1']."','".$_POST['opt2']."','".$_POST['opt3']."','".$_POST['opt4']."','".$_POST['marks']."')");
	echo "<label style='color:green;'> Record Successfully Inseted";
	//echo "Question Submited";
}
?>
</td>
</tr>
<tr>
<td colspan="3" >
<?php
if(isset($_POST['submitque']))
{
include("../config.php");
$result1=mysql_query("select * from chap2 where sub='".$_POST['chap_id']."'");
$no=1;
if(mysql_num_rows($result1)>0)
{
echo "<table cellpadding='0' cellspacing='0' align='center' width='100%'><tr style='color:#FFF' bgcolor='gray' ><td>No.</td><td>Question</td><td>Ans1</td><td>Ans2</td><td>Ans3</td><td>Ans4</td><td>Marks</td></tr>";
while($data=mysql_fetch_array($result1))
{
	//echo $data['que'];
	echo "<tr align='justify'><td>".$no."</td><td>".$data['que']."</td><td>".$data['a']."</td><td>".$data['b']."</td><td>".$data['c']."</td><td>".$data['d']."</td><td>".$data['marks']."</td></tr>";		
	
	$no++;
}
	echo "</table>";
}
unset($_POST['submitque']);
mysql_close();
}
?>

</td>
</tr>
</table>
</form>
<?php
include("../config.php");
if(isset($_POST['upload']))
{
@require_once 'excel/reader.php';
  
	move_uploaded_file($_FILES['excel']['tmp_name'], "new/".$_FILES['excel']['name']);
	$filepath = "new/".$_FILES['excel']['name']; 
  
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');

$data->read($filepath);
error_reporting(E_ALL ^ E_NOTICE);
echo "<table align='center' width='50%' cellspacing='0' cellpadding='0'><tr style='background-color:gray;'><td>Index</td><td>Question</td><td>Option1</td><td>Option2</td><td>option3</td><td>Option4</td><td>Marks</td></tr>";
if($data->sheets[0]['numRows']>0&&$data->sheets[0]['numCols']==6)
{
	$no=1;
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	//for ($i = 1; $i <=2; $i++) {
	echo "<tr><td>".$no."</td><td>".$data->sheets[0]['cells'][$i][1]."</td><td>".$data->sheets[0]['cells'][$i][2]."</td><td>".$data->sheets[0]['cells'][$i][3]."</td><td>".$data->sheets[0]['cells'][$i][4]."</td><td>".$data->sheets[0]['cells'][$i][5]."</td><td>".$data->sheets[0]['cells'][$i][6]."</td></tr>";
	
	//echo "insert into chap2 (que,a,b,c,d,marks,sub) values('".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."','".$data->sheets[0]['cells'][$i][5]."','".$data->sheets[0]['cells'][$i][6]."','".$_POST['chap_id']."')";
	echo "<br />";
	mysql_query("insert into chap2 (que,a,b,c,d,marks,sub) values('".$data->sheets[0]['cells'][$i][1]."','".$data->sheets[0]['cells'][$i][2]."','".$data->sheets[0]['cells'][$i][3]."','".$data->sheets[0]['cells'][$i][4]."','".$data->sheets[0]['cells'][$i][5]."','".$data->sheets[0]['cells'][$i][6]."','".$_POST['chap_id']."')");
	$no++;
	/*for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) 
	{
		//for ($j = 1; $j <= 2; $j++)
		//{ 
		echo "<td>".$data->sheets[0]['cells'][$i][$j]."</td>"; 	
	}*/
	echo "</tr>";

}
}
else
{
	echo "Please Provide Valid Excel File";
}
	
echo "</table>";
}

//print_r($data);
//print_r($data->formatRecords);
?>

</body>
</html>