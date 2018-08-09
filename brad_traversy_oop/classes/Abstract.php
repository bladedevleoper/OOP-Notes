<?php

/*
    Here we will be looking at abstract classes and methods.

    Note: - Abstract classes are not used as much in php, but it is good knowledge on how to use them.
        - An abstract class is a base class, which you cannot intatiate the abstract class.
        - it is made to extend from the class.
        - if you have an abstract method, then the class itself will have to be an abstract class.



*/



abstract class Animal
{
    public $name;
    public $color;

    public function describe()
    {
        return $this->name . ' is ' . $this->color;
    }

    //cannot contain { } brackets in an absctact method
    abstract public function makeSound();

}


class Duck extends Animal
{
    public function describe()
    {
        return parent::describe();

    }

    public function makeSound()
    {
        return 'Quack';
    }
}

class Dog extends Animal
{
    public function describe()
    {
        return parent::describe();

    }

    public function makeSound()
    {
        return 'Woof';
    }
}

