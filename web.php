<html>
<head>
<title>Login Form</title>
</head>
<body bgcolor="lightgreen">
<form action="login.php" method="post">
<table border="2" bgcolor="lightblue">
<tr>
<td colspan="2">login form</td>
</tr>
<tr>
<td>username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "demo");
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['pass'];
$query="insert into login(username,password)values('aux','mary')";
if(mysqli_query($link,$query))
{echo "you are an Authorise person";
}
}
?>
