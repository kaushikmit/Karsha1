<center><img src="logobackless.jpg" width="250" height="150" alt="logo"></center>
<p>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("karsha", $con);
$result = mysql_query("SELECT * FROM products");
echo "<center>";
echo "<table border=1>";
echo "<tr><th>Product Name</th><th>Product Id</th><th>Cost</th></tr>";
echo "<br/> <br/>";
$flag=0;
while($row = mysql_fetch_array($result))
{
if($_POST['name']==$row['name'] && $_POST['pid']==$row['pid'])	
{
$cost=$row['cost'];
$pid=$row['pid'];
$name=$row['name'];
$flag=1;
echo "<tr> <td>".$row['name']. "</td><td>".$row['pid']. "</td><td>". $row['cost']. "</td></tr>";
echo "<br />";
}
}
if($flag==0)
{
	echo "You have entered invalid details of the product.Try back again!";	
	goto end;
}
echo "</table>";
echo "</center>";
echo "<br>";
echo "<br>";
function randomString($length)

{
 
   $string = md5(time());

    $highest_startpoint = 32-$length;
 
   $randomString = substr($string,rand(0,$highest_startpoint),$length);
   
 return $randomString;

}


$id = randomString(16);

echo "Your K-Id is:".$id;

//to save the K-id in the customer-cloud
mysql_select_db("custkid", $con);
$sql= "insert into custkid (kid) values('$id')";;
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

//to save the K-id in the merchant-cloud
mysql_select_db("merkid", $con);
$sql= "insert into merkid (kid) values('$id')";;
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

//to map the K-id with the transaction details
mysql_select_db("merkid", $con);
$sql= "insert into merkid (pid,pname,cost) values($pid,'$name',$cost)";;
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

//to map the K-id with the transaction details
mysql_select_db("custkid", $con);
$sql= "insert into custkid (pid,pname,cost) values($pid,'$name',$cost)";;
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}

mysql_close($con);
?>
  <br>
  <br></p>
<center>
  <p><a href="productpurchase1.php">Proceed</a></p></center>
<?php
end:
?>