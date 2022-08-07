<?php

// Inside MySQL
// create database phplogin;
// create table users (
// 	users_id int(11) auto_increment primary key not null,
// 	users_uid tinytext not null,
//     users_pwd longtext not null,
//     users_email tinytext not null
// );

class SignupModel extends Dbh
{

    protected function setUser($uid, $password, $email)
    {
        $stmt = $this->connect()
            ->prepare("INSERT INTO phplogin.users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);");

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPassword, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email)
    {
        $stmt = $this->connect()
            ->prepare('SELECT users_uid FROM phplogin.users WHERE users_uid = ? OR users_email = ?;');
        // ? serves as a placeholder

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }


        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}