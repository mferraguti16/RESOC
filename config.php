<<?php $mysqli = new mysqli($host, $user, $password, $dbname);

$host = 'localhost';
$user = 'root';
$password = 'root';
$dbname = 'socialnetwork';

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>