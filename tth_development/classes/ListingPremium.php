<?php 

/* INHERITANCE */

//this uses the keyword extends and then extends the ListingBasic class.
//Properties = attributes
//Methods = actions

/*
Notes:

ListingBasic = Parent Class
ListingPremium = Child Class - this then inherits the properties and methods from the parent class

*/

class ListingPremium extends ListingBasic
{

    protected $description; //changing this from private to protected will allow the parent class to know of its existance
    protected static $allowed_tags = '<p><br><b><strong><em><u><ol><ul><li>';
    protected  $status = 'premium'; //to allow this property to be accessible without creating an object, we can change this to static

    
    /**
     * Calls individual methods to set values for object properties.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = []) {
       //as the parent method has a lot of repeted code, we can call on the parent method

       parent::setValues($data);
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
    }

    /**
     * Gets the local property $description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Cleans up and sets the local property $description
     * @param string $value to set property
     */

     //this method will not be available to the parent class
    public function setDescription($value)
   {
            /* this uses a strip_tags function which strips certain html tags, we are passing
                the allowed tags property into the variable. strip_tags($string, $variable);

                - we are declaring a static property ($allowed_tags) so we reference this by changing $this->allowed_tags to
                self::$allowed_tags;
             */
          $this->description = trim(strip_tags($value, self::$allowed_tags));
    }

    public static function dispalyAllowedTags()
    {   
        //this will display the html characters allowed
        return htmlspecialchars(self::$allowed_tags);
    }

    /* Notes on class scope
    - a child class can override the existing methods and properties, as long as the parent class permits it.
    - This is apart of the class scope
    
    - we can provide visibility to the methods within the child class such as private and protected

    -if we don't want a child to access a property directly then we set it to private. Properties with no default setting should be kept at private, giving access only through setters and getters.

    - when we want to access a property directly from a child class, we should set the visibility to protected, this keeps the property protected from outside the class, but it allows a child class to access the property.

    public - Class members declared public can be accessed everywhere.
    protected - Members declared protected can be accessed only within the class itself and by inheriting classes.
    private - Members declared as private may only be accessed by the class that defines the member.

    - KEY WORD SELF - to access a static method we need to use the keyword self::$propertyname; it also could be self::methodname();
    */

}
