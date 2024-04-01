<?php
$db_host = "localhost";
$db_username = "username";
$db_password = "password";
$db_name = "database_name";



function executeQuery($sql){
    $db = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $result=$db->query($sql);
    $db->close();
    return $result;
}

?>
