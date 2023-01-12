<?php
class Man
{
    public $name;
    public $age;
    public $weight;
    public $height;

    public function __construct($name, $weight, $height)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }

    public function age()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function walk()
    {
        echo $this->name . ' walking and his weight is ' . $this->weight;
    }

    public function jump()
    {

        echo 'jumping';
    }

    public function kick()
    {
        echo 'kicking';
    }
}

$rayhan = new Man('Rayhan', 98, 6);
$bluebird = new Man('Rizul', 60, 5.4);
$dsa = new Man('Rizul', 60, 5.4);

$bluebird->setAge(12);
echo $bluebird->age();
