<?php
/**
 * Dit is de Docent class
 */
class Docent extends Person
{
  // properties, fields
  private $salary = 1500;
  private $teacherNumber = "RRA";

  // get-method
  public function __get($property)
  {
    if (property_exists($this, $property))
    {
      return $this->$property;
    }
  }

  // set-method
  public function __set($property, $value)
  {
    if (property_exists($this, $property))
    {
      $this->$property = $value;
    }
  }

  public function __construct($firstname, $infix, $lastname, $shoesize, $salary, $teacherNumber)
  {
    parent::__construct($firstname, $infix, $lastname, $shoesize);
    $this->salary = $salary;
    $this->teacherNumber = $teacherNumber;
  }

  public function discloseSalary()
  {
    return "Mijn naam is " . $this->firstname . " " . 
                             $this->infix . " " .  
                             $this->lastname . " en mijn salaris bedraagt: " . 
                             $this->salary . " euro. Mijn afkorting is: " . 
                             $this->teacherNumber . ". Mijn schoenmaat is: " . 
                             $this->shoesize;
  }
}