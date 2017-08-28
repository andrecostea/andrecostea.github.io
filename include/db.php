<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "aplas";

// Create connection
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>