<?php
require_once 'Person.class.php';
class Employee extends Person{
    public function __construct(){
        echo "I am called from Employee Class";
    }
}