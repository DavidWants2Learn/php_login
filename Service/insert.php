<?php
//require_once '../Persistence_layer/connection.php';
require('../Persistence_layer/connection.php');


//
$connection = new connection($_POST);
$connection->AddToDB();

//echo "Insert.php debug.";
//echo $_POST['fname'];