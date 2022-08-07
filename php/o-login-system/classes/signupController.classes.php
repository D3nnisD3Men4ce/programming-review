<?php

class SignupController extends SignupModel
{

    private $uid;
    private $password;
    private $pwdConfirm;
    private $email;


    public function __construct($uid, $password, $pwdConfirm, $email)
    {
        $this->uid = $uid;
        $this->password = $password;
        $this->pwdConfirm = $pwdConfirm;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            echo "Signup Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->isValidUid() == false) {
            echo "Invalid ID!";
            header("location: ../index.php?error=invaliduid");
            exit();
        }

        if ($this->invalidEmail() == false) {
            echo "Invalid Email!";
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if ($this->pwdMatch() == false) {
            echo "Password unmatched!";
            header("location: ../index.php?error=passwordunmatched");
            exit();
        }

        if ($this->checkExisting() == false) {
            echo "Username already taken!";
            header("location: ../index.php?error=uidemailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->password, $this->email);
    }

    private function emptyInput()
    {

        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdConfirm) || empty($this->email)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }


    private function isValidUid()
    {

        if (!preg_match("/^[a-zA-z0-9]*$/", $this->uid)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    private function invalidEmail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    private function pwdMatch()
    {

        if ($this->password !== $this->pwdConfirm) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


    private function checkExisting()
    {

        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}