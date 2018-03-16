<html>
<head>
<title>Authentication</title></head>
<body bgcolor="silver">
<center>
<hr>
<?php
$link=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("signup");
$n=$_POST["uid"];
$q=$_POST["paswd"];
$var=mysql_query("SELECT user_id,password FROM signup where user_id='%$n%' and password='%$q%'");
while($arr=mysql_fetch_row($var))
{}
	if($arr[0]!=$n)
	{
		echo "user does not exist";
		echo "enter correct user id";
	}
	else if($arr[1]!=$q)
	{
		echo "password incorect";
	}
	else{
		echo "login success";

	print"<form action="src/HTML/option.html" method="post">";
	print"<input type="submit" value="continue" />";
	print"</form>";
}
mysql_free_signup($var);
mysql_close($link);
?>
</center>
</body>
</html>

