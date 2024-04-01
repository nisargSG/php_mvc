<?php

require_once('../model/car.php');



$result=Car::getAllCars();

require('../view/car.php')





?>