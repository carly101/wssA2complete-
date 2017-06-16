<html>
<body>
<?php
$myFile=fopen("mydata.txt","r") or exit("Can’t open file!");
// read each line of text from the text file
$lastname = fgets($myFile);
$firstname = fgets($myFile);
$address01 = fgets($myFile);
$address02 = fgets($myFile);
$town = fgets($myFile);
$postcode = fgets($myFile);
$telephone = fgets($myFile);
$email = fgets($myFile);
fclose($myFile);
?>
<h1>My Contact Details</h1>
<p>
The contact details on file are as shown below.<br>
Edit the data and save your changes to file.
</p>
<form action="save_contact_details.php" method="post">
<table>
<tr>
<td align="right">Last name: </td><td>
<?php echo "<input size=\"20\" type=\"text\" name=\"lastname\" value=\"$lastname\">"?>
</td>
</tr>
<tr>
<td align="right">First name: </td><td>
<?php echo "<input size=\"20\" type=\"text\" name=\"firstname\" value=\"$firstname\">"?>
</tr>
<tr>
<td align="right">Address 01: </td><td>
<?php echo "<input size=\"30\" type=\"text\" name=\"address01\" value=\"$address01\">"?>
</td>
</tr>
<tr>
<td align="right">Address 02: </td><td>
<?php echo "<input size=\"30\" type=\"text\" name=\"address02\" value=\"$address02\">"?>
</td>
</tr>
<tr>
<td align="right">Town / city: </td><td>
<?php echo "<input size=\"20\" type=\"text\" name=\"town\" value=\"$town\">"?>
</td>
</tr>
<tr>
<td align="right">Post code: </td><td>
<?php echo "<input size=\"10\" type=\"text\" name=\"postcode\" value=\"$postcode\">"?>
</td>
</tr>
<tr>
<td align="right">Telephone: </td><td>
<?php echo "<input size=\"15\" type=\"text\" name=\"telephone\" value=\"$telephone\">"?>
</td>
</tr>
<tr>
<td align="right">E-mail: </td><td>
<?php echo "<input size=\"50\" type=\"text\" name=\"email\" value=\"$email\">"?>
</td>
</tr>
<tr>
<td> </td>
<td colspan="2" align="left"><input type="submit" value="Save changes"></td>
</tr>
</table>
</form>
</body>
</html>