<?php


function createSqliteConnection($filename){
    try{
        $dbcon= new PDO("sqlite:".$filename);
        return $dbcon;
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    return null;
    }