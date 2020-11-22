<HTML>
<HEAD>
<TITLE>PopUp Div + Background Disable</TITLE>
<style>
.parentDisable
{
z-index:999;
width:100%;
height:100%;
display:none;
position:absolute;
top:0;
left:0;
background-color: #ccc;
color: #aaa;
opacity: .4;
filter: alpha(opacity=50);
}
#popup
{
width:300;
height:200;
position:absolute;
top:200px;
left:300px;
color: #000;
background-color: #fff;
}
</style>
<script type="text/javascript">
function pop(div)
{
document.getElementById(div).style.display='block';
return false
}
function hide(div)
{
document.getElementById(div).style.display='none';
return false
}
</script>
<link href="../headerstyle.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>

<div id="pop1" class="parentDisable">
<table border="1" id="popup">
<tr><td>This is popup 1</td></tr>
<tr><td><a href="#" onClick="return hide('pop1')">Close</a></td></tr>
</table>
</div>
<div id="pop2" class="parentDisable">
<table border="1" id="popup">
<tr><td>This is popup 2</td></tr>
<tr><td><a href="#" onClick="return hide('pop2')">Close</a></td></tr>
</table>
</div>
<CENTER>
<h3>Simple Popup Div + Background Disable Example</h3>
</br></br>
<a href="#" onClick="return pop('pop1')">Popup 1</a>
</br></br>
<input type="button" value="hello">ajhskhdksa
<a href="#" onClick="return pop('pop2')">Popup 2</a>

</CENTER>
</BODY>
</HTML> 