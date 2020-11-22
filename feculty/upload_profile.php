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

	document.getElementById('s_add').style.display="none";
	
	document.getElementById('s_det').style.display="none";
	
	document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	
	document.getElementById('archi').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	
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
	<td width="60%" height="110px" style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;padding-left:25px"><div style="margin-left:5px">EduGo&nbsp;<img src="../registration/image/feculty.jpg" height="33px" width="33px" ></div></td>
    <td style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:13px;font-weight:bold">
    	<?php 

			
                        include("../config.php");
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			
			$q="select * from feculty where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);
			echo "<font color='#FFFFFF'>Welcome ".ucfirst($data['f_name'])." ".ucfirst($data['l_name'])."</font>";
			}
			else
			{
				//header('location:../registration/first.php');	
			}
		?>
 </td>
   <td width="10%" style="vertical-align: middle; font-size: 20px; font-family: Miriam; color: #FFFFFF; font-weight: bold;"><a href="../logout.php?logout=1" style="color:#FFF"> Logout </a></td>
</tr>
</table>
<form method="post" action="finsert.php" enctype="multipart/form-data">
<table width="70%" align="center" border="1px" >
<tr>
<td>
<table width="100%" style="vertical-align:top; text-transform:capitalize; color:#CCC; cursor:pointer;" cellpadding="0" cellspacing="0" border="1">
<tr bgcolor="gray" style="text-align:center; cursor:pointer">
<td id="s_add1" bgcolor="#FFFFFF" width="100px" height="30px;"><label onclick="display('s_add')">Profile Picture</label></td>
<td id="s_det1"><label onclick="display('s_det')">Address</label></td>
<td id="p_del1"><label onclick="display('p_del')">Designation</label></td>
<td id="archi1"><label onclick="display('archi')">School Detail</label></td>

</tr>
</table>
<table id="s_add" width="60%" align="center" style="vertical-align:top" cellpadding="5" cellspacing="5">
<tr>
    	<td align="center" colspan="3">
        <img src="../images/images.jpg" width="150" height="150" />
        </td>
    </tr>

<tr>
		<th>
			profile Picture :
		</th>
		<td colspan="2">
			<input type="file" name="profilephoto" id="profilephoto" />
            
            </td>
	</tr>
    </table>
    <table align="center" cellpadding="5" cellspacing="5" id="s_det" style="display:none;vertical-align:top" width="60%" border="0">
	<tr>
		<td colspan="2"><h2><u>Address</u></h2></td>
    </tr>
    <tr>
        <td>
        Permenent Address:</td>
        <td>
        	<textarea name="address" id="address"></textarea>
        </td>
      </tr>
           
            <tr>   
            <td>Town :</td><td><input type="text" name="town" id="town"/></td>
			</tr>
            <tr>
           <td>City :</td>
           <td><select name="city" id="city">
            <option>Ahmedabad</option>
            <option>Rajkot</option>
            <option>Diu</option>
            <option>Maheshana</option>
            <option>London</option>
            </select></td></tr>
            
			<tr>
            <td>Zip code :</td><td><input type="text" name="zipcode" id="zipcode" /></td>
			</tr>
            
            <tr>
            <td>  
 	       Neighberhood :</td><td><input type="text" name="neighberhood" id="neighberhood" /></td>
            </tr>
    
<tr>
	<th colspan="2"><input type="button" name="b_address" value="Next" onclick="display('s_det')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('s_det')"/>    
    </th>
</tr>
</table>
<table align="center" cellpadding="5" cellspacing="5" id="s_det" style="display:none;vertical-align:top" width="60%" border="0">
<tr>
    	<th colspan="2">Designation :</th>
        
    	<th>Year of join :        
        <select name="joinyear" id="joinyear">
            <option>Join Year</option>
            </select>
        </th>
        </tr>
        <tr>
        <th>Year of Experiance :
        
         <select name="expyear" id="expyear">
            <option>year of experiance</option>
            </select>
            
        </th>
        </tr>
<tr>
	<th colspan="3"><input type="button" name="b_address" value="Next" onclick="display('p_del')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('p_del')"/></th>
</tr>

</table>

<table id="p_del" align="center" style="display:none; width:60%; vertical-align:top;" cellpadding="5" cellspacing="5" border="0">
	<tr>
    	<td colspan="2"><h2><u>Designation</u></h2></td>
    </tr>
    <tr>
    	<td>Qulification</td><td>:</td>
        <td><select name="sh_qul" style="width:200px;">
        	<option value="Qulification">--Qulification--</option>
            <option value="MBA">MBA</option>
            <option value="MBA">MCA</option>
            <option value="MBA">MCom</option>
            <option value="Mscit">Mscit</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Year Of Joining</td><td>:</td>
        <td><select name="sh_join" style="width:200px;">
        		<option value="Join Year">Join Year</option>
             
                <?php 
					$i=1990;
					//echo $i;
					while($i<2014)
					{
						echo "<option value='$i'>".$i."</option>";
						$i++;
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<td>Experience</td><td>:</td>
        <td><select name="sh_join" style="width:200px;">
        		<option value="Experience Year">--Experience--</option>
             
                <?php 
					$i=1;
					while($i<11)
					{
						echo "<option value='$i'>".$i." year</option>";
						$i++;
					}
				?>
            </select>
        </td>
    </tr>
    <tr>
    	<th colspan="3"><input type="button" name="b_address" value="Next" onclick="display('archi')"/>
    <input type="button" name="b_address" value="Skip" onclick="display('archi')"/></th>
    </tr>
    
</table>

<table id="archi" align="center" style="display:none; width:60%; vertical-align:top;" cellpadding="5" cellspacing="5" border="0">

    	<tr>
        	<td colspan="2"><h2><u>School Detail</u></h2></td>
        </tr>
        <tr>
        <td>School Name :</td>
      	  <td><input type="text" name="schoolname" id="schoolname"/></td>
        </tr>
      
        <tr>
       	<td>Principal name :</td>
        	<td><input type="text" name="princename" id="princename"/></td>
        </tr>
        
        <tr>
        	<td >Contact No :</td>
            <td><input type="text" name="contactno" id="contactno"/></td>
        </tr>
         <tr>
        <th  colspan="2"><input type="submit" value="Save&Exit"/></th>
        </tr>
  
    </table>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>