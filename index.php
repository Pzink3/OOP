<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Person {

public $firstName;

public $lastName;

public $nickName;

public $gender;

public $age;



function __construct($nickName, $firstName, $lastName, $gender, $age) {

$this­>nickName = $nickName;

$this­>firstName = $firstName;

$this­>lastName = $lastName;

$this­>gender = $gender;

$this­>age = $age;

$this­>bark = $bark;

$this­>meow = $meow;

}

function getName() {

return “Hi! My name is “ . $this­>firstName .

“ ” . $this­>lastName .

“, but you can call me “ . $this­>scientificName . “ .”;

}

}

class Boy extends Human {

function __construct($scientificName, $firstName, $lastName, $gender, $weight, $dog){

$this­>dog = $dog;

}

function greet() {

return $this­>dog;

parent:__:construct($scientificName, $firstName, $lastName, $gender, $age);

}

}

class boy2 extends Human {

function __construct($scientificName, $firstName, $lastName, $gender, $weight, $sup) {

$this­>sup = $sup;

}

function hello() {

return $this­>bark;

}

}

$human = new Human(“Parker”, “Zink”, “The Zinker”, “male”, 16, true);

print I am ” . $cat­>getName();

parent:__:construct($scientificName, $firstName, $lastName, $gender, $weight);
        ?>
    </body>
</html>
