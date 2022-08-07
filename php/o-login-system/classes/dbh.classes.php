<?php

class Dbh
{
    protected function connect()
    {
        try {
            $username = "root";
            $password = "jkpb5299";
            $dbh = new PDO('mysql:host=localhost;dbname=phplogin', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage() . "<br>";
            die();
        }
    }
}