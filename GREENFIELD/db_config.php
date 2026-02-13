<?php
// db_config.php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; // set your MySQL password
$DB_NAME = 'greenfield_db';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    die("DB connect failed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");
session_start();
?>
