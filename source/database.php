<?php
require_once('../source/config.php');

$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection->connect_error) {
    die('Database-verbinding mislukt: ' . $connection->connect_error);
}
