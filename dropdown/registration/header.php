<TR bgcolor="#3745F0" style="height:120px; width:100%">
<form action="../login.php" method="post">
<td style="vertical-align: middle; font-size: 50px; font-family: Miriam; color: #FFFFFF; font-weight: bold;" width="50%" height="120px";><div style="margin-left:100px">EduGo</div></td>
<td style="font-size: medium; font-family: Ebrima; color: #FFFFFF;" width="15%">

<table>
 
<tr>
  <td>User Name/Email:</td></tr>
 <tr>
 <td><input name="u_name" type="text" tabindex="1"  /></td>
 </tr>
 <tr>
 <td><input type="checkbox" style="font-size:medium"/>Keep me Log In</td></tr></table>
    </td>
    	
<td style="font-size: medium; color: #FFFFFF; font-family: Ebrima;" width="15%" align="left">

<table><tr><td>Password:</td></tr>
<tr><td>
      <input name="password" type="password" tabindex="2"/></td></tr>
      <tr><td style="font-size:medium; color:#FFF"><a href="#" style="color:#FFF; font-size:medium">Forget Password</a></td></tr></table></td>
    <td width="10%" align="left">
    <table><tr><td><br /></td></tr><tr><td>
    <input type="submit" value="Log In" align="middle" style="background-color: #30C; color: #FFF;" /></td></tr><tr><td><br /></td></tr></table>
    
    </td></form>
</TR>
<tr  bgcolor="#3745F0">
<td colspan="4" align="center">
<?php if (isset($_GET['msg']))
					{
						$msg=$_GET['msg'];
						if($msg==1)
						{
				 			echo  "<font color='#FF0000' size='3'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worng Username And Password </font>";
						}
						
					}
			?>
<?php /*?><?php if (isset($error)) { echo "<p class='message'>" .$error. "</p>" ;} ?><?php */?>

</td>
</tr>
