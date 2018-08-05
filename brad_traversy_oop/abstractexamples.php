<?php

include 'classes/Abstract.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abstract Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
    $animal = new Duck();
    $animal->name = 'Duck';
    $animal->color = 'tri colour';
  echo  $animal->describe() . ' and their sound is ' . $animal->makeSound();
echo '</br>';
  $animal1 = new Dog();
    $animal1->name = 'Dog';
    $animal1->color = 'White';
  echo  $animal1->describe() . ' and their sound is ' . $animal1->makeSound();
?>
</body>
</html>