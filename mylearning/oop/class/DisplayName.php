<?php
class DisplayName
{
    private $title = 'James';
    private $surname;

    function setName($name, $surname)
    {

        $this->title = $name;
        $this->surname = $surname;

    }

    function getName()
    {
        return $this->title . ' '. $this->surname;
    }

    public static function displayAll()
    {

    }
}