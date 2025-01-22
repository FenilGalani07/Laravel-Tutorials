<?php

interface Employee {
    public function display($u, $c);
    public function info();
}

class Home implements Employee {
    protected $uid;
    protected $cc;

    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "Employee ID: $this->uid <br>";
        echo "Credit Card Number: $this->cc <br>";
    }

    public function info() {
        echo "Inside info() - Home<br>";
    }
}

class Office implements Employee {
    protected $uid;
    protected $cc;

    public function display($u, $c) {
        $this->uid = $u;
        $this->cc = $c;
        echo "EID: $this->uid <br>";
        echo "CC: $this->cc <br>";
    }

    public function info() {
        echo "I am called info() from Office<br>";
    }
}

$home = new Home();
$office = new Office();
$home->display("aaaa-bbbb-cccc", "1111-2222-3333-4444");
$office->display("aaaa-bbbb-cccccc", "4444-5555-6666-7777");
$home->info();
$office->info();
?>