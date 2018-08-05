<?php

/*
    will be covering static methods and properties in the is file
    Note: We don't instantiate static properties
*/

class User
{   
    //Note: the username would not be static as the username is always going to be different
    public $username;
    //Note: the minPassLength is however going to be the same, and therefore can be used as a static property.
    public static $minPassLength = 5;

    //Note: the following static method can be classed as static.
    public static function validatePassword($password)
    {
        //Note: when we use a static method or property we use the self:: (:: is the scope resolution operator) keyword to declare it
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}