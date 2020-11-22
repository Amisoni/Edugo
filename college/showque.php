<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Better Coda Slider</title>
<link rel="stylesheet" href="../panel/Better Coda Slider_files/coda-slider.css" type="text/css" media="screen" title="no title" charset="utf-8">

<script src="../panel/Better Coda Slider_files/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../panel/Better Coda Slider_files/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="../panel/Better Coda Slider_files/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="../panel/Better Coda Slider_files/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="../panel/Better Coda Slider_files/coda-slider.js" type="text/javascript" charset="utf-8"></script>


<script>

var c=2;
var m=4;
var h=0;
var t;
var timer_is_on=0;
var count=0;
var hc=0;
function timedCount(h1,m1,c1)
{
	h=h1;
	m=m1;
	c=c1;
	if(c==0 && h==0 && m==0)
	{
		alert("Your Time UP.");
		document.getElementById("exam").submit();	 
	}
	if(h==0)
	{
		h="00";
	}
	if(m==0)
	{
	m="00";	
	}
	if(h<10 && hc!=1 && h!=0)
	{
	h="0"+h;
	hc++;
	}
	if(m<10 && m>0 && count!=1)
	{
		m="0"+m;
		count++;
	}
	if(c<10)
	{
		c="0"+c;
	}
document.getElementById('txt').value=h+":"+m+":"+c;
c=c-1;
t=setTimeout(function(){timedCount(h,m,c)},1000);
if(c<0 && (m>0 || h>0))
{
	if(m>0)
	{
		m=m-1
		c=59;	
	}
	else
	{
		h=h-1;
		m=59;
		c=59;
		
	}
	
	
}
if(c==-1 && m==0 && h==0)
{
clearTimeout(t);
}
}

function doTimer(a)
{
if (!timer_is_on)
  {
	  
	m2=a%60;
	
	h2=(Math.ceil(a/60)-1);
	c2=00;
	//alert(h2);
	
  timer_is_on=1;
  timedCount(h2,m2,c2);
  }
}
function valid()
{
	var n = $("input:checkbox:checked").length;
	  if(n>0)
	  {
		  return true;
	  }
	  else
	  {
		  $('#msg').show();
		  alert("Please Select Minimun One Question");
		  return false;
		  
	  }
}

</script>
</head> 
<?php 
include("../config.php");
if(isset($_POST['comp']))
{
	$cb=$_POST['chk'];
	$up=count($cb);
	//echo $up;
	echo "<form method='post' action='#' onsubmit='return valid()'>";
	echo"<table align='center' width='60%' cellpadding='10px' cellspacing='0px'><tr align='left' id='msg' style='display:none; color:red;'><th colspan='4'>Please Select At List One Question</th></tr><tr  bgcolor='#ccccc'><td></td><th colspan='1' align='left' >No</th><th>Select Question</th><th>Marks</th></tr>";
	$queno=1;
	if($up>0)
	{
	for ($i=0;$i<$up;$i++)
	{
		//echo $cb[$i]."<br />";
	//	echo $i."<br>";
	//	echo $cb1[$i]."<br>";
	$q="select * from chap2 where sub=".$cb[$i];
	//echo $q;
	
	
	$res=mysql_query($q);
	$cbid="cb";
	
	$checkbox=1;
	$total=0;
	$i=0;
	while($data=mysql_fetch_array($res))	
	{		//echo $queno;
	if(($i%2)==0)
	{
		echo "<tr bgcolor='#CCFFCC' height='40px;'><td><input type='checkbox' value='$data[chkid]' name='cb[]'></td><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['marks']."</td></tr>";
	}
	else
	{
		echo "<tr height='40px'><td><input type='checkbox' value='$data[chkid]' name='cb[]'></td><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['marks']."</td></tr>";
	}
		$queno++;
		$checkbox++;
		$cbid=$cbid + $checkbox;
		$total +=$data['marks'];
	
	
	}
	}
	echo"<tr><td colspan='4' align='center'><input type='submit' name='select' value='Start Exam' onclick='total($total)' > </td></tr></table></form>";
	
	mysql_close();
	unset($_POST['submit']);

	}
	else
	{
		header('Location:quedetail.php?q=1');
	}
}

?>
<?php 
include("../config.php");

if(isset($_POST['select']))
{
	
	$cb=$_POST['cb'];
	if (count($cb) > 0)
	{
		$queno=1;
		$total=0;
		
		echo "<form method='post' id='exam' action='my.php'>";echo "<table align='center' bgcolor='#CCCCCC' cellpadding='5px' cellspacing='5px'><tr><th align='left'>Start Exam</th><th align='right'><input type='text' id='txt' readonly='readonly'/></th></tr>";
		echo "<tr bgcolor='#FFFFFF'><td colspan='2'>";
		
		echo "<div id='wrapper' style='width:700px;'>";
        echo "<div id='slider' style='border:1px'>";    
        echo "<div class='scroll' style='overflow: hidden; height:300px;'>";
		echo "<div class='scrollContainer'>";
		$p=-1;
		for ($i=0;$i<count($cb);$i++)
		{
			$sql="select * from chap2 where chkid=".$cb[$i];
			$res=mysql_query($sql);
			
			while($data=mysql_fetch_array($res))
			{
				echo "<div class='panel' id='a[]'><table cellpadding='5px' cellspacing='5px'><tr><td>";
				$p=$p+1; 
				date_default_timezone_get("Asia/Kolkata");
				$time=(microtime("s")*10000);
				$times=($time*23)%4;
				$total+=$data['marks'];
				echo "<input type='hidden' name='id[]' value='".$data['chkid']."'>";
				echo "<input type='hidden' name='r_ans[]' value='".$data['d']."'>";
				echo "<input type='hidden' name='marks[]' value='".$data['marks']."'>";
			
				if($times<0)
				{
					$times=-($times);
				}
				if($times==0)
				{
				echo "<tr><td>".$queno." </td><td>".$data['que']."</td><td align='right'>".$data['marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				}
				else if($times==1)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				}
				else if($times==2)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				}
				else if($times==3)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				}
				
				echo "<tr><td></td><td><input type='radio' name='ans[$p]' value='none' checked='checked' style='display:none;'/></td></tr>";
			
				$queno++;	
				echo "</td></tr></table></div>";	
				
			}
		
				
		}
		echo "</div>";
		echo "</div><img class='scrollButtons left' src='images/scroll_left.jpg' width='50px' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class='scrollButtons right' src='images/scroll_right.jpg' width='50px' />";
		echo "</div></div></td></tr>";
		
	}
	
     	echo"<tr><td colspan='1' align='right'><input id='me' type='submit' name='OK' value='OK' /></td><td align='right'>Total Marks : ".$total."</td></tr>";
		
		echo "<body onload='doTimer($total)'>";
		
		
		
		
		echo "</form>";
	mysql_close();
	unset($_POST['select']);
}				
?>
