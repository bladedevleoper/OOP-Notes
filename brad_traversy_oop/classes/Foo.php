<?php

//Note: we can also use the final keyword on classes to, and will throw an error of that we cannot inherit the class.
//Note: this is useful if you are working with other developers and don't want your classes to be extended just yet.

 class Foo 
{
    //Note: the keyword final means that this class is the final version and nothing can override it, even if we extend this class into another
    // final public function SayHello()
    // {
    //     echo 'Hello World';
    // }

    public function sayHello()
    {
        echo 'Hello World' . ' I'.'m being called from ' . __CLASS__;
    }
}