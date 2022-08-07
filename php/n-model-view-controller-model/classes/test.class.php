<?php

class Test extends Dbh
{
    public function getData()
    {
        $sql = "SELECT * FROM laragigs.listings";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['title'] .  '<br>';
        }
    }

    public function getUsersStmt($name, $email)
    {
        $sql = "SELECT * FROM laragigs.users WHERE name = ? AND email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email]);
        $names = $stmt->fetchAll();

        foreach ($names as $namee) {
            echo $namee['name'] . $namee['email'] . '<br>';
        }
    }

    public function setUsersStmt($id, $name, $email, $password)
    {
        $sql = "INSERT INTO laragigs.users(id, name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name, $email, $password]);
    }
}