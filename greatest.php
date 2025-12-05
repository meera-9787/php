<?php

$N1=10;

$N2=5;

$f=1;

echo'<br> calculating GCD for two number using function';
echo'<br>.. ';
$g=GCD($N1,$N2);
echo'<br>';
echo$N1.','.$N2.'GCD IS'.$g.'<br>';
echo'.... .<br><br>';

function GCD ($num1,$num2)
{
while($num2!=0) {
$t=$num1%$num2;
$num1=$num2;
$num2=$t;
}
return$num1;
}

?>