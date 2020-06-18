
<?php
$servername = "localhost";
$username = "id13932978_vhm";
$database = "id13932978_qlsv";
$password = "VHM2899VHM@vhm";
//  Create a new connection to the MySQL database using PDO
$connection = new mysqli($servername, $username, $password,$database);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

?>