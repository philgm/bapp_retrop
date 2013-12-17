<?php
$server = "mysql51-104.perso";
$username = "argosappsql";
$password = "ilest11h29";
$database = "argosappsql";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);

$sql = "SELECT pseudo FROM retro_commentaire";
$result = mysql_query($sql) or die ("Query error: " . mysql_error());

$bugs = array();

while($row = mysql_fetch_assoc($result)) {
	$bugs[] = $row;
}

echo $_GET['jsoncallback'] . '(' . json_encode($bugs) . ');';

mysql_close($con);
?>