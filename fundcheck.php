
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
  <p>&nbsp;</p>
  <p>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM  customer");
while($row = mysql_fetch_array($result))
{
	if($_POST['uname']==$row['username'] && $_POST['pass']==$row['password'])
		echo "Your available funds: ".$row['funds'];
}
echo "</table>";
echo "</center>";
mysql_close($con);
?>

  
  
  
  
  
  &nbsp;</p>
<p class="ss">&nbsp;</p>
</center>
</html>

</div>
