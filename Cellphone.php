<?php

class Cellphone
{
    public $name = 'Nokia';
    public $model = '1110';
    public $ean = 'asdaf';

    public function __construct($n, $m, $e)
    {
        $this->name = $n;
        $this->model = $m;
        $this->ean = $e;
    }

    public function call()
    {
        echo 'calling';
    }
}


class User
{
    public $name;
    public $email;
    public $password;


    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function login($email, $password)
    {
        if ($email != $this->email)  return 'Envalid email';
        if (!password_verify($password, $this->password))  return 'Envalid Password';
        return 'Login successfull';
    }

    public function __destruct()
    {
        echo 'Hello';
    }
}

$Rayhan = new User('Kazi Rayhan Reza', 'thisiskazi@gmail.com', 'password');
// echo $Rayhan->login('thisiskazi@gmail.com', 'password');
// // echo $samsung->name;
// echo password_hash("Cloudways", PASSWORD_DEFAULT);
// echo password_verify("Cloudways", "$2y$10$5UXL5.mc0FSHqggvwtT9Au4jkX5jTUt6MTdBQRt9dcUf7kmJ1htSW");

