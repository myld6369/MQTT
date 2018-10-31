<?php
require("phpMQTT.php");
$server = "127.0.0.1";     // change if necessary
$port = 61613;                     // change if necessary
$username = "admin";                   // set your username
$password = "password";                   // set your password
$client_id = "phpMQTT-publisher"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new phpMQTT($server, $port, $client_id);

if ($mqtt->connect(true, NULL, $username, $password)) {
    echo $mqtt->message("test");
    $mqtt->close();
} else {
    echo "Time out!\n";
}