<?php
include("../config.php");

$id=$_SESSION['id'];
if(isset($_POST['saveimg']))
{
	if ($_FILES['file1']['type'] != 'image/jpeg')
			{
				echo "file not supported";
			}
			else
			{
			move_uploaded_file($_FILES['file1']['tmp_name'], "images/".$_FILES['file1']['name']);
			$filepath = "images/".$_FILES['file1']['name']; 
			
			if($_SESSION['id']!="")
			{
			$id=$_SESSION['id'];
			$q="select * from feculty where ID=".$id;
			$res7=mysql_query($q);
			$data7=mysql_fetch_array($res7);
			
			}
			mysql_query("update feculty set image='$filepath' where id=$id" ) ;
			}
		
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
function display(id)
{
	//
	document.getElementById('s_acc').style.display="none";
	document.getElementById('s_add').style.display="none";
	document.getElementById('cpwd').style.display="none";
	document.getElementById('s_det').style.display="none";
	document.getElementById('p_del').style.display="none";
	document.getElementById('s_det').style.display="none";
	//document.getElementById('p_del').style.display="none";
	document.getElementById('archi').style.display="none";
	document.getElementById('s_add1').style.backgroundColor="gray";
	document.getElementById('s_det1').style.backgroundColor="gray";
	document.getElementById('s_acc1').style.backgroundColor="gray";
	document.getElementById('p_del1').style.backgroundColor="gray";
	document.getElementById('cpwd1').style.backgroundColor="gray";
	document.getElementById('archi1').style.backgroundColor="gray";
	//document.getElementById('detl1').style.backgroundColor="gray";
	//alert("hiiii");	
	document.getElementById(id).style.display="table";
	var sid=id+"1";
	document.getElementById(sid).style.backgroundColor="white";

}
function Change_Password()
{
var old=document.forms["edit"]["opwd"].value;
var pwd=document.forms["edit"]["npwd"].value;
var cpwd=document.forms["edit"]["rpwd"].value;
var reg = /^([a-zA-Z0-9]{0,8})$/;
	var opwd1=document.forms["edit"]["opwd"].value;
	var npwd1=document.forms["edit"]["npwd"].value;
	var rpwd1=document.forms["edit"]["rpwd"].value;
	/*if(rpwd1.length<8)
     {   
	   		alert("Enter AtLeast 8 character Password \n");
	  		return false;
	 }*/
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
    document.getElementById("pmsg").innerHTML=xmlhttp.responseText;
    }
  	}
  
	 xmlhttp.open("GET","edit_php.php?old="+old+"&&new="+pwd+"&&cnew="+cpwd,true); 
	 xmlhttp.send();
}
function set_city()
{
//alert("hi...");	
	<?php
  $d=explode("-",$data1['birth_date']);
  ?>
  
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
	
	ddl = document.getElementById('year1');
	opts = ddl.options.length;
//	alert("hi...");
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $d[0]; ?>'){
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
	ddl = document.getElementById('expe');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_yearofexperiance']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
	ddl = document.getElementById('year');
	opts = ddl.options.length;
	for (i=0; i<opts; i++){
    if (ddl.options[i].value == '<?php echo $data['f_yearofjoin']; ?>'){
        ddl.options[i].selected = true;
        break;
    }
	}
}
function Change_Address()
{	
var padd=document.forms["edit"]["paddress"].value;
var ptown=document.forms["edit"]["town"].value;
var pzip=document.forms["edit"]["zipcode"].value;
var pneg=document.forms["edit"]["neighberhood"].value;
var a=document.getElementById("city");	
var city=a.options[a.selectedIndex].value;
document.getElementById("zip_id").style.display="none"; 
var numbers = /^[0-9]+$/; 
 if((!numbers.test(pzip)))
      { 
	  document.getElementById("zip_id").style.display="block"; 
	  document.getElementById("addmsg2").innerHTML=""; 
      }  
	 else
	 {      //alert("hii");
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
    document.getElementById("addmsg2").innerHTML=xmlhttp.responseText;
    }
  	}
	 xmlhttp.open("GET","edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip="+pzip+"&&pneg="+pneg+"&&city="+city,true); 
	 xmlhttp.send();
}
}
function change_school()
{
	document.getElementById("c_id").style.display="none"; 
	var f_name=document.forms["edit"]["schoolname"].value;
	var f_p_name=document.forms["edit"]["sch_pri_name"].value;
	var f_p_cont=document.forms["edit"]["contactno"].value;
	
var numbers = /^[0-9]+$/; 
 if((!numbers.test(f_p_cont)))
      { 
	  document.getElementById("c_id").style.display="block"; 
	  document.getElementById("archimsg1").innerHTML=""; 
      }  
	 else
	 {      //alert("hii");

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
    document.getElementById("archimsg1").innerHTML=xmlhttp.responseText;
    }
  	}
	//alert("edit_php.php?s_name="+s_name+"&&s_p_name="+s_p_name+"&&s_p_cont="+s_p_cont);
  //alert ("edit_php.php?padd="+padd+"&&ptown="+ptown+"&&pzip"+pzip+"&&pneg"+pneg+"&&tadd"+tadd);
	 xmlhttp.open("GET","edit_php.php?f_name="+f_name+"&&f_p_name="+f_p_name+"&&f_p_cont="+f_p_cont,true); 
	 xmlhttp.send();
