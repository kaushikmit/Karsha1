<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM merchant");
while($row = mysql_fetch_array($result))
{
if($row['username']==$_POST['username'] && $row['password']==$_POST['password'])
{
	echo "Redirecting to merchant home";
	header("Location: merchanthome.php");
	break;
}
echo "Sorry .You have entered the wrong merchant credentials";
echo "<br />";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>
