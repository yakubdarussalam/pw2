<?php

class Calculator {
    private $bil1;
    private $bil2;

    public function __construct($bil1, $bil2) {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }

    public function add() {
        return $this->bil1 + $this->bil2;
    }

    public function subtract() {
        return $this->bil1 - $this->bil2;
    }

    public function divide() {
        if ($this->bil2 != 0) {
            return $this->bil1 / $this->bil2;
        } else {
            return "Cannot divide by zero";
        }
    }

    public function multiply() {
        return $this->bil1 * $this->bil2;
    }
}


?>