//	   alert("hiiii");
}
}
function qualification()
{
	
//var qua=document.forms["edit"]["qua"].value;
//var year=document.forms["edit"]["year"].value;
//var expe=document.forms["edit"]["expe"].value;
var a=document.getElementById("qua");	
var qua=a.options[a.selectedIndex].value;
var a=document.getElementById("expe");	
var expe=a.options[a.selectedIndex].value;
var a=document.getElementById("year");	
var year=a.options[a.selectedIndex].value;

	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
  
//alert("hgjhb");  	
	xmlhttp.onreadystatechange=function()
  	{
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("quali").innerHTML=xmlhttp.responseText;
    }
  	}
	 xmlhttp.open("GET","edit_php.php?qua="+qua+"&&year="+year+"&&expe="+expe,true); 
	 xmlhttp.send();
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
function adetail()
{//var qua=document.forms["edit"]["sub"].value;
var numbers = /^[0-9]+$/; 
var inst=document.forms["edit"]["institute"].value;
document.getElementById("z_id").style.display="none"; 
var sub1=document.forms["edit"]["sub"].value;
var no=document.forms["edit"]["number"].value;
var pno=document.forms["edit"]["pnumber1"].value;
//var day=document.forms["edit"]["day"].value;
//var month=document.forms["edit"]["month"].value;
//var year1=document.forms["edit"]["year1"].value;
 var id = get_radio_value();

var a=document.getElementById("day");	
var day=a.options[a.selectedIndex].value;
var a=document.getElementById("month");	
var month=a.options[a.selectedIndex].value;
var a=document.getElementById("year1");
var year1=a.options[a.selectedIndex].value;
var date=year1+"-"+month+"-"+day;

//var year1=document.forms["edit"]["year"].value;
 if((!numbers.test(no)) || (!numbers.test(pno)))
      { 
	  document.getElementById("z_id").style.display="block"; 
	  document.getElementById("adetl").innerHTML=""; 
      
      }  
	 else
	 {
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  	}
	else
  	{// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
 
//alert("hgjhb");  	
	xmlhttp.onreadystatechange=function()
  	{	
  	if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {	
    document.getElementById("adetl").innerHTML=xmlhttp.responseText;
    }
  	}
//	alert("hgjhb");  	
	 xmlhttp.open("GET","edit_php.php?inst="+inst+"&&sub1="+sub1+"&&no="+no+"&&pno="+pno+"&&day="+day+"&&month="+month+"&&year1="+year1+"&&sex="+id+"&&date="+date,true); 
	 xmlhttp.send();
//alert(year1);  	
}
}
function fileupload1()
{
	
var file1=document.forms["edit"]["file1"].value;
//var pwd=document.forms["edit"]["npwd"].value;
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
    document.getElementById("fileup").innerHTML=xmlhttp.responseText;
    }
  	}
  //alert("hi");
	 xmlhttp.open("GET","edit_php.php?file1="+file1,true); 
	 xmlhttp.send();
}
</script>
<style>
 u{
     color:#0099CC; 
    }
td
{
	font-family:Calibri, Verdana;
	font-size:14px;
}
</style>
</head>
<body style="margin:0px" onload="set_city()";>
<form method="post" name="edit" action="" style="margin-bottom:0px" enctype="multipart/form-data">
<table width="100%" style="vertical-align:top" bgcolor="#f0f0f0">
    <TR>
      <TD colspan="2"><table width="50%" align="center">
       <tr>
	<td align="center"><u><h2>
			Profile Picture :
		</h2></u></tr><tr id="fileup"></td></tr>

<tr>
    	<td align="center">
        <img src='<?php echo $data1['image'] ?>' width="300" height="300" />
        </td>
    </tr>
    <tr>
		<td colspan="2" align="center">
		
            </td>
            </tr></table><hr /></td>
</tr>
<tr>
<td colspan="2">
		<table align="center"><tr>
        <td align="center"><h2><u>
		Account Details </u></h2>
		</td></tr>
