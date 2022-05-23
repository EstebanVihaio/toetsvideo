<?php
/**
 * Dit is een class met de naam Person
 */
class Person 
{
  // properties/Fields
  protected $firstname;
  protected $infix;
  protected $lastname;
  protected $shoesize;

  // set-functies (magic method __set)
  public function __set($property, $value)
  {
    if (property_exists($this, $property)) 
    {
      $this->$property = $value;
    }
  }

  // get-functies (magic method __get)
  public function __get($property)
  {
    if (property_exists($this, $property))
    {
      return $this->$property;
    }
  }


  // Dit is de constructor van je class
  public function __construct($firstname, $infix, $lastname, $shoesize) 
  {
    // echo "It's automagical!!!, it's amazing!!!";
    $this->firstname = $firstname;
    $this->infix = $infix;
    $this->lastname = $lastname;
    $this->shoesize = $shoesize;
  }

  // public function __destruct() {
  //   echo 'Het object in de variabele $person is er niet meer, is verwijdert uit het werkgeheugen';
  // }

  // dit is een method
  public function sayHallo() {
    return "Mijn naam is: " . $this->firstname . " " . $this->infix . " " 
            . $this->lastname . ". Mijn schoenmaat is: " . $this->shoesize;
  }
}