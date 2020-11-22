<?php
include("../config.php");
session_start();
$id=$_SESSION['id'];
//echo "select * from s_info where s_id=".$id;
if(isset($_POST['first_name']))
{
	
include("../config.php");
if ($_FILES['sh_image']['type'] != 'image/jpeg' && $_FILES['sh_image']['type'] != 'image/png' && $_FILES['sh_image']['type'] != 'image/gif' && $_FILES['sh_image']['type'] !='image/jpg')
			{
			
				//echo "file not supported";
			}
			else
			{
				
			move_uploaded_file($_FILES['sh_image']['tmp_name'], "images/".$_FILES['sh_image']['name']);
			$filepath = "images/".$_FILES['sh_image']['name']; 
			$id=$_SESSION['id'];
						
			mysql_query("insert into profile_picture (s_id,image) values(".$id.",'".$filepath."')");
			$r1=mysql_query("select max(p_id) from profile_picture");
			$d1=mysql_fetch_array($r1);
			$nid=$d1[0];
			mysql_query("insert into profile(n_id,t_id,s_id) values (".$nid.",1,".$id.")");
			mysql_query("update student set image='$filepath' where id=$id" ) ;
			}
			if($_SESSION['id']!="")
			{
			$q="select * from student where ID=".$id;
			$res=mysql_query($q);
			$data=mysql_fetch_array($res);			
			}
			@mysql_query("update s_info set s_p_add='".$_POST['paddress']."', s_town='".$_POST['town']."', s_zipcode='".$_POST['zipcode']."',s_neighbour='".$_POST['neighberhood']."' , s_t_add='".$_POST['taddress']."', s_city='".$_POST['city']."' where s_id=".$id);
			mysql_query("update s_info set s_schoolname='".$_POST['schoolname']."', s_principalname='".$_POST['sch_pri_name']."', s_contactnumber='".$_POST['contactno']."' where s_id=".$id);
			
			@mysql_query("update s_info set s_relegions='".$_POST['Relegions']."', s_description='".$_POST['discription']."' where s_id=".$id);
			mysql_query("update s_info set s_hobby='".$_POST['hobby']."', s_sport='".$_POST['sport']."', s_subject='".$_POST['subject']."' where s_id=".$id);
			
			mysql_query("update student set s_name='".$_POST['school_name']."', contact=".$_POST['number'].",phone=".$_POST['pnumber'].", sex='".$_POST['sex']."', birth_date='".$_POST['year']."-".$_POST['month']."-".$_POST['day']."', std='".$_POST['standard']."' where id=".$id);
			
}
$result1=mysql_query("select * from student where id=".$id);
$data1=mysql_fetch_array($result1);
$result=mysql_query("select * from s_info where s_id=".$id);
$data=mysql_fetch_array($result);
//echo $data[0];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <link rel="stylesheet" type="text/css" href="css/style.css" />
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
function change()
{
	//alert("hi....");
	var x=document.forms["edit"]["standard"].value;
	//alert(x);
	document.getElementById("gra").options[0].selected = true;
	//document.getElementById("stand").options[0].selected = true; 
	if(x=="Graduate")
	{
		document.getElementById("gra").style.display="block";
		//document.getElementById("stand").style.display="block";	
	}
	else
	{
		//document.getElementById("stand").style.display="none";
		document.getElementById("gra").style.display="none";
	}
		
}
function display(id)
{
	document.getElementById('s_add').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	document.getElementById('pro').style.display="none";
	document.getElementById('cpwd').style.display="none";
	document.getElementById('archi').style.display="none";
	document.getElementById('acco').style.display="none";
	//alert("hi..");
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	document.getElementById('pro1').style.backgroundColor="gray";
	document.getElementById('archi1').style.backgroundColor="gray";
	document.getElementById('cpwd1').style.backgroundColor="gray";
	document.getElementById('acco1').style.backgroundColor="gray";
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";
}
function set_city()
{
//alert("hi...");	
	<?php
  $d=explode("-",$data1['birth_date']);
  ?>
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
	ddl = document.getElementById('city');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['s_city']; ?>'){
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


function get_radio_value()
{
            var inputs = document.getElementsByName("sex");
            for (var i = 0; i < inputs.length; i++) {
              if (inputs[i].checked) {
                return inputs[i].value;
              }
      }
}
function validation_submit()
{
	document.getElementById("name").style.display="none";
	document.getElementById("school").style.display="none";
	document.getElementById("emailv").style.display="none";
	document.getElementById("std").style.display="none";
	document.getElementById("cnt").style.display="none";
	document.getElementById("b_date").style.display="none";
	document.getElementById("lab_p_add").style.display="none";
	document.getElementById("lab_town").style.display="none";
	document.getElementById("lab_zipcode").style.display="none";
	document.getElementById("lab_hobby").style.display="none";
	document.getElementById("lab_sport").style.display="none";
	document.getElementById("lab_sub").style.display="none";
	document.getElementById("lab_hobby").style.display="none";
	document.getElementById("lab_sport").style.display="none";
	document.getElementById("lab_sub").style.display="none";
	document.getElementById("lab_sch_cnt").style.display="none";
	document.getElementById("lab_sch").style.display="none";
	document.getElementById("lab_prn").style.display="none";
	var x=document.forms["edit"]["first_name"].value;
	var y=document.forms["edit"]["last_name"].value;
	
	var z=document.forms["edit"]["school_name"].value;

	var p=document.forms["edit"]["email"].value;
	var q=document.forms["edit"]["standard"].value;
	var r=document.forms["edit"]["number"].value;
	var t=document.forms["edit"]["sex"].value;
	var d=document.forms["edit"]["day"].value;
	var m=document.forms["edit"]["month"].value;
	var yy=document.forms["edit"]["year"].value;
	var p_add=document.forms["edit"]["paddress"].value;
	var town=document.forms["edit"]["town"].value;
	var zipcode=document.forms["edit"]["zipcode"].value;
	var neigh=document.forms["edit"]["neighberhood"].value;
	var tadd=document.forms["edit"]["taddress"].value;
	//alert("hi..");
	var hobby=document.forms["edit"]["hobby"].value;
	var sport=document.forms["edit"]["sport"].value;
	var subj=document.forms["edit"]["subject"].value;
	var sch=document.forms["edit"]["schoolname"].value;
	var sch_cnt=document.forms["edit"]["contactno"].value;
	var prn=document.forms["edit"]["sch_pri_name"].value;
	
	var numbers1 = /^[0-9]+$/;  
	var char = /^[A-Za-z]+$/;  
	var reg = /^([a-zA-Z0-9]{0,8})$/;
	var s="";
	var a=1;
	if(sch_cnt=="")
	{
		document.getElementById("lab_sch_cnt").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	if( !numbers1.test(sch_cnt))
	{
		document.getElementById("lab_sch_cnt").style.display="inline";
		s=s+a+"Enter Valid Number\n";
		a++;
	} 	
	if(prn=="")
	{
		document.getElementById("lab_prn").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	if(sch=="")
	{
		document.getElementById("lab_sch").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	if(hobby=="")
	{
		document.getElementById("lab_hobby").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	if(sport=="")
	{
		document.getElementById("lab_sport").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	
	if(subj=="")
	{
		document.getElementById("lab_sub").style.display="inline";
		s=s+a+"Enter first Name\n";
		a++;
	}
	
	if(tadd=="")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("lab_t_add").style.display="inline";
		a++;
	}
	if(neigh=="")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("lab_neigh").style.display="inline";
		a++;
	}
	if(p_add=="")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("lab_p_add").style.display="inline";
		a++;
	}
	if(town=="")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("lab_town").style.display="inline";
		a++;
	}
	if(zipcode==null || zipcode=="" )
	{
		document.getElementById("lab_zipcode").style.display="inline";
		s=s+a+"Enter Number\n";
		a++;
	}
	if( !numbers1.test(zipcode) || zipcode.length!=6)
	{
		document.getElementById("lab_zipcode").style.display="inline";
		s=s+a+"Enter Valid Number\n";
		a++;
	} 	
	//alert("hi..");
	if(x==null || x=="" || y==null || y=="" || x=="First Name" || y=="Last Name")
	{
		s=s+a+"Enter first Name\n";
		document.getElementById("name").style.display="inline";
		a++;
	}
	
	if(z==null || z=="" || z=="Select School")
	{
		document.getElementById("school").style.display="inline";
		s=s+a+"Enter School Name\n";
		a++;
	}
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(p==null || p=="" || p=="Enter Email Address")
	{
		document.getElementById("emailv").style.display="inline";
		s=s+a+"Enter Email\n";
		a++;
	}	
	if(q==null || q=="Select Standard")
	{
		document.getElementById("std").style.display="inline";
		s=s+a+"Select standard\n";
		a++;
	}
	if(r==null || r=="" )
	{
		document.getElementById("cnt").style.display="inline";
		s=s+a+"Enter Number\n";
		a++;
	}
	if( !numbers1.test(r) || r.length!=10)
	{
		document.getElementById("cnt").style.display="inline";
		s=s+a+"Enter Valid Number\n";
		a++;
	} 	
	 if(d=="" || m=="" || yy=="" )
	{
		document.getElementById("b_date").style.display="inline";
		s=s+a+"Select Proper Date\n";
		a++;
	}
 	
	if (s!="")
	  {
		  //alert("arjun");
	 // alert("Please.......\n "+s);
	 //document.getElementById("valid").style.display="block";
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
<title>Untitled Document</title>
</head>

<body style="margin:0px; text-align: left;" onload="set_city();">
    
<form name="edit" id="myfrom" method="post" action="#" onsubmit="return validation_submit()" enctype="multipart/form-data">

   <table align="center" bgcolor="#f0f0f0" width="70%" border="0" style="padding-left:10px;margin-top:30px;">
      <tr><td colspan="2">
      <table border="0" width="95%"><tr><td>
    <h1 style="color:#de6e1d;font-size:18px">Student Details</h1></td><td> <img src='<?php echo $data1['image'] ?>' width="50" height="50" style="float:right " /></td></tr></table></td></tr>
    
    <tr>
<?php /*?>    <img src='<?php echo $data1['image'] ?>' width="0" height="0" style="margin-left:135px; margin-top:0px;" />
<?php */?>    <td >
    <label>Profile Picture</label></td><td><input type="file" name="sh_image" id="sh_image" />
    </td></tr>
    <tr><td >
      <label>Student Name :</label></td><td>
      <input type="text" placeholder="First Name" name="first_name" class="signup-name-input" onfocus="validation('f_n')"  value="<?php echo $data1['f_name']; ?>"/ >
      <input type="text" placeholder="Last Name" name="last_name" class="signup-name-input" onfocus="validation('l_n')"  value="<?php echo $data1['l_name']; ?>"/><label id="name" style="color:#F00; display:none; " class="label">*</label>
      </td></tr>
      <tr><td>
      <label> School Name :</label></td><td>
      <input type="text" placeholder="School Name" name="school_name" class="signup-big-input"  onfocus="validation('s_n')" value="<?php echo $data1['s_name']; ?>"/><label id="school" style="color:#F00; display:none;" class="label">*</label>
</td></tr><tr><td>
      <label> Email/User ID :</label></td><td>
      <input type="text" name="email" placeholder="Enter Email / User Name" class="signup-big-input" onfocus="validation('e_i')" value="<?php echo $data1['email']; ?>"/><label id="emailv" style="color:#F00; display:none;" class="label">*</label></td></tr>
    <tr><td>      <label> Standard :</label></td><td>
        <select class="selectbox-small" style="width:110px;" id="stand" name="standard" onfocus="validation('drop_std')" onchange="change()">
          <option>Standard</option>
          <?php
		include("../config.php");
	$result2=mysql_query("select * from class");
	while($data2=mysql_fetch_array($result2))
	{
		echo "<option value='".$data2[0]."'>".ucfirst($data2[1])."</option>";
	}
		?>
        
		<option value="Graduate">Other >></option>
	</select>
    
	<select id="gra" name="Graduate" style="display:none;  width:110px;" class="selectbox-small">
		<option value="Select Graduate">--Graduate--</option>	
		<option value="Diploma">Diploma</option>
		<option value="BCA">BA</option>
		<option value="BCom">BCom</option>		
		<option value="BBA">BSC</option>
		<option value="BSC IT">BBA</option>
	</select>
    <label id="std" style="color:#F00; display:none;" class="label">*</label>
   </td></tr>
  
    <tr><td>
      <label> Mobile No :</label></td><td>
      <input type="text" placeholder="Mobile Number" name="number" onfocus="validation('m_n')" class="signup-big-input" value="<?php echo $data1['contact']; ?>"/><label id="cnt" style="color:#F00; display:none;" class="label">*</label>
   </td></tr><tr><td>
      <label> Phone No :</label></td><td>
      <input type="text" name="pnumber" class="signup-big-input" onfocus="validation('c_n')" value="<?php echo $data1['phone']; ?>" />
      <label id="lan" style="color:#F00; display:none;" class="label">*</label>
      </td></tr>
<tr><td>
      <label> Birth Date :</label></td><td>
       <select name="day"  class="selectbox-small" id="day">  
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
<select  class="selectbox-small" name="month" id="month">
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
<select name="year"  class="selectbox-small" id="year">
<?php
$i=1900;

while($i<2031)
{
echo "<option value=$i>$i</option>";
$i++;
}
?>

</select>
<label id="b_date" style="color:#F00; display:none;" class="label">*</label>       
      </td></tr>
    <tr><td><br />
      <label >Gender :</label>
</td><td><br />
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
</td></tr><tr><td>
     <label>Permanent Address :</label></td><td>
     <input type="text" width="200" name="paddress" id="paddress" class="signup-big-input" value="<?php echo $data['s_p_add'] ?>" />
     <label id="lab_p_add" style="color:#F00; display:none;" class="label">*</label>       
     
      </td></tr>
      <tr><td>
    <label>Town :</label></td><td>
      <input type="text" width="200" class="signup-big-input" name="town" id="town" value="<?php echo $data['s_town'] ?>" />
      <label id="lab_town" style="color:#F00; display:none;" class="label">*</label>       
      
      </td></tr>
    <tr><td>
      <label>City :</label></td><td>
               &nbsp;<select name="city" id="city" class="selectbox1">
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Diu">Diu</option>
            <option value="Maheshana">Maheshana</option>
            <option value="London">London</option>
            </select>
</td></tr><tr><td>    
<label>Zip code :</label></td><td><input type="text" size="6" class="signup-big-input" name="zipcode" id="zipcode" maxlength="6" value="<?php echo $data['s_zipcode'] ?>"/>
<label id="lab_zipcode" style="color:#F00; display:none;" class="label">*</label>       

      </td></tr><tr><td>
      <label>Neighbourhood :</label></td><td><input type="text" class="signup-big-input" width="200" name="neighberhood" id="neighberhood" value="<?php echo $data['s_neighbour'] ?>"/>
      
      <label id="lab_neigh" style="color:#F00; display:none;" class="label">*</label>       
      </td></tr>
<tr><td>
      <label>Temporary Address :</label></td><td>
       
        	<input type="text" width="200" name="taddress" class="signup-big-input" id="taddress" value="<?php echo $data['s_t_add'] ?>"/>
            <label id="lab_t_add" style="color:#F00; display:none;" class="label">*</label>       
            
            
            </td></tr>
<tr><td>      <label>Hobby :</label></td><td>
           	<input type="text"  name="hobby" id="hobby" class="signup-big-input" value="<?php echo $data['s_hobby'] ?>"/>
            <label id="lab_hobby" style="color:#F00; display:none;" class="label">*</label>       
            
            </td></tr>
<tr><td><label>Sports :</label></td><td>       
        	<input type="text"  class="signup-big-input" name="sport" id="sport" value="<?php echo $data['s_sport'] ?>"/>
            <label id="lab_sport" style="color:#F00; display:none;" class="label">*</label>       
            
            </td></tr>
<tr><td>
      <label>Subject :</label></td><td>
        	<input type="text"  name="subject" class="signup-big-input" id="subject" value="<?php echo $data['s_subject'] ?>"/>
            
            <label id="lab_sub" style="color:#F00; display:none;" class="label">*</label>       
            </td></tr>
<tr><td>
      <label>School Name :</label></td><td>
      <input type="text" width="200" class="signup-big-input" name="schoolname" id="schoolname" value="<?php echo $data['s_schoolname'] ?>"/>
      <label id="lab_sch" style="color:#F00; display:none;" class="label">*</label>       
      
      </td></tr>
<tr><td>
      <label>Principal Name :</label></td><td>
        
        	<input type="text" width="200" name="sch_pri_name" class="signup-big-input" id="sch_pri_name" value="<?php echo $data['s_principalname'] ?>"/>
            <label id="lab_prn" style="color:#F00; display:none;" class="label">*</label>       
       </td></tr>
        	<tr><td>
      <label>Contact Number :</label></td><td>
        	<input type="text" width="200" name="contactno" id="contactno" class="signup-big-input" value="<?php echo $data['s_contactnumber'] ?>" />
            <label id="lab_sch_cnt" style="color:#F00; display:none;" class="label">*</label>       </td></tr>
<tr><td colspan="2" ><center>
      <input type="submit" name="Submit" class="signup-btn" value="Update" ></td></tr>      
</table>
</form>
  </body>
  
  