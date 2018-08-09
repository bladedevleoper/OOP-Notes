<?php

include 'classes/User.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Static Method &amp; Properties example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<h1>Examples of how to use static methods &amp; properties</h1>

<h2>Information on Static properties &amp; Methods</h2>

<ul>
    <li>Don't need to instantiate a class in order to use a static property or method</li>
    <li>We use the class name to followed by the :: which is called is the scope resolution operator this is to use it outside of the class scope.</li>
    <li>if we want to use the static method or property in the class scope we use the self keyword. self::$property, or self::method()</li>
    <li>Methods &amp; Properties that remain the same can be used as static. Such as a password min length</li>
    
    
</ul>


<pre>
    example with referencing a static property:
    self::$propertyname;

    example with referencing a static method:
    self::methodName();

    example of using them outside the class scope:
    classname::$propertyname;
    classname::methodname();

</pre>

<?php

$password = 'pass';


//Note: here we don't have to intantiate the class as we are dealing with static properties and methods.
if(User::validatePassword($password)){
    echo 'Password is valid';

} else {
    echo 'Password is not valid';
}

?>

</body>
</html>