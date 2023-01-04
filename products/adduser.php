<?php
require('../dbconnection.php');

$db = createSqliteConnection('../mydatabase.db');

$pw = password_hash("potkukelkka", PASSWORD_DEFAULT);
$db->exec("INSERT INTO user VALUES ('james','".$pw."')");