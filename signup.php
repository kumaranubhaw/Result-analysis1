<html>
<head>
<title>Signup</title>
</head>
<body bgcolor="silver">
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("signup");

$sql="INSERT INTO signup VALUES('$_POST[Fname]','$_POST[Lname]','$_POST[email]','$_POST[dob]','$_POST[usn]','$_POST[uid]','$_POST[country]','$_POST[paswd]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "Signup Success";
mysql_close($con);
?>
<form action="signuped.html" method="post">
<input type="submit" value="conform" />
</form>
</body>
</html>

