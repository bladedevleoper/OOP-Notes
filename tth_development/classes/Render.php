<?php

//
/* STATIC METHODS
- by declaring the method as static we are able to use the method outside of the class without making an instance of the class
- to use a static method, we therefore declare the class_name::static_method_name();

Render::displayRecipe($object_placed_inside);

*/

//single responsibility - each class should have a single responsibility for the application.

class Render
{
    public static function displayRecipe($reipe)
    {

        //as this is now a static method we use the parameter variable instead of $this
        return $recipe->title . " by " . $recipe->source;
    }
}