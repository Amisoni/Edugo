<?php
include("../config.php");

$id=$_SESSION['id'];
if(isset($_POST['Submit']))
{
	if ($_FILES['sh_image']['type'] != 'image/jpeg' && $_FILES['sh_image']['type'] != 'image/png' && $_FILES['sh_image']['type'] != 'image/gif' && $_FILES['sh_image']['type'] !='image/jpg')
			{
				//echo "file not supported";
			}
			else
			{
			move_uploaded_file($_FILES['sh_image']['tmp_name'], "images/".$_FILES['sh_image']['name']);
			$filepath = "images/".$_FILES['sh_image']['name']; 
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from feculty where ID=".$id;
			$res7=mysql_query($q);
			$data7=mysql_fetch_array($res7);
			
			}
			mysql_query("update feculty set image='$filepath' where id=$id" ) ;
			}
			mysql_query("update f_info set f_p_add='".$_POST['paddress']."', f_town='".$_POST['town']."', f_zipcode='".$_POST['zipcode']."',f_neighbourhood='".$_POST['neighberhood']."', f_city='".$_POST['city']."' where f_id=".$id);
			
			mysql_query("update f_info set f_schoolname='".$_POST['schoolname']."', f_principalname='".$_POST['sch_pri_name']."', f_contactno='".$_POST['contactno']."' where f_id=".$id);
			//echo "update f_info set f_schoolname='".$_POST['schoolname']."', f_principalname='".$_POST['sch_pri_name']."', f_contactno='".$_POST['contactno']."' where f_id=".$id;
			
		mysql_query("update f_info set f_edu='".$_POST['qua']."', f_yearofjoin='".$_POST['year']."', f_yearofexperiance='".$_POST['joinyear']."' where f_id=".$id);

mysql_query("update feculty set u_name='".$_POST['schoolname']."', contact='".$_POST['number']."', phone='".$_POST['pnumber1']."',sub='".$_POST['sub']."', sex='".$_POST['sex']."',birth_date='".$_POST['year']."-".$_POST['month']."-".$_POST['day']."' where ID=".$id);

@mysql_query("update f_info set f_yearofjoin='".$_POST['joinyear']."', f_yearofexperiance='".$_POST['expyear']."' where f_id=".$id);

///echo "update f_info set f_yearofjoin='".$_POST['joinyear']."', f_yearofexperiance='".$_POST['expyear']."' where f_id=".$id;



//echo "update feculty set u_name='".$_POST['institute']."', contact='".$_POST['number']."', phone='".$_POST['pnumber1']."',sub='".$_POST['sub']."', sex='".$_POST['sex']."',birth_date='".$_POST['year1']."-".$_POST['month']."-".$_POST['day']."' where ID=".$id;
		
		
		//echo "update f_info set f_edu='".$_POST['qua']."', f_yearofjoin='".$_POST['year']."', f_yearofexperiance='".$_POST['expe']."' where f_id=".$id;
}
//echo "select * from s_info where s_id=".$id;
$result1=mysql_query("select * from feculty where id=".$id);
$data1=mysql_fetch_array($result1);

$result=mysql_query("select * from f_info where f_id=".$id);
$data=mysql_fetch_array($result);


