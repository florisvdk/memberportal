<?php
include("../includes/php/top.php");
include("../includes/php/mysqli.php");

$reminder=$_GET["reminder"];

$reminder = mysqli_real_escape_string($dbhandle , $reminder );

if ($reminder==NULL) {
    echo '<META http-equiv="refresh" content="0;URL=' . $baseurl . 'reminders/reminders.php">';
    exit;
}

$strQuery2 = "DELETE FROM `reminders` WHERE `idreminders`='" . $reminder . "' AND `username`='" . $username . "';";
$result2 = $dbhandle->query($strQuery2) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
echo '<p>Herinering verwijderd</p>';
echo '<META http-equiv="refresh" content="0;URL=' . $baseurl . 'reminders/reminders.php">';

include("../includes/php/bottom.php");
?>