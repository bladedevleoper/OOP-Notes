<?php
//Note: we only use setters and getters when we make a private property, as when set to private it cannot be accessed outside of the class
class First
{
    protected $id =23;
    protected $name = 'John Doe';

    public function sayHello()
    {
        echo ' Something called from the '. __CLASS__. ' class </br>';
    }


}

//Note: This second class is now extending the first now.
//Note: This will allow us to use the methods and properties of the first class.
class Second extends First
{

    //Note: if the property in the parent class is protected, then we must set a getter method within the child class in order to access that property
    public function getName()
    {
        return $this->name;
    }

    public function sayHello()
    {
        First::sayHello();
        echo 'This is being called from the ' . __CLASS__ . ' class by extending the ' . __METHOD__ . ' method';
    }

}


