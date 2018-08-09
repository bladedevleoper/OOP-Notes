<?php

/* this will demonstrate how to do autoloading and we look at the final keyword

- the final keyword stops child classes overriding the parent classes properties and methods

*/

class Foo 
{
    public function SayHello()
    {
        echo 'Hello World';
    }
}