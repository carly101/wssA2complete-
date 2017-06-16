<?php
//error handler
function customError($errno, $errstr)
{
echo "<b>Error:</b> [$errno] $errstr<br />";
echo "The error has been logged.";
error_log(date (DATE_RSS)." Error: [$errno]
$errstr".chr(13).chr(10),3, "logs/myerrors.log");
}
//set error handler
set_error_handler("customError",E_USER_WARNING);
//trigger error
$myvar=2;
if ($myvar>1)
{
trigger_error("Value must be 1 or less\n", E_USER_WARNING);
}
?>