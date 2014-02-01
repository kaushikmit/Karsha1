<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM customer");
while($row = mysql_fetch_array($result))
{
if($row['username']==$_POST['username'] && $row['password']==$_POST['password'])
{
	echo "Redirecting to merchant home";
	sleep(5);
	header("Location: userhome.php");
	break;
}
echo "Sorry .You have entered the wrong user credentials";
echo "<br />";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>
