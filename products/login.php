<?php
session_start();

require('../dbconnection.php');
$db = createSqliteConnection('../mydatabase.db');

$uname = $_POST["uname"];
$pw = $_POST["pw"];

$sql = "SELECT passwd FROM user WHERE username=?";
$statement = $db->prepare($sql);
$statement->execute(array($uname));

$hashpw = $statement->fetchColumn();

if(isset($hashpw) && password_verify($pw, $hashpw)){
    $_SESSION["username"] = $uname;
    http_response_code(200);
    echo "Kirjautuminen onnistui.";
}else{
    http_response_code(401);
    echo "Kirjautuminen epäonnistui.";
}