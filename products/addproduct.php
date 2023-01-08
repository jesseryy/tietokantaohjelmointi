<?php
require('../dbconnection.php');

$db = createSqliteConnection('../mydatabase.db');

$sql = "INSERT INTO product('name', 'price') VALUES (?), (?)";

try {
$statement = $db->prepare($sql);

$statement->execute( array("housut", 50));
}
catch(PDOException $e) {
    die($e->getMessage());
}