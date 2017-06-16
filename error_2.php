<?php
//error handler
function customError($errno, $errstr)
{
echo "<b>Error:</b> [$errno] $errstr";
}
//set error handler
set_error_handler("customError");
//invoke the error handler
echo($nonvar);
?>