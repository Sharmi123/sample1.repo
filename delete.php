<?php
include("database.php");

if (isset($_GET['prid']))
{
$id = $_GET['prid'];

$result = mysql_query("DELETE FROM admissionform WHERE id='$id'")
or die(mysql_error());

header("Location: deleteinfo.php");
}
else
{
header("Location: deleteinfo.php");
}
?>
