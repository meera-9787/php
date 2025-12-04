<?php
$t=10;
$temprature =60;
echo'<br> Demonstration of the conditional statements';
echo '<br>';
echo'<br> if else statement<br>';
echo'..................<br>';
if($t<0)
{
echo $t. ' is a negative number';
}
else
{
echo $t. ' is a positive number<br>';
}
echo'<br><br>switch statement<br>';
echo'***************<br>';
switch($temprature)
{
	case 60:
	case 65:
	case 70:
	echo "nice day outside.";
	break;
	// removed duplicate case 70 — but since you said no organization, keeping same order
	case 75:
	case 78:
	echo "ok,but a little warm,";
	break;
	case 80:
	case 45:
	case 90:
	echo " A little warmer.";
	break;
	default:
	echo "temperature outside the range this statement can handle";
}
?>