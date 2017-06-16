<html>
<body>
<h1>My Contact Details</h1>
<p>The contact details you submitted are shown below:</p>
<table>
<tr>
<td align="right">Last name: </td>
<td><?php echo $_POST["lastname"]; ?></td>
</tr>
<tr>
<td align="right">First name: </td>
<td><?php echo $_POST["firstname"]; ?></td>
</tr>
<tr>
<td align="right">Address 01: </td>
<td><?php echo $_POST["address01"]; ?></td>
</tr>
<tr>
<td align="right">Address 02: </td>
<td><?php echo $_POST["address02"]; ?></td>
</tr>
<tr>
<td align="right">Town / city: </td>
<td><?php echo $_POST["town"]; ?></td>
</tr>
<tr>
<td align="right">Post code: </td>
<td><?php echo $_POST["postcode"]; ?></td>
</tr>
<tr>
<td align="right">Telephone: </td>
<td><?php echo $_POST["telephone"]; ?></td>
</tr>
<tr>
<td align="right">E-mail: </td>
<td><?php echo $_POST["email"]; ?></td>
</tr>
<tr>
<td> </td>
<td><a href="edit_contact_details.php">Edit text</a></td>
</tr>
</table>
<?php
$myFile=fopen("mydata.txt","w") or exit("Can’t open file!");
// Write each line of text into the text file file
fwrite($myFile, $_POST["lastname"]."\r\n");
fwrite($myFile, $_POST["firstname"]."\r\n");
fwrite($myFile, $_POST["address01"]."\r\n");
fwrite($myFile, $_POST["address02"]."\r\n");
fwrite($myFile, $_POST["town"]."\r\n");
fwrite($myFile, $_POST["postcode"]."\r\n");
fwrite($myFile, $_POST["telephone"]."\r\n");
fwrite($myFile, $_POST["email"]."\r\n");
fclose($myFile);
?>
</body>
</html>