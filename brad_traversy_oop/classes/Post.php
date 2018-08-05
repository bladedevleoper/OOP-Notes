<?php

/*

    In this class we will be looking at setters and getters, when a property is set to private 

*/

class Post
{
    private $name;


    /* the __set is a magic method which is used to set values1 */
    public function __set($name, $value)
    {
        echo 'Setting ' . $name  . ' to <strong>' . $value . '</strong></br>';
        $this->name = $value;
    }

    public function __get($name)
    {
        echo 'Getting ' . $name  . ' <strong>' . $this->name . '</strong></br>';
    }

    public function __isset($name)
    {
        echo 'Is ' . $name . ' set?</br>';
        return isset($this->name);
    }
}