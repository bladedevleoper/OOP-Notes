<?php
include __DIR__ . '/class/DisplayName.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

<?php $person1 = new DisplayName(); 

$person1->setName('Donna', 'Banana Man');

echo $person1->getName();

?>

</body>
</html>