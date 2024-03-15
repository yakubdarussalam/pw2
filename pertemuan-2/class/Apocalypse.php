<?php

class Enemy{
    var string $name;
    var int $hp;
    var int $attackPoin;

    function attack(){
        echo "<h3 style='color: grey;'>$this->name Have $this->hp HP and $this->attackPoin Attack Point</h3>";
    }
}

class Ulti extends Enemy{
    function walk(){
        echo "<h3 style='color: grey;'> $this->name Special skill is Walking</h3>";
    }

    function jump(){
        echo "<h3 style='color: grey;'>$this->name Special skill is Jumping</h3>";
    }

    function fly(){
        echo "<h3 style='color: grey;'>$this->name Special skill is Flying</h3>";
    }
}