//echo $data[0];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample Home Page</title>
<link rel="stylesheet" type="text/css" href="../css/popup.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="../css/popup1.js" type="text/javascript"></script>
<script>
function set_city()
{
//alert("hi...");	
	<?php
  $d=explode("-",$data1['birth_date']);
  ?>//
  //alert ('<?php echo $d[2]; ?>');
var ddl = document.getElementById('day');
	var opts = ddl.options.length;
	for (var i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[2]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('month');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[1]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('qua');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_edu']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('city');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_city']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('expyear');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_yearofexperiance']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('joinyear');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_yearofjoin']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('year');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[0]; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	var no=1;
	ddl = document.getElementById('stand');
	opts = ddl.options.length;
	
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data1['std']; ?>'){
		no=0;
        ddl.options[i].selected = true;
        break;
    }
	}
	//alert("hi..."+no);
	if(no==1)
	{
	//alert("hi...");
	document.getElementById('stand').options[9].selected = true;
	document.getElementById("gra").style.display="block";
	ddl = document.getElementById('gra');
	opts = ddl.options.length;
		for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data1['std']; ?>'){
		no=1;
        ddl.options[i].selected = true;
        break;
    }
	}
	}
	
}
function newfrm()
{
  document.getElementById("lan_neighbour").style.display="none";
   document.getElementById("lan_zip").style.display="none";
    document.getElementById("lan_town").style.display="none";
     document.getElementById("lan_paddress").style.display="none";
     document.getElementById("lan_contactno").style.display="none";
     document.getElementById("lan_sch_pri_name").style.display="none";
      document.getElementById("lan_pnumber2").style.display="none";
       document.getElementById("lan_number").style.display="none";
       document.getElementById("lan_sub").style.display="none";
        document.getElementById("lan_schoolname").style.display="none";
    var s="";
    var x=document.forms["edit"]["neighberhood"].value;
 
    if(x=="")
        {
         s="hfgsah";
            document.getElementById("lan_neighbour").style.display="inline";
            s=s+a+"Enter Number\n";
		a++;
         
        }
    var b=document.forms["edit"]["zipcode"].value;
    if(b=="")
        {
            s="hfgsah";
            document.getElementById("lan_zip").style.display="inline";
         
        }
        var c=document.forms["edit"]["town"].value;
    if(c=="")
        {
            s="hfgsah";
            document.getElementById("lan_town").style.display="inline";
         
        }
        var d=document.forms["edit"]["paddress"].value;
    if(d=="")
        {
            s="hfgsah";
            document.getElementById("lan_paddress").style.display="inline";
         
        }
        var e=document.forms["edit"]["contactno"].value;
    if(e=="")
        {
            s="hfgsah";
            document.getElementById("lan_contactno").style.display="inline";
         
        }
         var f=document.forms["edit"]["sch_pri_name"].value;
    if(f=="")
        {
            s="hfgsah";
            document.getElementById("lan_sch_pri_name").style.display="inline";
         
        }
         var g=document.forms["edit"]["pnumber2"].value;
    if(g=="")
        {
            s="hfgsah";
            document.getElementById("lan_pnumber2").style.display="inline";
         
        }
         var h=document.forms["edit"]["number"].value;
    if(h=="")
        {
            s="hfgsah";
            document.getElementById("lan_number").style.display="inline";
         
        }
         var i=document.forms["edit"]["sub"].value;
    if(i=="")
        {
            s="hfgsah";
            document.getElementById("lan_sub").style.display="inline";
         
        }
        
 var j=document.forms["edit"]["schoolname"].value;
    if(j=="")
        {
            s="hfgsah";
            document.getElementById("lan_schoolname").style.display="inline";
         
        }        
   alert(x);
 if(s!="")
            {
                return false;
            }
            else
                {
                    
            document.getElementById("myfrom").submit();
                }
               return false;

}

</script>
<style>
 label
    {
		text-align: left;
		font-size:16px;
		font-family:Calibri, Verdana;
    }
    u{
     color:#0099CC; 
    }
    .new
    {
        border-right: 1px #c0c4c7 solid;  
    }
	td
	{
		text-align:left;
		font-size:16px;
		font-family:Calibri, Verdana;
	}
</style> 
</head>
<body style="margin:0px; text-align: left;" onload="set_city();">
    
<form name="edit" id="myfrom" method="post" onsubmit="return newfrm();" action="#" enctype="multipart/form-data">


<table align="center" bgcolor="#f0f0f0" width="70%" border="0" style="padding-left:10px;margin-top:30px;">
      <tr><td colspan="2">
      <table border="0" width="95%"><tr><td>
    <h1 style="color:#de6e1d;font-size:18px">Teacher Details</h1></td><td> <img src='<?php echo $data1['image'] ?>' width="50" height="50" style="float:right " /></td></tr></table></td></tr>
    
    <tr>
    <td >
    <label>Profile Picture</label></td><td><input type="file" name="sh_image" id="sh_image" />
    </td></tr>
    <tr><td >
      <label>Teacher Name :</label><label id="name" style="color:#F00; display:none;" class="label">*</label></td><td>
      <input type="text" placeholder="First Name" name="first_name" class="signup-name-input" onfocus="validation('f_n')"  value="<?php echo $data1['f_name']; ?>" readonly="readonly"/ >
      <input type="text" placeholder="Last Name" name="last_name" class="signup-name-input" onfocus="validation('l_n')"  value="<?php echo $data1['l_name']; ?>" readonly="readonly"/>
      </td></tr>
      <tr><td>
      <label> School Name :</label> </td><td>
      <input type="text" name="schoolname" maxlength="50" class="signup-big-input" placeholder="Enter Name Of Institute" value= <?php echo $data1['u_name'] ?> />
<label id="schoolname" style="color:#F00; display:none;" class="label">*</label>
                
      </td></tr><tr><td>
      <label> Email/User ID :</label><label id="emailv" style="color:#F00; display:none;" class="label">*</label></td><td>
      <input type="text" name="email" placeholder="Enter Email / User Name" class="signup-big-input" onfocus="validation('e_i')" value="<?php echo $data1['email']; ?>" readonly="readonly"/></td></tr>
  <tr>
	<td><label> Subject Name:</label></td>
<td><input id="searchField" name="sub" type="text" class="signup-big-input" maxlength="100" placeholder="Enter Subject Name"  value= <?php echo $data1[11] ?> />
<label id="lan_sub" style="color:#F00; display:none;" class="label">*</label>
                
</td>
</tr>
<tr>
	<td><label> Mobile No:</label></td>
	<td><input type="text" name="number"  maxlength="10" class="signup-big-input" placeholder="Enter Mobile Number"  value=<?php echo $data1['contact'] ?> />
        <label id="lan_number" style="color:#F00; display:none;" class="label">*</label>
                
        </td>
