<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">

function showchap(b)
{
	var a=document.getElementById("class");	
	var p=a.options[a.selectedIndex].value;
	var a=document.getElementById("sub");	
	var b=a.options[a.selectedIndex].value;
	//alert(b);
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
    document.getElementById("txtchap").innerHTML=xmlhttp.responseText;
    }
  	}
  
	 xmlhttp.open("GET","getdata1.php?cname="+p+"&&sname="+b,true); 
	 xmlhttp.send();

}
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
</script>
</head>
<body id="que">

<?php include("adminheader.php"); ?>


<form  id="frm" method="post" name="myfrom" action="addque.php">
<table border="0" cellspacing="8px" cellpadding="8px" align="center"  width="50%" style="margin-top:5px; vertical-align:top">
    <tr id="msg">
    <td   colspan="2" style="color:#F00">
    <?php if (isset($_GET['q']))
					{
					echo 'Please Select One Or More Chapter';
					}
					?>

    </td>
    </tr>
    <tr>
		<td colspan="3" style="font-weight:bold;font-size:25px;"><u> Add Question</u> </td>
	</tr>
    <tr>
    	<td style="font-size:15px">Class</td><td>:</td>
        <td><select id="class"  style="font-size:15px;width:140px" onchange="showbook(this.value)" >
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
        <select name="subname" style="font-size:15px;width:140px" >
        		<option value="">--Select Subject--</option>
                  </select>
        </td>
     </tr>
     <tr id="txtchap"><td align="justify" style="font-size:15px;"></td></tr>
     
      <td colspan="2"></td><td align="left"><input type="submit" name="comp" value="Add Question"/></td>
    </tr>

</table>
</form>
<!--</form>-->
<!--<div id="txtHint"><b><h1>Wel Come Home Page</h1></b></div>
--></body>
</html>