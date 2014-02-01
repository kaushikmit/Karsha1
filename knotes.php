
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
  <p class="ss">K-NOTES GENERATED</p>
  <p>
</p>
</center>
<center></center>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM custkid");
echo "<center>";
echo "<table border=1>";
echo "<tr><th>K-Id</th><th>P-Id</th><th>Cost</th></tr>";
echo "<br/> <br/>";
while($row = mysql_fetch_array($result))
{
echo "<tr> <td>".$row['kid']. "</td><td>".$row['pid']. "</td><td>". $row['cost']. "</td></tr>";
echo "<br />";
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>

</html>

</div>
