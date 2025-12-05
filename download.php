

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
<td><input type="hidden" name="file_name" value="Desert.jpg"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="button" value="download"></td>
</tr>
</form>