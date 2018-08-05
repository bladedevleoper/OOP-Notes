<?php

// include 'classes/Foo.php';
// include 'classes/Bar.php';

//this will autoload all the files in the classes folder
spl_autoload_register(function($class_name){

    include __DIR__ . '/classes/' . $class_name . '.php';

});

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Autoloading Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
$foo = new Foo();
$bar = new Bar();

echo '<h1>Using Autoload to include all class files</h1>';

$foo->sayHello();
echo '</br>';
$bar->sayHello(); //this throws an error as we are trying to override it in our Bar class
?>
</body>
</html>