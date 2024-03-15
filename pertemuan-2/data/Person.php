<?php

class Person {
    var $nama;
    var $address;
    var $country;

    function sayHello(){
        echo "<h3>Hi $this->name from $this->address and $this->country</h3>";
    }
}