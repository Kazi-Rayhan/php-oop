<?php

class Bank
{
    //attributes
    //account owner
    public $owner;
    //account number
    public $number;
    //account balance
    protected $balance = 0;
    //loan
    protected $loan = 0;

    public function __construct($owner, $number)
    {
        $this->owner = $owner;
        $this->number = $number;
    }

    //methods
    //withdraw
    public function withdraw($amount, $loan = false)
    {
        if ($this->balance >= $amount) {
            $this->balance = $this->balance - $amount;
        } elseif ($loan == true) {
            $this->loan($amount - $this->balance);
            $this->balance = $this->balance - $amount;
        } else {
            echo 'Get a loan because you are gorib <br>';
        }
    }
    //deposit
    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
    }

    public function loan($amount)
    {
        $this->loan = $this->loan + $amount;

        $this->deposit($amount);
    }

    public function getBalance()
    {
        echo  $this->balance;
    }

    public function getLoan()
    {
        echo  $this->loan;
    }
}

$nabilsAccount = new Bank('Nabil', '12346666');


$nabilsAccount->deposit(110);
$nabilsAccount->withdraw(120,true);


echo $nabilsAccount->getLoan();
echo '<br>';
echo $nabilsAccount->getBalance();
