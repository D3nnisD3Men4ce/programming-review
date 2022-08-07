<?php

// Inside MySQL
// create database phplogin;
// create table users (
// 	users_id int(11) auto_increment primary key not null,
// 	users_uid tinytext not null,
//     users_pwd longtext not null,
//     users_email tinytext not null
// );

class LoginModel extends Dbh
{

    protected function getUser($uid, $password)
    {
        $stmt = $this->connect()
            ->prepare("SELECT users_pwd FROM phplogin.users WHERE users_uid = ? OR users_email = ?;");


        if (!$stmt->execute(array($uid, $password))) {
            $stmt = null;
            echo "getUser() failed";
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            echo "User not found!";
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]["users_pwd"]);

        if ($checkPwd == false) {
            $stmt = null;
            echo "Wrong password!";
            header("location: ../index.php?error=wrongpassword");
            exit();
        } elseif ($checkPwd == true) {
            $stmt = $this->connect()
                ->prepare("SELECT users_pwd FROM phplogin.users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;");

            if (!$stmt->execute(array($uid, $uid, $password))) {
                $stmt = null;
                echo "getUser() failed";
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                echo "User not found when logging in.";
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
        }

        $stmt = null;
    }
}