<?php

class LoginController extends LoginModel
{

    private $uid;
    private $password;


    public function __construct($uid, $password)
    {
        $this->uid = $uid;
        $this->password = $password;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            echo "Login Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->password);
    }

    private function emptyInput()
    {

        if (empty($this->uid) || empty($this->pwd)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
}