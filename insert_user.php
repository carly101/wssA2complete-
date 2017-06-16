<html>

<head>
<title>Insert User</title>
</head>
<body>
<h1>User Creation</h1>
<?php
session_start();
if($_SESSION['login'] != "OK")
{
header('Location: login.php');
exit();
}
$new_user = $_POST["new_username"];
$new_pass = $_POST["new_password"];
$conn = @mysql_connect ("localhost", "root", "")
or die ("Sorry - unable to connect to MySQL database.");
$rs = @mysql_select_db ("admin", $conn) or die ("error");
$sql = "INSERT INTO user (username, password) VALUES ('$new_user', '$new_pass')";
mysql_query($sql,$conn) or die ("User creation failed.");
echo "<p>User created successfully.</p>";
echo "<p>Return to <a href='protected.php'>application</a> or <a
href='login.php'>log out</a></p>";
?>
</body>
</html>