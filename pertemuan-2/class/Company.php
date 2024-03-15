<?php

class Manager{
    var string $name;

    function sayHello(string $name){
        echo "<h1 style='color: blue;'>Hi $name my name is $this->name</h1>";
    }
}

class VicePresident extends Manager{
    
}