<?php
$db_server  = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "webdev";
$conn = "";

try {
    $conn = new mysqli($db_server, $db_user, $db_passwd, $db_name);
} catch (mysqli_sql_exception) {
    die("Connection failed");
}
if ($conn) {
    echo ("Connected successfully! ");
}
