<html>
<head>
<title>set.php</title>
</head>
<body bgcolor="silver">
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("Result");
$n=$_POST["Sem"];
$sql="INSERT INTO '%$n%' VALUES('$_POST[Usn]','$_POST[Marks1]','$_POST[Marks2]','$_POST[Marks3]','$_POST[Marks4]','$_POST[Marks5]','$_POST[Marks6]','$_POST[Marks7]','$_POST[Marks8]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "Insertion Success";
mysql_close($con);
?>
<form action="insertion.html" method="post">
<input type="submit" value="conform" />
<a href="detailInt.html"><input type="button" value="If Error Click Here" /></a>
</form>
</body>
</html>

