<?php 
if (($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/gif") &&
        $_FILES["file"]["size"] < 500000)
{
if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br>";
echo "Type: " . $_FILES["file"]["type"] . "<br>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
if (file_exists("images/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],
"upload/" . $_FILES["file"]["name"]);
echo "Saved as: " . "images/" . $_FILES["file"]["name"];
}
}
}
else
{
if ($_FILES["file"]["type"] != "text/plain")
echo "File is not of the permitted type.";
else if ($_FILES["file"]["size"] < 65536)
echo "File exceeds permitted size.";
}
?>
