<!-- this file will be used for database connection  -->

<?php

$host = "localhost"; //host name
$user = "root"; //user name
$password = ""; //password
$db_name = "ik_login"; //database name
$conn =new mysqli($host, $user, $password, $db_name); // this object will be used for database connection
if ($conn->connect_error) {
    echo "Connection failed: ". $conn->connect_error;
}
?>