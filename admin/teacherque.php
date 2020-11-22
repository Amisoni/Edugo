<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
function showchap(b)
{
	var a=document.getElementById("class");	
	var p=a.options[a.selectedIndex].value;
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
  
	 xmlhttp.open("GET","getdata.php?cname="+p+"&&sname="+b,true); 
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
  
 xmlhttp.open("GET","getdata.php?q="+str,true); 
 xmlhttp.send();
}
</script>
</head>
<?php include("adminheader.php"); ?>


<body>
<!--<form method="post" action="showque.php">
--><form  id="frm" method="post" name="myform" action="que1.php">
<table border="0" cellspacing="8px" cellpadding="8px" align="center"  width="50%" style="vertical-align:top">
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
		<td colspan="3" style="font-weight:bold;font-size:25px;"><u>View Question</u> </td>
	</tr>
	<tr>
    	<td style="font-size:15px">Class</td><td>:</td>
        <td><select id="class" name="c_id" style="font-size:15px; width:140px" onchange="showbook(this.value)" >
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
        <!--<div id="txtHint"><b><h1>Wel Come Home Page</h1></b></div>-->
        <select name="subname" style="width:140px; font-size:15px;" >
        		<option value="">--Select Subject--</option>
                  </select>
        </td>
     </tr>
     <tr></tr>
    
    <tr align="left"></tr>
     <tr id="txtchap"><td><th colspan="2" align="justify" style="font-size:20px;"></th></td></tr>
      <td colspan="2"></td><td align="left"><input type="submit" name="comp" /></td>
    </tr>

</table>
</form>
<!--</form>-->
<!--<div id="txtHint"><b><h1>Wel Come Home Page</h1></b></div>
--></body>
</html>