<?php
require('../dbconnection.php');

$db = createSqliteConnection('../mydatabase.db');

$sql = "INSERT INTO catogory (name) VALUES (:name)";


