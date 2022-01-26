<?php
$servername = "localhost:3308";
$username = "root";
$password = "1234";
$db = "tcet tnp";
$con = new mysqli($servername, $username, $password, $db);
if (!$con) {
    //die('could not connect'.mysql_error());
} else {
    #echo "<h1>database connected</h1>";
}
