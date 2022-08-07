<?php

class UsersModel extends Dbh
{

    protected function getUser($name)
    {
        $sql = "SELECT * FROM laragigs.users WHERE name = ?";
        // Use prepare() if we're getting information from users that is being submitted inside the website
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($id, $name, $email, $password)
    {
        $sql = "INSERT INTO laragigs.users(id, name, email, password) VALUES (?, ?, ?, ?)";
        // Use prepare() if we're getting information from users that is being submitted inside the website
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name, $email, $password]);
    }
}