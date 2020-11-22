<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/popup.css" />
<script src="../css/popup1.js" type="text/javascript"></script>
<script>
function display(id)
{
	//
	document.getElementById('s_add').style.display="none";
	
	document.getElementById('s_det').style.display="none";
	
	document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";
}
</script>
</head>
<body style="margin:0px">
<div style="margin-top:-8px;"> 
<table width="100%" bgcolor="#3745F0">
<tr>
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div style="margin-left:5px">EduGo&nbsp;<img src="../registration/image/parent1.jpg" height="33px" width="33px" ></div></td>
    <td style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:13px;font-weight:bold">
    	<?php 
			
include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from father where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#FFFFFF'>Welcome ".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."</font>";
			}
			else
			{
				header('location:registration/first.php');
			}
		?>
 </td>
   <td width="10%" style="vertical-align: middle; font-size: 20px; font-family: Miriam; color: #FFFFFF; font-weight: bold;"><a href="../logout.php?logout=1" style="color:#FFF"> Logout </a></td>
</tr>
</table>
<table width="70%" align="center" border="1px">

<form method="post" action="p_insert.php" enctype="multipart/form-data">
<tr><td>
<table width="100%" align="center" style="vertical-align:top; text-transform:capitalize; color:#CCC; cursor:pointer;" cellpadding="0" cellspacing="0">
<tr bgcolor="gray" style="text-align:center;">
<td></td>
<td id="s_add1" bgcolor="#FFFFFF" width="200px" height="30px;"><label onclick="display('s_add')">Profile Picture</label></td>
<td id="s_det1" width="200px"><label onclick="display('s_det')">Address</label></td>
<td id="p_del1" width="200px"><label onclick="display('p_del')">Qualification Details</label></td>
<td></td>
</tr>
</table>
</td>
</tr>
<tr bgcolor="#FFFFFF">
<td>

<table id="s_add" width="60%" align="center" style="vertical-align:top" cellpadding="5" cellspacing="5" bordercolor="#0099FF">
<tr>
    	<td align="center" colspan="2">
        <img src="../images/images.jpg" width="150" height="150" />
        
        </td>
    </tr>

<tr>
		<td>
			<label>Profile Picture :</label>
		</td>
		<td colspan="2">
			<input type="file" name="profilephoto" id="profilephoto"/>
		</td>
</tr>
<tr>
	<th colspan="3"><input type="button" name="b_address" value="Next" onclick="display('s_det')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('s_det')"/>
    
    </th>
</tr>

</table>

<table align="center" cellpadding="5" cellspacing="5" id="s_det" style="display:none;vertical-align:top;" width="60%">
<tr>
	<td colspan="3"><h2><u>Address Detail</u></h2></td>
</tr>
<tr>
        <td>
        <label>Permenent Address:</label>
        </td>
        <td>
        	<input type="text" name="paddress" id="paddress" /></td>
            </tr>
		    <tr>   
            <td ><label>Town :</label></td><td><input type="text" width="200px" name="town" id="town"/></td>
			</tr>
            <tr>
           <td ><label>City :</label></td><td><select name="city" id="city">
            <option>Ahmedabad</option>
            <option>Rajkot</option>
            <option>Diu</option>
            <option>Maheshana</option>
            <option>London</option>
            </select></td></tr>
			<tr>
            <td >
            <label>Zip code :</label></td><td><input type="text" width="200px" name="zipcode" id="zipcode" /></td>
			</tr>
            <tr>
            <td >
            
 	        <label>Neighberhood :</label></td><td><input type="text" width="200px" name="neighberhood" id="neighberhood" /></td>
            </tr>
            
    
	
    <tr>
		<td>
			<label>Temparary Address:</label>
        </td>
        <td>
        	<input type="text" name="taddress" id="taddress" />
        </td>
	</tr>
<tr>
	<th colspan="3"><input type="button" name="b_address" value="Next" onclick="display('p_del')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('p_del')"/></th>
</tr>

</table>
<table id="p_del" align="center" style="display:none; width:60%; vertical-align:top;" cellpadding="5" cellspacing="5">
<tr>
	<td colspan="3"><h2><u>Education Detail</u></h2></td>
</tr>

<tr>
       	<td>
        	Education Detail :
        </td>
        <td>
        	<select name="edudetail" id="edudetail">
            <option value="Education">Education</option>
            <option value="10th">10th</option>
            <option value="12th">12th</option>
            <option value="Graduate">Graduate</option>
            <option value="Post Graduate">Post Graduate</option>
            
            </select>
        </td>
        
       </tr>
       <tr>
        <td  colspan="3"><input type="submit" name="submit" id="submit" value="Save&Exit"/></td>
        </tr>
  </table>
  </td></tr>
  </form> 
</table>
</div>

</body>
</html>