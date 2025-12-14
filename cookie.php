<html>
<body><bg color="87Ceeb">
<center><h2>last visited date on the web page</h2>
</center>
<br>
<?php
$inTwoMonths =60*60*24*60+time( );
SetCookie('lastvisit',date("G:i m/d/y"),$inTwoMonths);
if(isset($_COOKIE["lastvisit"]))
{
$visit=$_COOKIE['lastvisit'];
echo"yourlastvisitwas_",$visit;
}
else
echo"you've got some stale cookies";
?>
</body>
</html>
