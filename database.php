<?php
$db_server  = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "businessdb";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);
} catch (mysqli_sql_exception) {
    echo 'Connection failed <br>';
}
if ($conn) {
    echo ("Connected to the database successfully! <br>");
}
