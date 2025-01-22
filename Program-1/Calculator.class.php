<?php
class Calculator{
    public function add($a, $b){
        return $a+$b;
    }
    
    public function subtract($a, $b){
        return $a-$b;
    }
    public function divide($a, $b){
        return $a/$b;
    
    }
    public function multiply($a, $b){
        return $a*$b;
    }
    public function myOperation($first, $second, $operation){
        if (is_numeric($first) && is_numeric($second)) {
            switch ($operation) {
                case '+':
                    echo $this->add($first,$second);
                    break;
                case '-':
                    echo $this->subtract($first, $second);
                    break;
                case '*':
                    echo $this->multiply($first, $second);
                    break;
                case '/':
                    if ($second != 0) {
                        echo $this->divide($first, $second);
                    } else {
                        echo "Error: Division by zero";
                    }
                    break;
                default:
                    echo "Invalid operation";
            }
        }
    }
}