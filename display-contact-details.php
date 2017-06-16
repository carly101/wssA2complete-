<html>
<body>
    <h1>Contact Details</h1>
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
        <td align="right">Address line 1: </td>
        <td><?php echo $_POST["address01"]; ?></td>
    </tr>
    <tr>
        <td align="right">Address line 2: </td>
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
</table>
</body>
</html>