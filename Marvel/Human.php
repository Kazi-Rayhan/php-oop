<?php

class Human
{
    protected $name;
    protected $age;
    protected $gender;
    protected $occupation;

    public function __construct($name, $age, $gender, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->occupation = $occupation;
    }

    public function get($value = null)
    {
        switch ($value) {
            case 'name':
                return $this->name;
            case 'age':
                return $this->age;
            case 'gender':
                return $this->gender;
            case 'occupation':
                return $this->occupation;
            default:
                return [
                    'name' => $this->name,
                    'age' => $this->age,
                    'gender' => $this->gender,
                    'occupation' => $this->occupation
                ];
        }
        return $this->name;
    }

    public function work()
    {
        echo $this->name . ' Working';
    }
    public function walk()
    {
        echo $this->name . ' Walking';
    }
    public function jump()
    {
        echo $this->name . ' Jumping';
    }
    public function eat()
    {
        echo $this->name . ' Eating';
    }
    public function run()
    {
        echo $this->name . ' Running';
    }
    public function sleep()
    {
        echo $this->name . ' Sleeping';
    }
}

class SuperHuman extends Human
{
    protected $power;

    public function __construct($name, $age, $gender, $occupation, $power)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->occupation = $occupation;
        $this->power = $power;
    }
}

class Police extends SuperHuman
{
    protected $designation;
    protected $gun;

    public function __construct($name, $age, $gender, $designation, $gun)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->occupation = 'police';
        $this->designation = $designation;
        $this->gun = $gun;
    }
}

trait  Childbirth
{
    public function owaowa()
    {
        return rand(1, 3);
    }
}
trait  chetacheti
{
    public function galagali()
    {
        return 'random bullshit';
    }
}
class Woman extends Human
{
    use Childbirth, chetacheti;
}
class Man extends Human
{
    use chetacheti;
}

$sakira = new Woman('Sakira', 38, 'Female', 'singer');
$Pique = new Man('Pique', 45, 'Male', 'Footballer');
// echo $sakira->owaowa();
echo $Pique->galagali();

// $superMan = new SuperHuman('Flight', 'Clark Kent', 30, 'male', 'journalist');
// $bill = new Human('Clark Kent', 30, 'male', 'journalist');
// $kibria = new Police('Kibria', 30, 'male', 'OC', "g18");

// $kibria->work();
