<?php require_once('config.php'); ?>
<?php

if(isset($_POST['submit']))
{
$filename=$_FILES['files']['name'] ;
$filename=date('U').$filename;	
$add1 = "import/$filename";	
move_uploaded_file($_FILES['files']['tmp_name'], $add1);
chmod($add1,0777);
basename($_FILES['files']['name'] );	
$filename1="import/$filename";

$objPHPExcel = PHPExcel_IOFactory::load($filename1);
foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
    $worksheetTitle     = $worksheet->getTitle();
    $highestRow         = $worksheet->getHighestRow(); // e.g. 10
    $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
    $nrColumns = ord($highestColumn) - 64;
    echo '<br>Data: <table width="100%" cellpadding="3" cellspacing="0"><tr>';
    for ($row = 1; $row <= $highestRow; ++ $row) {

        echo '<tr>';
        for ($col = 0; $col < $highestColumnIndex; ++ $col) {
            $cell = $worksheet->getCellByColumnAndRow($col, $row);
            $val = $cell->getValue();
            if($row === 1)
            echo '<td style="background:#000; color:#fff;">' . $val . '</td>';
            else
                echo '<td>' . $val . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
/*$fcontents = file ($filename1);	

for($i=1; $i<sizeof($fcontents); $i++) { 
$line = addslashes(trim($fcontents[$i])); 
$arr = explode("\t", $line);	
echo "<pre>";	
print_r($arr);
//exit();	

$Repl_arr=array("[","]");	

foreach($arr as $key=>$val)
{
$arr[$key]=str_replace($Repl_arr,"",$arr[$key]);
$arr_new=$arr[$key];
$arr_new1 = explode(",", $arr_new);



}
//echo "<PRE>";
//var_dump($arr_new1);

$date=explode("/", $arr_new1[0]);
$dd=$date[0];
$mm=$date[0];
$yy=$date[0];
if(strlen($dd)==1){
$dd="0".$dd;
}
if(strlen($mm)==1){
$mm="0".$mm;
}
$date1=$yy."-".$mm."-".$dd;
$name=$arr_new1[0];

$email=$arr_new1[0]; 

$amount=$arr_new1[0];


$sql = "insert into customer set 
date='$date1',
name='$name',
email='$email', 
amount='$amount'";	

echo $sql;
//exit();
//$qr=mysql_query($sql);

echo "-----------1 Row Inserted----------";

$sql ."<br><br>\n";
//if($qr!=0) 
$msg= "Data has been imported";
if(mysql_error()) {
echo mysql_error() ."<br>\n";

}
}

unlink($filename1);
unset($_POST);
$_POST['submit']='';
$_POST='';


//echo "<script>window.location=('addcsv.php');</script>";
*/
} ?>
<html>
<head>
<title>Import CSV</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/decorate.css" rel="stylesheet" type="text/css">



</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td align="center" valign="top"><table width="100%" border="0">
<tr>
<td height="25" align="center" class="label">Import CSV Tax File </td>
</tr>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr>
<td valign="top"><form action="" name="" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
<tr> 
<td width="30%" class="line2">File Name:</td>
<td width="70%" align="left" class="line2"><input name="files" type="file" class="inp"></td>
</tr>
<tr>
<td class="line2">&nbsp;</td>
<td align="left" valign="middle" class="line2">&nbsp;</td>
</tr>
<tr><td class="line2">&nbsp;</td>
<td align="left" valign="middle" class="line2">
<input name="submit" type="submit" class="buttons" value="Submit" ></td>
</tr>
</table>


</form></td>
</tr>
</table></td>
</tr>
</table>
</body>
</html>