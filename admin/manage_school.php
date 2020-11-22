  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <script>
  function edit_class(id)
  {
      document.getElementById("cl_name"+id).style.display="none";
      document.getElementById("txtview"+id).style.display="block";
      document.getElementById("labedit"+id).style.display="none";
      document.getElementById("labcancel"+id).style.display="block";
      document.getElementById("labupdate"+id).style.display="block";
              
  }
  function cancel_class(id)
  {
      document.getElementById("txtview"+id).style.display="none";
      document.getElementById("cl_name"+id).style.display="block";
      document.getElementById("labedit"+id).style.display="block";
      document.getElementById("labcancel"+id).style.display="none";
      document.getElementById("labupdate"+id).style.display="none";
              
  }
  
  function update_class(id)
  {
      
      document.getElementById("txtview"+id).style.display="none";
      document.getElementById("cl_name"+id).style.display="block";
      document.getElementById("labedit"+id).style.display="block";
      document.getElementById("labcancel"+id).style.display="none";
      document.getElementById("labupdate"+id).style.display="none";
      
      var cname=document.forms["myfrom"]["txtcname"+id].value;
      //alert(cname);
      window.location="manage_school.php?up_id="+id+"&&cname="+cname;
              
  }
  </script>
  </head>
  
  <body>
  <?php include("adminheader.php"); ?>
  <form action="" name="myfrom" method="post">
  <table align="center">
      <tr>
          <td>School Name</td><td>:</td>
          <td><input type="text" name="c_name" required="Required" /></td>
          <td><input type="submit" name="addclass" value="Insert"/></td>
       </tr>
       <tr>
       <td colspan="3" style="color:#090;">
       <?php 
     
  			include("../config.php");
  			if(isset($_GET['del_id']))
  			{
				$result=mysql_query("delete from school_name where id=".$_GET['del_id']);
				echo "Record Successfully Deleted";
  			}
  			if(isset($_GET['up_id']))
  			{
				mysql_query("update school_name set sch_name='".$_GET['cname']."' where id=".$_GET['up_id']);
				echo "Record Successfully Updated";
  			}
			?>
       
       </td>
       <tr>   
   
  <?php
  include("../config.php");
  if(isset($_POST['addclass']))
  {
      $q2="select * from school_name where sch_name='".$_POST['c_name']."'";
      $res2=mysql_query($q2);
      $data2=mysql_fetch_array($res2);
      if($_POST['c_name']!=$data2['sch_name'])
      {
      //echo "insert into class (cname) value('".$_POST['c_name']."')";
      $q="insert into school_name (sch_name) value('".$_POST['c_name']."')";
	 // echo "insert into school_name (sch_name) value('".$_POST['c_name']."')";
      mysql_query($q);
      echo "<td colspan='3'><font color='#339900'> Record Successfuly Inserted.</font></td>";	
  
      }
      else
      {
          echo "<td colspan='3'><font color='#FF0000'> Class Has Been Already Inserted.</font></td>";	
      }
  }
     
  $q1="select * from school_name";
  $res=mysql_query($q1);
  
  echo "<table align='center' width='60%'><tr bgcolor='#f1f1f1' height='40px;'><td>No.</td><td width='40%';>School Name</td><td>Update</td><td>Delete</td></tr>";
  $no=1;
  while($data=mysql_fetch_array($res))
  {
	if($no%2==0)
	{
		echo "<tr bgcolor='#CCFFCC' height='40px'>";
	}
	else
	{
		echo "<tr height='40px'>";
	}
      echo "<td>$no</td><td><label id='cl_name".$data[0]."'>$data[sch_name]</label><input type='text' id='txtview".$data[0]."' name='txtcname".$data[0]."' value='".$data['sch_name']."' style='display:none;'/></td>
      <td>
      <label id='labedit".$data[0]."' onclick='edit_class(".$data[0].");'> Edit</label>
      <label id='labcancel".$data[0]."' onClick='cancel_class(".$data[0].")' style='display:none'>Cancel</label>		    <label id='labupdate".$data[0]."' onClick='update_class(".$data[0].")' style='display:none'>Update</label>
      </td>
      <td><a href='manage_school.php?del_id=".$data['id']."'>Delete</a></td></tr>";		
      $no++;
  }
  echo "</table>";
  
  ?>
  
  </tr>
  </table>
  
  </form>
  </body>
  </html>