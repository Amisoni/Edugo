<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	document.getElementById('s_add1').style.backgroundColor="blue";
	document.getElementById('s_det1').style.backgroundColor="blue";
	document.getElementById('p_del1').style.backgroundColor="blue";
	document.getElementById('pro1').style.backgroundColor="blue";
	document.getElementById('archi1').style.backgroundColor="blue";
	
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";
}
</script>
</head>

<body>
<form method="post" action="schinsert.php" >
<table width="70%" align="center" border="0px"><tr>
<td>
<table width="80%" style="vertical-align:top; text-transform:capitalize; color:#CCC;" cellpadding="0" cellspacing="0">
<tr bgcolor="#0000FF" style="text-align:center">
<td id="s_add1" bgcolor="#FFFFFF" width="100px" height="30px;"><label onclick="display('s_add')">Address</label></td>
<td id="s_det1"><label onclick="display('s_det')">School Details</label></td>
<td id="p_del1"><label onclick="display('p_del')">Principal Details</label></td>
<td id="archi1"><label onclick="display('archi')">School  achievement</label></td>
<td id="pro1"><label onclick="display('pro')">Profile Picture</label></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>

<table id="s_add" width="60%" align="center" style="vertical-align:top">

<tr><th colspan="3"><font color="#006666;">School Address</font></th></tr>
<tr>
	<td>Address</td><td>:</td>
    <td><textarea name="sh_add" rows="3" placeholder=" Enter Address"></textarea> </td>
</tr>
<tr>
	<td>City</td><td>:</td>
    <td><select name="sh_city">
	<option value="Select City">Select City</option>    	
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Gadhinagar">Gadhinagar</option>    	
    <option value="Patan">Patan</option>    	
    <option value="Surat">Surat</option>    	    	
    </select></td>
</tr>
<tr>
	<td>State</td><td>:</td>
    <td><select name="sh_state">
	<option value="Select State">Select State</option>    	
    <option value="Gujarat">Gujarat</option>
    <option value="Mumbai">Mumbai</option>    	
    <option value="Rajesthan">Rajesthan</option>    	
    <option value="Dehli">Dehli</option>    	    	
    </select></td>
    
</tr>
<tr>
	<td>Zip</td><td>:</td>
    <td><input type="text" name="sh_zip" maxlength="6" size="5" placeholder=" Zip Code"/></td>
</tr>
<tr>
	<td>Neighbourhood</td><td>:</td>
    <td><input type="text" name="sh_zip" placeholder=" Enter Neighbourhood"/></td>
</tr>
<tr>
	<th colspan="3"><input type="submit" name="b_address"/></th>
</tr>

</table>

<table align="center" id="s_det" style="display:none;vertical-align:top" width="60%">

<tr>
	<th colspan="3"><font color="#006666;">School Detail</font></th>
</tr>
<tr>
	<td>No Of Feculty</td><td>:</td>
    <td><input type="text" name="sh_feculty" placeholder=" No Of Feculty"/></td>
</tr>
<tr>
	<td>Standard</td><td>:</td>
    <td>
    <table cellpadding="0" cellspacing="0">
    <tr>
    <td>
    <select name="sh_standard1">
    <option value="Select Class">Select Class</option>
    <?php 
		include("../config.php");
		$q="select * from class";
		$res=mysql_query($q);
		while($data=mysql_fetch_array($res))
		{
				echo "<option value='$data[0]'>".$data['cname']."</option>";
		}
	?>
    </select> to
    
        <select name="sh_standard2">
  	  <option value="Select Class">Select Class</option>
    <?php 
		include("../config.php");
		$q="select * from class";
		$res=mysql_query($q);
		while($data=mysql_fetch_array($res))
		{
				echo "<option value='$data[0]'>".$data['cname']."</option>";
		}
	?>
    		</select>
         </td>
        </tr>
    </table>
    </td>
</tr>
<tr>
	<td>Library</td><td>:</td>
    <td><input type="radio" name="sh_library" value="yes"/>Yes
    	<input type="radio" name="sh_library" value="No"/>No
    </td>
</tr>
<tr>
	<td>Play Ground</td><td>:</td>
    <td><input type="radio" name="sh_ground" value="yes"/>Yes
    	<input type="radio" name="sh_ground" value="No"/>No
    </td>
</tr>
<tr>
	<td>No Of Class Room</td><td>:</td>
    <td><input type="text" name="sh_room" placeholder=" No Of Class Room"/>
    </td>
</tr>
<tr>
	<th colspan="3"><input type="submit" name="b_detail"/></th>
</tr>

</table>
<table id="p_del" align="center" style="display:none; width:60%; vertical-align:top;" >
	<tr>
    	<th colspan="3"><font color="#006666;">Principal Detail</font></th>
    </tr>
    <tr>
    	<td>Qulification</td><td>:</td>
        <td><select name="sh_qul">
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
        <td><select name="sh_join">
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
        <td><select name="sh_join">
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
    	<th colspan="3"><input type="submit" name="b_principal" /></th>
    </tr>
</table>


	<table id="archi" align="center" style="display:none; width:60%; vertical-align:top;">

    	<tr>
        	<th colspan="3"><font color="#006666;">School Achivement</font></th>
        </tr>
        <tr>
        	<td>Name Of Achivement</td><td>:</td>
            <td><input type="text" name="sh_achive" placeholder=" Name Of Achivement"/></td>
        </tr>
        <tr>
        	<td>Description</td><td>:</td>
            <td><textarea rows="3" name="sh_des" placeholder=" Description Of Achivement"></textarea></td>
        </tr>
        <tr>
        	<td>Upload Certificate</td><td>:</td>
            <td><input type="file" name="sh_certi" /></td>
        </tr>
        <tr>
        	<td>Date Of Achivement</td><td>:</td>
            <td>
            <select name="day">
<option value="--Day--">--Day--</option>
<?php
$i=1;
while($i<32)
{if($i<10){
echo "<option value=0$i>0".$i."</option>";}else
{echo "<option value=$i>$i</option>";}
$i++;
}
?>
</select>
<select style="" name="month">
<option value="--Month--">--Month--</option>
<option value=01>Jan</option>
<option value=02>Feb</option>
<option value=03>Mar</option>
<option value=04>Apr</option>
<option value=05>May</option>
<option value=06>Jun</option>
<option value=07>Jul</option>
<option value=08>Aug</option>
<option value=09>Sep</option>
<option value=10>Oct</option>
<option value=11>Nov</option>
<option value=12>Dec</option>
</select>
<select name="year">
<option value="--Year--">--Year--</option>
<?php
$i=1990;
while($i<2014)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
</select>
            </td>
        </tr>

    </table>




<table id="pro" align="center" bordercolor="#0099FF" style="display:none; width:60%; vertical-align:top;">

	<tr>
    	<th>Profile Picture</th>
    </tr>
    <tr>
    	<td><input type="file" name="sh_image" /></td>
    </tr>
    <tr>
    	<th><input type="submit" name="b_picture" /></th>
    </tr>

</table>
</td>
</tr>
</table>
</form>
</body>
</html>