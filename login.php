
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
  <p class="ss">TRANSACTION DEMO</p>
  <p><br>
</p>
</center>
<center>
<form  method="POST">
    <fieldset class="boxBody">
    <p><font color="grey" size="6"><br>
      <br>
      Customer Login</font>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>Username</label>
    <input type="text"  placeholder="Username" required name="username">
    <label><a href="#" class="rLink" tabindex="5" ></a><br>
    Password</label>
    <input type="password" placeholder="Password" required name="password">
  </p>
  <p>\</p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" class="btnLogin" value="Login"  name="login">
    <input type="reset" class="btnLogin" value="Reset"  name="reset" >
    <br>
  </p>
  <p>&nbsp;</p>


</form>
<form >
  <p><font color="grey" size="6">Merchant Login</font></p>
  <p>&nbsp;</p>
  <p>
    <label>Username</label>
    <input type="text"  placeholder="Username" required name="username2">
    <label><a href="#" class="rLink" tabindex="5" ></a><br>
      Password</label>
    <input type="password" placeholder="Password" required name="password2">
  </p>
  <p>\</p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" class="btnLogin" value="Login"  name="login2">
    <input type="reset" class="btnLogin" value="Reset"  name="reset2" >
  </p>
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
	  <label>
	  <?php
	
// Check, if username session is NOT set then this page will jump to login page
	if (isset($_SESSION['username'])) {
	header('Location: index.php');
	}
	else{
		
	}
	if(isset($_POST['login'])){		
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	// Include database connection settings
	include('connection.php');
	// Retrieve username and password from database according to user's input
	$login = mysql_query("SELECT * FROM user WHERE username = '$username' and password = '$password'");
	// Check username and password match
	if (mysql_num_rows($login) == 1){
	// Set username session variable
	$_SESSION['username']=$_POST['username'];
	// Jump to secured page
	header("Location: index.php");
}
	else{
	echo "<br><font color='red'>Note: Wrong Username and Password</font><br>";
	}
}

?>
</form>
</center>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</html>

</div>