</tr>
<tr>
<td><label> Phone No:</label></td>
<td><input type="text" name="pnumber1" maxlength="12" class="signup-big-input" value=<?php echo $data1['phone'] ?> />
<label id="lan_pnumber1" style="color:#F00; display:none;" class="label">*</label>
                
</td>
</tr>
  
 <tr>
<td ><label> Birth Date:</label></td>
<td >
  <select name="day" id="day" class="selectbox-small">  
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
<select name="month" id="month" class="selectbox-small">
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
<select name="year" id="year" class="selectbox-small">
<?php
$i=1900;

while($i<2031)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>
	</select>
</td>
</tr>
<tr>
	<td ><br /><label> Gender:</label></td>
	<td style="color:#000; font-size:15px"><br />
	 <?php
	if($data1['sex']=="Male")
	{
		echo '<input name="sex" id="sex" type="radio" value="Male" checked="checked"/>Male';
	echo '<input type="radio" name="sex" id="sex" value="Female" />Female';
	}
	else
	{
		echo '<input name="sex" type="radio" id="sex" value="Male" />Male';
	echo '<input type="radio" name="sex" value="Female" id="sex" checked="checked"/>Female';
	}
	?>
	</td>
</tr>
 <tr>
    	<td><br /><label> Qulification:</label></td>
        <td><br />&nbsp;<select name="qua" id="qua" style="width:150px;height:25px;" class="selectbox1">
            <option value="MBA">MBA</option>
            <option value="MCA">MCA</option>
            <option value="MCom">MCom</option>
            <option value="Mscit">Mscit</option>
            </select>
        </td>
    </tr>
    
 
       
        <tr>
        	<td> <label> Principal Name:</label></td><td>
        <input type="text" name="sch_pri_name" id="sch_pri_name" maxlength="100" class="signup-big-input" value='<?php echo $data['f_principalname']; ?>'/>
       <label id="lan_sch_pri_name" style="color:#F00; display:none;" class="label">*</label>
                
                </td>
        </tr>
        <tr>
        	<td ><label> Contact No:</label></td><td>
        <input type="text" name="contactno" id="contactno" maxlength="10" class="signup-big-input" value='<?php echo $data['f_contactno']; ?>'/>
        <label id="lan_contactno" style="color:#F00; display:none;" class="label">*</label>
                
                </td>
        </tr>
        
         <tr>
        <td>
        <label> Permenent Address:</label></td><td>
        
        	<input type="text" name="paddress" id="paddress" class="signup-big-input" value='<?php echo $data['f_p_add']; ?>' size="25px">
        <label id="lan_paddress" style="color:#F00; display:none;" class="label">*</label>
    
        </td></tr>
            <tr>   
            <td><label> Town :</label></td><td>
                <input type="text" name="town" id="town" size="25px" class="signup-big-input" value='<?php echo $data['f_town']; ?>'/>
            <label id="lan_town" style="color:#F00; display:none;" class="label">*</label>
    
            </td>
			</tr>
            <tr>
           <td><label>City :</label></td><td>&nbsp;<select name="city" id="city" class="selectbox-small" style="width:150px;height:25px;">
            <option>Ahmedabad</option>
            <option>Rajkot</option>
            <option>Diu</option>
            <option>Maheshana</option>
            <option>London</option>
            </select></td></tr>
			<tr>
            <td>
            <label> Zip code :</label></td><td>
            <input type="text" name="zipcode" maxlength="6" id="zipcode" class="signup-big-input" size="25px" value='<?php echo  $data['f_zipcode']; ?>'/>
            <label id="lan_zip" style="color:#F00; display:none;" class="label">*</label>

            </td>
            </tr>
            <tr>
            <td>  
 	        <label> Neighbourhood:</label></td><td>
               <input type="text" class="signup-big-input" name="neighberhood" id="neighberhood" size="25px" value="<?php echo $data['f_neighbourhood']; ?>"/>
                 <label id="lan_neighbour" style="color:#F00; display:none;" class="label">*</label>
                </td>
            </tr>
             <tr>
    	<td>Year of join :</td><td>        
        &nbsp;<select name="joinyear" id="joinyear" style="width:150px;height:25px;" class="selectbox-small" >
            <?php
			$i=1900;
			while($i<2014)
			{
				echo "<option value='$i'>$i</option>";
				$i++;
			}
			?>
            </select>
        </td>
        </tr>
    
        <tr>
        <td><br /><label> Year of Experience :</label></td><td>
        
         <br />&nbsp;<select name="expyear" id="expyear" style="width:150px;height:25px;" class="selectbox-small">
           
             <?php
			$i=	1;
			while($i<20)
			{
				echo "<option value='$i'>$i year</option>";
				$i++;
			}
			?>
            </select>
            
        </td>
        </tr>
        
<tr><td colspan="2" ><br /><center>
      <input type="submit" name="Submit" class="signup-btn" value="Update" ></center></td></tr>      
</table>



</form>

</body>
</html>