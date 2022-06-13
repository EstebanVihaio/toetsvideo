<?php
// Dit is de sanitize-functie van php
require("../functions.php");

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  try {
      $db->query("INSERT INTO `country`  (`id`, 
                                          `country`, 
                                          `capital`,
                                          `continent`,
                                          `population`)
                                  VALUES  (:id,
                                          :country,
                                          :capital,
                                          :continent,
                                          :population)");

      $db->bind(':id', NULL, PDO::PARAM_INT);
      $db->bind(':country', $_POST['country'], PDO::PARAM_STR);
      $db->bind(':capital', $_POST['capital'], PDO::PARAM_STR);
      $db->bind(':continent', $_POST['continent'], PDO::PARAM_STR);
      $db->bind(':population', $_POST['population'], PDO::PARAM_INT);

      $db->execute();
      header("Location: ./index.php");
  } catch(PDOException $e) {
    echo $e->getMessage();
  }




} else {
  echo "POST array niet afkomstig van Server";
}


