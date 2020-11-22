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
	var a=document.getElementById("sub");
	var s_id=a.options[a.selectedIndex].value;
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  }
  //alert("view_chap.php?q="+s_id);
 xmlhttp.open("GET","view_chap.php?s_id="+s_id,true); 
 xmlhttp.send();

}
function delete_chap(id)
{
	var a=document.getElementById("sub");
	var s_id=a.options[a.selectedIndex].value;
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  }
  //alert("view_chap.php?q="+s_id);
 xmlhttp.open("GET","view_chap.php?chapid="+id+"&&sid="+s_id,true); 
 xmlhttp.send();

}
function edit_chap(id)
{
	document.getElementById("labcname"+id).style.display="none";
	document.getElementById("txtcname"+id).style.display="block";
	document.getElementById("labename"+id).style.display="none";
	document.getElementById("labcancel"+id).style.display="block";
	document.getElementById("labupdate"+id).style.display="block";
}
function cancel_chap(id)
{
	document.getElementById("labcname"+id).style.display="block";
	document.getElementById("txtcname"+id).style.display="none";
	document.getElementById("labename"+id).style.display="block";
	document.getElementById("labcancel"+id).style.display="none";
	document.getElementById("labupdate"+id).style.display="none";
}
function update_chap(id)
{
	
	var cname=document.forms["myfrom"]["txtcname"+id].value;
	//alert(cname);
	var a=document.getElementById("sub");
	var s_id=a.options[a.selectedIndex].value;
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
    document.getElementById("view").innerHTML=xmlhttp.responseText;
    }
  }
  //alert("view_chap.php?q="+s_id);
 xmlhttp.open("GET","view_chap.php?ch_id="+id+"&&sub_id="+s_id+"&&cname="+cname,true); 
 xmlhttp.send();

}

</script>
</head>
<body id="que">
<?php include("adminheader.php"); ?>

<form  id="frm" name="myfrom" method="post" action="">
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
    	<td colspan="3" style="font-weight:bold;font-size:25px;"><u> View Chapter</u> </td>
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
    <tr align="left">
      <td align="left"><input type="button" name="button" value="View Chapter" onclick="show_chap()"/></td>
    	<td colspan="2" style="color:#0F0;">
        <?php
		if(isset($_POST['submit']))
		{
			//echo "insert into chapter (s_id,chapname) value(".$_POST['sub'].",'".$_POST['chap']."')";
			mysql_query("insert into chapter (s_id,chapname,chap_no) value(".$_POST['sub'].",'".$_POST['chap']."','".$_POST['chap_no'].")");
			echo "Record Successfully Inserted";
		}
		?>
        </td>
    </tr>
	 <tr>
     <td colspan="3" id="view" name="view">
     </td>
     </tr>
</table>
</form>
</body>
</html>