<?php
error_reporting(1);
$day=0;
$yr=0;
$mon=0;
if(isset($_POST['b1']))
{
$d1=$_POST['t1'];
$d2=$_POST['t2'];
$arr=explode("/",$d1);
$brr=explode("/",$d2);
if($arr[0]<$brr[0])
{
	$arr[0]=30;
	$arr[1]=1;
}
$day=$arr[0]-$brr[0];
if($arr[1]<$brr[1])
{
	$m1+=12;
	$arr[2]-=1;
}
$mon=$arr[1]-$brr[1];
$syr=$arr[2]-$brr[2];
$yr=$syr;
}
?>
<form method="POST">
<table border="2"><tr>
<td align="center" colspan="2"><font color="orange"><h2><b>Age Calculator</b></h2></font>
</td><tr>
<td align="center"><b>Enter current date:</b></td>
<td align="center"><input type="text" name="t1" autofocus></td></tr><tr>
<td align="center"><b>Enter You DOB:</b></td>
<td align="center"><input type="text" name="t2"></td>
</table>
<input type="submit" name="b1">
</form>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="b1" value="calculate"></td>
</tr>
<tr>
<td align="center"><b>Your age is:</b></td>
<td align="center">
<?php
error_reporting(1);
echo '<font color="blue" size="5">';
echo $yr.' years'. $mon.' months'. $day.' days';
echo '</font>';
?>
</td>
</tr>
</table>
</form>