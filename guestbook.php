<html>
<head>
<title>
Guestbook
</title>
</head>
<body>
<h1>Guest Book</h1>
<?php
$name = $_POST['name'];
$message = $_POST['message'];
// connect to MySQL
$conn = @mysql_connect ( "localhost", "root", "")
or die (mysql_error());
// select the database
$rs = @mysql_select_db ( "gbook", $conn ) or die (mysql_error());
//Create the query
$sql = "INSERT INTO message(guestName, msg) VALUES ('$name','$message')";
// execute the query
$rs = mysql_query( $sql, $conn ) or die (mysql_error());
?>
<p>Message successfully saved.</p>
<p>Click <a href="guestbook.html">here</a> to return to Guestbook.</p>
</body>
</html>