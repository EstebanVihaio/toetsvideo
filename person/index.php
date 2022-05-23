<?php
//require("./Person.php");
//require("./Docent.php");

require("../functions.php");

/**
 * Dit is een object van de class Person
 */
$person = new Person("Harry", "van", "Bemelen", 41);

// Geef de public property $firstname de waarde Michel
// $person->firstname = "Michel";

// We roepen nu de method sayHello aan
echo $person->sayHallo();

echo "<hr>";

// Vraag de property $name op
// echo "Mijn naam is: " . $person->firstname . " " . $person->infix . " " .  $person->lastname;

/**
 *  We gaan een constructor maken voor een class om de beginwaarden van de fields/properties in te stellen.
 */


$person2 = new Person("Arjan", "de", "Ruijter", 45);

// var_dump($person2);

echo $person2->sayHallo();

echo "<hr>";

//Maak een nieuw object en echo de sayHallo() method

$person3 = new Person("Michel", "den", "Daalder", 42);

$person3->__set("shoesize", 40);

$person3->__set("firstname", "Harry");

echo $person3->sayHallo();
echo "<hr>";
echo "Het tussenvoegsel is: " . $person3->__get("infix");

echo "<hr>";

$docent = new Docent("Ben", "den", "Braber", 42, 745, "RRA");

echo $docent->discloseSalary();

echo "<hr>";

$docent1 = new Docent("Willemijn", "van", "Amelsweert", 32, 1234,  "RVN");
echo $docent1->discloseSalary();











//  $claudiaExample = array(new Person("Arjan", "de", "Ruijter", 34),
//                          new Person("Bert", "de", "Vries", 56),
//                          new Person("Harry", "de", "Beer", 23),
//                          new Person("Ruud", "de", "Bruin", 45),
//                          new Person("Willem", "van", "Kooten", 38));

// var_dump($claudiaExample);
