<?php

class UsersView extends UsersModel
{
    public function showUser($name)
    {
        $results = $this->getUser($name);
        echo "Name: " . $results[0]['name'] . '<br>';
        echo "Email: " . $results[0]['email'];
    }
}