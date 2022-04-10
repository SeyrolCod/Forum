<?php

namespace Application\Model;

class Users {

    public $username;
    public $email;
    public $password;

    public function exchangeArray(array $data)
    {
        $this->username = !empty($data['username']) ? $data : null;
        $this->email = !empty($data['email']) ? $data : null;
    }

}