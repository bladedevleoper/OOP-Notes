<?php

//this class is a sibling of the Listing Premium Class
class ListingInactive extends ListingBasic
{
    //In this class we are only going to return the title and status properties.

    protected $status = 'inactive';

    //Now we are going to override our getters and setters

    public function getTitle()
    {
        //we cannot access the title property directly as its set to private
        // but we can call the parent method that sets the values
        return '<strike>' . parent::getTitle() . '</strike>';
    }

    public function getWebsite()
    {
        return;
    }

    public function getEmail()
    {
        return;
    }

    public function getTwitter()
    {
        return;
    }
}