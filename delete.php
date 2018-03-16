<html>
<head>
<title>Deleted conformation page</title>
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
$n=$_POST["Usn"];
$p=$_POST["Sem"];
//echo "The data is deleted $n\n";
$var=mysql_query("delete from '%$p%' where usn like '%$n%'");
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "Deletion Success";
mysql_close($con);
?>


<hr>
	<form action="deletion.html" method="post">
	<input type="submit" value="conform" />
	</form>
	</center>
	</body>
</html>
