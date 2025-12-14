<?php
ini_set('display_errors',0);
if(isset($_POST['calculate']))
{
$operator=$_POST['operator'];
if($operator=="+")
{
$var1=$_POST['input1'];
$var2=$_POST['input2'];
$result=$var1+$var2;
}
if($operator=="-")
{
$var1=$_POST['input1'];
$var2=$_POST['input2'];
$result=$var1-$var2;
}
if($operator=="*")
{
$var1=$_POST['input1'];
$var2=$_POST['input2'];
$result=$var1*$var2;
}
if($operator=="/")
{
$var1=$_POST['input1'];
$var2=$_POST['input2'];
$result=$var1/$var2;
}
if($_POST['input1']==NULL||$_REQUEST['input2']==NULL)
{
echo"<script language=javascript></script>";
}
}
?>
<form method="post">
<table style="background:#395796;
  width:320px;color:#FFF;
  padding:10px;">
<tr>
<td>enter first number</td>
<td colspan="1"><input name="input1" type="number"/></td>
</tr><tr>
<td>select operator</td>
<td>
<select name="operator" style="width:10px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
</td>
</tr>
<tr>
<td>enter second number</td>
<td colspan="2"><input name="input 2" type="number"/>
</td>
</tr>
<tr>
<td><td>
<td><input type="submit" name="calculate" value="calculator"/>
</td>
</tr>
<tr>
<td>Answer=</td>
<td>
<?php
echo $result;
?>
</td>
</tr>
</table>
</form>
