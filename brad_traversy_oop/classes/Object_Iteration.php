<?php

/*

    In this file we are going to look at object iteration, where we can iterate through the properties within a method.

*/

class People
{
    public $person1 = 'Mike';
    public $person2 = 'John';
    public $person3 = 'Shelly';


    protected $person4 = 'Jeff';
    private $person5 = 'Jen';

    // public function itterateObject()
    // {
    //     foreach($this as $key => $value){
    //             print "$key => $value\n";
    //     }
    // }
}


//Note:this is known as object iteration, where we can iterate through the properties.
//We can itterate the properties within the class, whether they are private, protected or public. See method itterateObject();
//We cannot however itterate through the private or protected outside of the class, it will only show public properties.
$people = new People();
foreach($people as $key => $value){
    print "$key => $value\n";
}
// $people->itterateObject();