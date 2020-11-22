<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</script>

</head>

<body>
<?php
if (isset($_GET['p_id']))
{
	$total=0;
	include('../config.php');
	
	echo "<table border='1' align='center'><tr><td colspan='2'>";
	$p_id=$_GET['p_id'];
	echo "<form method='post' id='exam' action='expert_paper_result.php'>";echo "<table align='center' bgcolor='#CCCCCC' cellpadding='5px' cellspacing='5px' border='0'>   		           <tr><th align='left'>Start Exam</th><th align='right'><input type='text' id='txt' readonly='readonly'/></th></tr>";
		echo "<tr bgcolor='#FFFFFF'><td colspan='2'>";
		echo "<input type='hidden' name='p_id' value='".$_GET['p_id']."'>";
		echo "<input type='hidden' name='u_type' value='".$_GET['u_type']."'>";
		echo "<div id='wrapper' style='width:700px;'>";
        echo "<div id='slider' style='border:1px'>";    
        echo "<div class='scroll' style='overflow: hidden; height:300px;'>";
		echo "<div class='scrollContainer'>";
		
	$result1=mysql_query("select que,a,b,c,d,p.u_marks,c.chkid from paper_ques p, chap2 c where p.p_id=".$p_id." and c.chkid=p.chkid");
	$queno=0;
	$p=-1;
	 while($data=mysql_fetch_array($result1))
	 {
		 $queno++;
	/*	 echo "<div class='panel' id='a[]'><table cellpadding='5px' cellspacing='5px'><tr><td></td><td width='90%'></td><td></td></tr>";
				$p=$p+1; 
				date_default_timezone_get("Asia/Kolkata");
				$time=(microtime("s")*10000);
				$times=($time*23)%4;
				$total+=$data['u_marks'];
				echo "<input type='hidden' name='id[]' value='".$data['chkid']."'>";
				echo "<input type='hidden' name='r_ans[]' value='".$data['d']."'>";
				echo "<input type='hidden' name='marks[]' value='".$data['u_marks']."'>";
			
				if($times<0)
				{
					$times=-($times);
				}
				if($times==0)
				{
				echo "<tr><td>".$queno." </td><td>".$data['que']."</td><td align='right'>".$data['u_marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				}
				else if($times==1)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['u_marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				}
				else if($times==2)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['u_marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				}
				else if($times==3)
				{
				echo "<tr><td>".$queno."</td><td>".$data['que']."</td><td align='center'>".$data['u_marks']."</td></tr>";
				echo "<tr><td></td><td>A . <input type='radio' name='ans[$p]' value='".$data['a']."' />".$data['a']."</td></tr>";
				echo "<tr><td></td><td>B . <input type='radio' name='ans[$p]' value='".$data['b']."' />".$data['b']."</td></tr>";
				echo "<tr><td></td><td>C . <input type='radio' name='ans[$p]' value='".$data['c']."' />".$data['c']."</td></tr>";
				echo "<tr><td></td><td>D . <input type='radio' name='ans[$p]' value='".$data['d']."' />".$data['d']."</td></tr>";
				}
				
				echo "<tr><td></td><td><input type='radio' name='ans[$p]' value='none' checked='checked' style='display:none;'/></td></tr>"; */
			
			/*	echo "</td></tr></table></div>";	
	 }
	 
	 
	 	echo "</div>";
		echo "</div><img class='scrollButtons left' src='images/scroll_left.jpg' width='50px' />						      			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class='scrollButtons right' src='images/scroll_right.jpg' width='50px' />";
		echo "</div></div></td></tr></table>";


	 
}
	 
	 echo"</td></tr><td colspan='1' align='left'><input id='me' type='submit' name='Submit Paper' value='Submit Question Paper' /></td><td align='right'>Total Marks : ".$total."</td></tr></table>";
	 echo "<body onload='doTimer($total)'>";
		echo "</form>";*/
		tot_marks(mysql_query=insert into result(totalmarks) values(score.numCorrectAnswers));
	mysql_close();
?>
</body>
</html>