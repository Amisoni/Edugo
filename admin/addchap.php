<?php
include("../config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function showbook(str)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  
xmlhttp.onreadystatechange=function()
  {
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  
 xmlhttp.open("GET","getdata1.php?q="+str,true); 
 xmlhttp.send();

}
function show_chap()
{
}
</script>
</head>
<body id="que">
<?php include("adminheader.php"); ?>

<form  id="frm" method="post" action="">
<table border="0" cellspacing="8px" cellpadding="8px" align="center"  width="50%" style="margin-top:5px; vertical-align:top;">

    <tr id="msg">
    <td   colspan="2" style="color:#F00">
    <?php if (isset($_GET['q']))
					{
					echo '<font color="#FF0000">Please Select One Or More Chapter</font>';
					}
					?>

    </td>
    </tr>
    <tr>
    	<td colspan="3" style="font-weight:bold;font-size:25px;"><u> Add Chapter</u> </td>
    </tr>
	<tr>
    	<td style="font-size:15px">Class</td><td>:</td>
        <td><select id="class"  style="font-size:15px;width:140px" name="sub" onchange="showbook(this.value)" >
        		<option value="no">--Select Class--</option>
               <?php 
			   		include("../config.php");
					$cq="select * from class";
					$res=mysql_query($cq);
					while($data=mysql_fetch_array($res))
					{
			   			echo "<option value='".$data['c_id']."'>".$data['cname']."</option>";
					}
			   ?>    
            </select>
        </td>
     </tr> 	
     <tr>
     	<td style="font-size:15px">Subject</td><td>:</td>
        <td id="txtHint">
        <select name="sub" style="font-size:15px;width:140px" >
        		<option value="">--Select Subject--</option>
                  </select>
        </td>
     </tr>
     <tr>
     <td>
     Chapter No:
     </td>
     <td>:</td>
     <td>
     <input type="text" name="chap_no" id="chap" required="Required" />
     </td>
     </tr>
     <tr>
     <td>
     Chapter Name:
     </td>
     <td>:</td>
     <td>
     <input type="text" name="chap" id="chap" required="Required" />
     </td>
     </tr>
    
    <tr align="left">
      <td align="left"><input type="submit" name="submit" value="Add Chapter" /></td>
    	<td colspan="2">
        <?php
		if(isset($_POST['submit']))
		{
			
			$q2="select * from chapter where chapname='".$_POST['chap']."' and s_id='".$_POST['sub']."'";
			//echo $q2;
			$res2=mysql_query($q2);
			$data2=mysql_fetch_array($res2);
		
			if($_POST['chap']!=$data2['chapname'])
			{
			//echo "insert into chapter (s_id,chapname) value(".$_POST['sub'].",'".$_POST['chap']."')";
				mysql_query("insert into chapter (s_id,chapname,chap_no) value(".$_POST['sub'].",'".$_POST['chap']."','".$_POST['chap_no']."')");
				echo "<font color='#339900'>Record Successfully Inserted</font>";
			}
			else
			{
				echo "<font color='#339900'>Chapter Name Has Been Already Inserted.</font>";
			}
		}
		?>
        </td>
    </tr>

</table>
</form>

</body>

</html>