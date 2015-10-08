<html>
<head>
<title>Login Form</title>
</head>
<body>

<?php
if(!isset($_POST['submit'])){
?>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Email id: <input type="text" name="email"/><br>
		Password: <input type="password" name="password"/><br>
		
		<input type="submit" name="submit" value="Login"/>
	</form>
<?php
}
else{
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($mysqli->connect_errno){
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM userlogin WHERE email LIKE '{$email}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if(!$result->num_rows == 1){
		echo "<p>Invalid Username/password combination</p>";
	}
	else{
		echo "<p>Logged in Successfully</p>";
	}
}
?>
</body>
</html>