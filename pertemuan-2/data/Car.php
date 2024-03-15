<?php

class Car{
    var $name;
    var $brand;

    function startEngine(){
        echo "<h3 style='color: green;'>Hi $this->name $this->brand start Engine!!</h3>";
    }

    function stopEngine(){
        echo "<h3 style='color: red;'>Hi $this->name $this->brand stop Engine!!</h3>";
    }
}