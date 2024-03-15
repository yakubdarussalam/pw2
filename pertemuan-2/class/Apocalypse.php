<?php

class Enemy{
    var string $name;
    var int $hp;
    var int $attackPoin;

    function attack(){
        echo "<h3 style='color: grey;'>$this->name Have $this->hp HP and $this->attackPoin Attack Poin</h3>";
    }
}

class Zombie extends Enemy{
    function walk(){
        echo "<h3 style='color: grey;'>Special skill is Walk</h3>";
    }

    function jump(){
        echo "<h3 style='color: grey;'>Special skill is Jump</h3>";
    }

    function fly(){
        echo "<h3 style='color: grey;'>Special skill is Fly</h3>";
    }
}