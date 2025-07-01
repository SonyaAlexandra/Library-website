<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "library";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3307)) {
    exit("Connection failed");
}