<tr>
	<td>First Name:</td>
	<td class="label"><label><?php echo $data1['f_name'] ?></label> <label><?php echo $data1['l_name'] ?></label>
	</td>
</tr>
<tr>
	<td>School Name:</td>
<td><?php echo $data1['u_name'] ?>
	</td>
</tr>

<tr>
	<td>Email:</td>
<td><?php echo $data1['email'] ?></td>
</tr>
<tr>
	<td>Subject:</td>
<td><?php echo $data1[11] ?></td>
</tr>
<tr>
	<td>Mobile:</td>
	<td><?php echo $data1['contact'] ?></td>
</tr>
<tr>
<td>Phone No:</td>
<td><?php echo $data1['phone'] ?></td>
</tr>
<tr>
<td class="label">Birth Date:</td>
<td style="color:#000; font-size:15px">
<?php echo $data1['birth_date'] ?>

</td>
</tr>
<tr>
	<td class="label">Gender:</td>
	<td style="color:#000; font-size:15px">
	 <?php
	echo $data1['sex'];
	?>
	</td>
</tr>
<tr id="adetl"></tr>
<tr>
   	<td colspan="2"><label id="z_id" style="color:#F00;display:none;">Enter Only Digits</label></td>
	</tr>   
</table>
<hr /></td>
</tr>

<tr>
<td>
<table width="50%;" align="center" height="500px">
	<tr>
    	<td colspan="3" align="center"><h2><u>Qualification Detail</u></h2></td>
    </tr>
    <tr>
    	<td>Qulification</td><td>:</td>
        <td><?php echo $data['f_edu'] ?>
        </td>
    </tr>
    <tr>
    	<td>Year Of Joining</td><td>:</td>
        <td><?php echo $data['f_yearofjoin'] ?>
        </td>
    </tr>
    <tr>
    	<td>Experience</td><td>:</td>
        <td><?php echo $data['f_yearofexperiance'] ?>
        </td>
    </tr><tr id="quali"></tr>
</table>
</td>
     <td style="border-right:solid 1px;border-color:#999">
     <table width="90%" align="center" height="450px">
    	<tr>
        <td align="center" colspan="3"><h2><u>School Detail</u></h2></td>
        </tr>
        <tr>
        
        <td width="100px">School Name :</td><td>
        <?php echo $data['f_schoolname']; ?>
        </td>
        </tr>
       
        <tr>
        	<td> Principal name :</td><td><?php echo $data['f_principalname']; ?>
        </td>
        </tr>
        <tr>
        	<td >Contact No :</td><td><?php echo $data['f_contactno']; ?>
        </td>
        </tr>
        <tr id="archimsg1"></tr>
         <tr>
   	<td colspan="2"><label id="c_id" style="color:#F00;display:none;">Enter Only Digit in Contact</label></td>
	</tr>
    </table></td></tr>
    <tr>
    <td style="border-right:solid 1px;border-color:#999">
    
    <table width="50%;" align="center" height="500px">
<hr />
	<tr>
		<td colspan="2" align="center"><h2><u>
		Address Detail </u></h2>
		</td></tr>
        <td>
        Permenent Address:</td><td>
        <?php echo $data['f_p_add']; ?></td></tr>
            <tr>   
            <td>Town :</td><td><?php echo $data['f_town']; ?></td>
			</tr>
            <tr>
           <td><label>City :</label></td><td><?php echo $data['f_city']; ?></td></tr>
			<tr>
            <td>
            Zip code :</td><td><?php echo  $data['f_zipcode']; ?></td>
            </tr>
            <tr>
            <td>  
 	        Neighberhood:</td><td><?php echo $data['f_neighbourhood']; ?></td>
            </tr>
    <tr id="addmsg2"></tr>
<tr>
   	<td colspan="2"><label id="zip_id" style="color:#F00;display:none;">Enter Only Digits</label></td>
	</tr>   
</table> 
    </td>
   
    <td>
    
   <table width="50%;" align="center" height="500px" border="0">
  <hr />
<tr>
    	<th><h2><u>Designation :</u></h2></th>
        </tr>
        <tr>
    	<th>Year of join <?php echo $data['f_yearofjoin']; ?>
            
        </th>
        </tr>
 <tr>
        <th>Year of Experiance :
        
         <?php echo $data['f_yearofexperiance']; ?>
            
        </th>
        </tr>

</table>
    </td>
    </tr>

   
 <tr>
               <td colspan="3" align="center"><input type="button" value="Save" class="signup-btn" onclick="change_account()" /></td>
                </tr>
 </table>
</form>
</div>
</body>
</html>