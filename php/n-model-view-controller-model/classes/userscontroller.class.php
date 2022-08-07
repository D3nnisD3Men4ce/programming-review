 <?php

    class UsersController extends UsersModel
    {
        public function createUser($id, $name, $email, $password)
        {
            $this->setUser($id, $name, $email, $password);
        }
    }