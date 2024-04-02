<?php

require_once("../utils/db.php");
require_once("../model/user.php");


//get rows
$userData=executeQuery("SELECT * FROM user");

//all objects
$userArray=array();

//convert rows into object
while($row=$userData->fetch_assoc()){
    //push objects to array
    array_push($userArray,new User($row["id"],$row["name"],$row["email"],$row["password"],$row["is_admin"]));

}


require("../view/user.php");

?>