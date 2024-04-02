<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "06jan";



function executeQuery($sql){

    global $db_host;
    global $db_username;
    global $db_password;
    global $db_name;


    $db = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $result=$db->query($sql);
    $db->close();
    return $result;
}

?>
