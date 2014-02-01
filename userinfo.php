
<!DOCTYPE HTML>
<html>
<head>
<title>Karsha Transaction Demo</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="file:///G|/My Projects/Paypal's Hackathon/hackathon/css/reset.css">
<link rel="stylesheet" type="text/css" href="structure.css">
<style type="text/css">
.ss {
	font-weight: bold;
	font-size: larger;
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>

<center>
  <p><img src="logobackless.jpg" width="250" height="150" ></p>
  <p class="ss">USER INFORMATION</p>
  <p class="ss"><br>
  </p>
</center>
<center></center>
<p><?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM customer");
echo "<center>";
echo "<table border=1>";
echo "<tr><th>Name</th><th>Email</th><th>Username</th></tr>";
echo "<br/> <br/>";
while($row = mysql_fetch_array($result))
{
echo "<tr> <td>".$row['name']. "</td><td>".$row['email']. "</td><td>". $row['username']. "</td></tr>";
echo "<br />";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>
&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</html>

</div>
