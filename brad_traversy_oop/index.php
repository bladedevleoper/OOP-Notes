<?php
include 'classes/Example.php';
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
    <?php
        //if properties are set in the contructor, we therefore need to pass in arguements to the point where the class is being instantiated.
        $user = new User('James', '12345');

    $user->login();

    
    //accessing a method with arguements which is passed to the register method.
        // $user->login('James', '12345');
    ?>
</body>
</html>