<?php
//do not modify this file
class User {
    protected $name;
    protected $title;

    public function __construct($name = null, $title = null) {
        $this->name = $name;
        $this->title = $title;
    }

    public function __toString() {
        return $this->getSalutation();
    }
    
    public function getSalutation() {
        return $this->title . " " . $this->name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}