<?php
include __DIR__ . '/User.php';
//add new child class here

class Developer extends User
{
  protected $skills = ["PHP", "MYSQL", "HTML"];
  
  public function getSkills()
  {
    return $this->skills;
  }
  
  public function setSkills($skills)
  {
    $this->skills = $skills;
  
  }
  
  public function displayUserSkills()
  {
    return $this->name . ' has the following skills: ' . implode(", ", $this->getSkills());
    
    
  }
  
}


$data = new Developer();
$data->setName('James');
var_dump($data->displayUserSkills());
