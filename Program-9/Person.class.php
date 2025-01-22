<?php
class Person{
    public $pan;
    public $aadhar;
    public $bank;
    public function __construct($pan, $aadhar, $bank){
        echo "Person class constructor called";
        $this->pan = $pan;
        $this->aadhar = $aadhar;
        $this->bank = $bank;
    }
    public function displayDetails(){
        echo "<br/>PAN: ". $this->pan. "<br>";
        echo "<br/>Aadhar: ". $this->aadhar. "<br>";
        echo "<br/>Bank: ". $this->bank. "<br>";
    }
}

