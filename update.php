<html>
<head>
<title>Updation conformation page</title>
</head>
<body bgcolor="silver">
<center>
<?php 
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("result");
$n=$_POST["Sub"];
$p=$_POST["Sem"];
$r=$_POST["Marks"];
$s=$_POST["Usn"];
//echo "The data is deleted $n\n";
$var=mysql_query("update '%$p%' set '%$q%'='%$r%' where usn like '%$s%'");
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "updation Success";
mysql_close($con);
?>
<hr>
	<form action="updation.html" method="post">
	<input type="submit" value="conferm" />
	</form>
	</center>
	</body>
</html>
