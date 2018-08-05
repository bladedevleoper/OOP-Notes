<?php

class ListingFeatured extends ListingPremium
{
    protected $coc; //coc = code of conduct
    protected  $status = 'premium'; //to allow this property to be accessible without creating an object, we can change this to static

    
    /**
     * Calls individual methods to set values for object properties.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = []) {
       //as the parent method has a lot of repeted code, we can call on the parent method

       parent::setValues($data);
        if (isset($data['coc'])) {
            $this->setCoc($data['coc']);
        }
    }

    /**
     * Gets the local property $coc
     * @return string
     */
    public function getCoc()
    {
        return $this->coc;
    }

    /**
     * Cleans up and sets the local property $coc
     * @param string $value to set property
     */

     //this method will not be available to the parent class
    public function setCoc($value)
   {
            /* this uses a strip_tags function which strips certain html tags, we are passing
                the allowed tags property into the variable. strip_tags($string, $variable);

                - we are declaring a static property ($allowed_tags) so we reference this by changing $this->allowed_tags to
                self::$allowed_tags;
             */
          $this->coc = trim(strip_tags($value, self::$allowed_tags));
    }

    public static function dispalyAllowedTags()
    {   
        //this will display the html characters allowed
        return htmlspecialchars(self::$allowed_tags);
    }
}