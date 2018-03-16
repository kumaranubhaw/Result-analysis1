<html>
<head>
<title>result</title></head>
<body bgcolor="silver">
<marquee><h1>RESULT</h1></marquee>
<center>
<hr>
<?php
$link=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect:'.mysql_error());
}
mysql_select_db("Result");
$n=$_POST["Usn"];
$q=$_POST["Name"];
echo "Result Of $q\n";
$var=mysql_query("SELECT * FROM first_sem WHERE Usn like '%$n%'");
$var1=mysql_query("SELECT * FROM ifirst_sem WHERE Usn like '%$n%'");
echo "<table border size=9>";
echo "<tr>
	<th>USN</th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
	<th></th>
</tr>";
while($arr=mysql_fetch_row($var))
{
echo"<tr>
	<td>$arr[0]</td>
	<td>$arr[1]</td>
	<td>$arr[2]</td>
	<td>$arr[3]</td>
	<td>$arr[4]</td>
	<td>$arr[5]</td>
	<td>$arr[6]</td>
	<td>$arr[7]</td>
	<td>$arr[8]</td>
</tr>";
}
while($arr=mysql_fetch_row($var1))
{
echo"<tr>
	<td>$arr[0]</td>
	<td>$arr[1]</td>
	<td>$arr[2]</td>
	<td>$arr[3]</td>
	<td>$arr[4]</td>
	<td>$arr[5]</td>
	<td>$arr[6]</td>
	<td>$arr[7]</td>
	<td>$arr[8]</td>
</tr>";
}
echo"</table>";
mysql_free_result($var);
mysql_free_result($var1);
mysql_close($link);
?>
<form action="option.html" method="post">
<input type="submit" value="back" />
</form>
</center>
</body>
</html>

