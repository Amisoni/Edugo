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
	document.getElementById('pro').style.display="none";
	document.getElementById('archi').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	document.getElementById('pro1').style.backgroundColor="gray";
	document.getElementById('archi1').style.backgroundColor="gray";
	
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
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div style="margin-left:5px">EduGo&nbsp;<img src="../registration/image/student.jpg" height="33px" width="33px" ></div></td>
    <td style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:13px;font-weight:bold">
    	<?php 
			
            include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
			$q="select * from student where ID=".$id;
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
<form method="post" action="s_insert.php" enctype="multipart/form-data">

<table width="70%" align="center"  style="text-align:center;" border="1px"><tr>
<td>
<table width="100%" style="vertical-align:top; text-transform:capitalize; color:#CCC; cursor:pointer;" cellpadding="0" cellspacing="0">
<tr bgcolor="gray" style="text-align:center; cursor:pointer" >
<td id="s_add1" bgcolor="#FFFFFF" width="100px" height="30px;"><label onclick="display('s_add')">Profile Picture</label></td>
<td id="s_det1"><label onclick="display('s_det')">Address</label></td>
<td id="p_del1"><label onclick="display('p_del')">Intersted</label></td>
<td id="archi1"><label onclick="display('archi')">About You</label></td>
<td id="pro1"><label onclick="display('pro')">About School</label></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table id="s_add" width="60%" align="center" style="vertical-align:top" cellpadding="5" cellspacing="5" bordercolor="#0099FF">
<tr>
    	<td align="center" colspan="3">
        <img src="../images/images.jpg" width="150" height="150" />
        
        </td>
    </tr>

<tr>
		<td>
			<label>Profile Picture :</label>
		</td>
		<td colspan="2">
			<input type="file" name="fileupload" id="fileupload"/>
            </td>
</tr>
<tr>
	<th colspan="3"><input type="button" name="b_address" value="Next" onclick="display('s_det')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('s_det')"/>
    
    </th>
</tr>

</table>

<table align="center" cellpadding="5" cellspacing="5" id="s_det" style="display:none;vertical-align:top; text-align:left;" width="60%" border="0">
<tr>
	<td colspan="2"><h2><u>Address Detail</u></h2></td>
</tr>

<tr>
        <td>
        <label>Permenent Address:</label>
        </td>
        <td>
        	<input type="text" width="200" name="paddress" id="paddress" /></td></tr>	
		    <tr>   
            <td ><label>Town :</label></td><td><input type="text" width="200" name="town" id="town"/></td>
			</tr>
            <tr>
           <td ><label>City :</label></td><td><select name="city" id="city">
            <option value="City">--City--</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Diu">Diu</option>
            <option value="Maheshana">Maheshana</option>
            <option value="London">London</option>
            </select></td></tr>
			<tr>
            <td >
            <label>Zip code :</label></td><td><input type="text" width="200" name="zipcode" id="zipcode" /></td>
			</tr>
            
            <tr>
            <td >
            
 	        <label>Neighberhood :</label></td><td><input type="text" width="200" name="neighberhood" id="neighberhood" /></td>
            </tr>
            
    
	
    <tr>
		<td>
			<label>Temparary Address:</label>
        </td>
        <td>
        	<input type="text" width="200" name="taddress" id="taddress" />
        </td>
	</tr>
    
<tr>
	<th colspan="2" align="center"><input type="button" name="b_address" value="Next" onclick="display('p_del')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('p_del')"/></th>
</tr>

</table>

<table id="p_del" align="center" style="display:none; width:60%; vertical-align:top; text-align:left" cellpadding="5" cellspacing="5" border="0">
<tr>
	<td colspan="2"><h2><u>Intersted Detail</u></h2></td>
</tr>

	<tr>
        <td >
            <label>Hobby :</label>
            </td>
 
        <td>
        	<input type="text" width="200" name="hobby" id="hoby"/>
        </td></tr>
         <tr>   
        <td>
        	<label>Sports :</label>
        </td>
        <td>
        	<input type="text" width="200" name="sport" id="sport"/>
        </td>
        </tr>
         <tr>   
        <td >
        	<label>Subject :</label>
        </td>
        <td>
        	<input type="text" width="200" name="subject" id="subject"/>
        </td>
        </tr>
    <tr>
    	<th colspan="2" align="center"><input type="button" name="b_address" value="Next" onclick="display('archi')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('archi')"/></th>
    </tr>
    
</table>

<table id="archi" align="center" style="display:none; width:60%; vertical-align:top; text-align:left" cellpadding="5" cellspacing="5" border="0">

<tr>
	<td colspan="2"><h2><u>About You</u></h2></td>
</tr>

    	<tr>
        <td ><label>Relegions :</label></td>
        <td><input type="text" width="200" name="Relegions" id="Relegions"/>
        </td>
        </tr>
        <tr>
        <td>
        	<label>language :</label>
            </td><td>
            <label>Gujrati</label><input type="checkbox" name="gujrati" id="gujrati" value="gujrati"/>
            <label>Hindi</label><input type="checkbox" name="Hindi" id="Hindi" value="Hindi"/>
            <label>English</label><input type="checkbox" name="English" id="English" value="English"/>
            
        </td></tr>
        <tr>
        <td>
        	<label>Discription :</label>
        </td>
        <td>
        	<input type="text" width="200" name="discription" id="discription"/>
        </td>
        </tr>
<tr>
<td colspan="2" align="center">
<input type="button" name="b_address" value="Next" onclick="display('pro')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('pro')"/>
</td>
</tr>
    </table>

<table id="pro" align="center" style="display:none; width:60%; vertical-align:top; text-align:left;" cellpadding="5" cellspacing="5" border="0">
<tr>
	<td colspan="2"><h2><u>About School Detail</u></h2></td>
</tr>

	<tr>
        <td><label>School Name :</label></td>
        <td><input type="text" width="200" name="schoolname" id="schoolname"/>
        </td>
        </tr>
        <tr>
        <td>
        	<label>School principal Name :</label>
        </td>
        <td>
        	<input type="text" width="200" name="sch_pri_name" id="sch_pri_name"/>
        </td>
        </tr>
        <tr>
        <td>
        	<label>Contact Number :</label>
        </td>
         <td>
        	<input type="text" width="200" name="contactno" id="contactno"/>
        </td>
       </tr>
       
        <tr>
        <th  colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Save&Exit"/></th>
        </tr>
    
</table>
</td>
</tr>
</table>



</form>
</div>
</body>
</html>