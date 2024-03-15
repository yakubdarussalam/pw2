<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    

<?php

require_once "data/Person.php";
require_once "data/Car.php";
require_once "class/Company.php";
require_once "class/Apocalypse.php";
require_once "class/Calculator.php";

echo "<hr>";
echo "<h1 >>>Class, Object, Properties<<</h1>";
$person = new Person();
$person -> name="Agus";
$person -> address="Zimbabwe";
$person -> country="South Africa";

$person -> sayHello();


$avanza = new Car();
$avanza -> name="Avanza";
$avanza -> brand="Toyota";

$almaz = new Car();
$almaz -> name="Almaz";
$almaz -> brand="Wuling";

$mobilio = new Car();
$mobilio -> name="Mobilio";
$mobilio -> brand="Honda";

$avanza -> startEngine();
$avanza -> stopEngine();

$almaz -> startEngine();
$almaz -> stopEngine();

$mobilio -> startEngine();
$mobilio -> stopEngine();
echo "<hr>";
echo "<h1 >>>Inheritance<<</h1>";

$manager = new Manager();
$manager -> name="Agus";
$manager -> sayHello("Joni");


$vp = new VicePresident();
$vp -> name="Aceng";
$vp -> sayHello("Budi");



$zombie = new Ulti();
$zombie -> name="Zombie";
$zombie -> hp=100;
$zombie -> attackPoin=90;
$zombie -> attack();
$zombie -> walk();

$pocong = new Ulti();
$pocong -> name="Pocong";
$pocong -> hp=200;
$pocong -> attackPoin=50;
$pocong -> attack();
$pocong -> jump();

$burung = new Ulti();
$burung -> name="Burung";
$burung -> hp=30;
$burung -> attackPoin=10;
$burung -> attack();
$burung -> walk();
$burung -> jump();
$burung -> fly();

?>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    $calculator = new Calculator($bil1, $bil2);

    if (isset($_POST['add'])) {
        $result = $calculator->add();
        $operation = $bil1 . ' + ' . $bil2;
    } elseif (isset($_POST['subtract'])) {
        $result = $calculator->subtract();
        $operation = $bil1 . ' - ' . $bil2;
    } elseif (isset($_POST['divide'])) {
        $result = $calculator->divide();
        $operation = $bil1 . ' ÷ ' . $bil2;
    } elseif (isset($_POST['multiply'])) {
        $result = $calculator->multiply();
        $operation = $bil1 . ' × ' . $bil2;
    }
}
?>
<div class="card m-3">
    <div class="card-body">
            <div class="row gx-5">
                <div class="col-6">
                
                <form class="p-3" method=POST>
                    <h3>Calculator</h3>
                    <div class="mb-3">
                        <label for="bil1" class="form-label">Bil 1</label>
                        <input name="bil1" type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="bil2" class="form-label">Bil 2</label>
                        <input name="bil2"type="number" class="form-control" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">+</button>
                    <button type="submit" name="subtract" class="btn btn-primary">-</button>
                    <button type="submit" name="divide" class="btn btn-primary">:</button>
                    <button type="submit" name="multiply" class="btn btn-primary">x</button>
                </form>
                </div>                                                                      
                    
                        <div class="col-6 p-3">
                        <h3>Result</h3>
                            <table class="table table-bordered mt-4 text-center">
                            <thead>
                                <tr>
                                <th scope="col">Operation</th>
                                <th scope="col">Output</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><?php if(isset($operation)) echo $operation; ?></td>
                                <td><?php if(isset($result)) echo $result; ?></td>
                                </tr>
                                
                            </tbody>
                            </table>
                        
                        </div>
            </div>
    </div>
</div>

</body>
</html>