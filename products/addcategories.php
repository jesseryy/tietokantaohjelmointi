<?php
require('../dbconnection.php');

$db = createSqliteConnection('../mydatabase.db');

$sql = "INSERT INTO category(name) VALUES (?)";

try {
$statement = $db->prepare($sql);

$statement->execute( array("huonekalut"));
}
catch(PDOException $e) {
    die($e->getMessage());
}


