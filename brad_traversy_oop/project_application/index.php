<?php
//include config

//Base classes
require __DIR__ . '/config/Config.php';
require __DIR__ . '/classes/Bootstrap.php';
require __DIR__ . '/classes/Controller.php';
require __DIR__ . '/classes/model.php';

//controllers
require __DIR__ . '/controller/home.php';
require __DIR__ . '/controller/shares.php';
require __DIR__ . '/controller/users.php';

//models
require __DIR__ . '/model/home.php';
require __DIR__ . '/model/share.php';
require __DIR__ . '/model/user.php';


//this is setting the requests, therefore we need to use the superglobal $_GET to get the requests. this will be accepted as an arguement to the __construc method
$bootstrap = new Bootstrap($_GET);
//once the __contructor runs, we then call the method(action) createController
$controller = $bootstrap->createController();

//checks for a controller, then if true calls the executeAction() method.
if($controller){
    $controller->executeAction();
}

?>