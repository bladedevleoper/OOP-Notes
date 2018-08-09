<?php

/* Going to create a user object */


class User
{
    //Access Modifiers
    private $id = 33;
    private $username;
    private $email;
    private $password;



//this magic method will run each time a class is instantiated (object created)
//this magic method is useful for when you want to set default properties.
public function __construct($username, $password)
{
    // echo 'Constructor Called';
    $this->username = $username;
    $this->password = $password;
}

public function register()
{
    echo 'User Registered';
}

public function auth_user()
{
    echo $this->username . ' is authenticated';
}

//as this is a login method, which will check against user credentials
// it will need to accept parameters.
public function login()
{
    
    // echo $username . ' is now logged in';

    // to use a method from within another class we use the $this->nameofmethod keyword
    //we can also use $this to refer to a property.
    //we didn't have to pass anyting to the auth_user method as we know that it is being stored in the class properties
    $this->auth_user();

}

public function __destruct()
{
    // echo 'destructor run';
}

}