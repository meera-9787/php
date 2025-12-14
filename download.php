<?php
if(isset($_POST['file_name'])) 
{
$file=$_POST['file_name'];
header('content-type:image/jpg');
header('content-Disposition:attachment;filename="'.$file.'"');
readfile('force_Download/'.$file);
exit();
}
?>
<form action="forcc_dowload.php" method="post" name="downloadform">
<tr>
<td><input type="text" name="file_name" value="Desert.jpg" type="hidden"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="button" name="button" value="download"></td>
</tr>
</form>
