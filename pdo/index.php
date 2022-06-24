<?php
// echo 'PDO is here to stay!';
require('../functions.php');

$db = new Database();

$db->query("SELECT * FROM `richestpeople` ORDER BY `networth` DESC;");
// $db->query("SELECT `id`, `name`, `networth  `, `age`, `compagny` FROM `richestpeople` ORDER BY `networth` ASC;");

$result = $db->resultSet();

$rows = "";

foreach ($result as $key => $value)
{
  //Probeer alle hoofdsteden uit de databasetabel country op het scherm te krijgen.
  $rows .= "<tr>
              <td>$value->name</td>
              <td>$value->networth</td>
              <td>$value->age</td>
              <td>$value->compagny</td>
            </tr>";
}

?>
<h2>De vijf rijkste mensen ter wereld</h2>
<a href="./create.php">Nieuw record</a>
<table>
  <thead>
    <tr>
      <th>Naam</th>
      <th>Vermogen</th>
      <th>Leeftijd</th>
      <th>Bedrijf</th>
    </tr>
  </thead>
  <tbody>
    <?php echo $rows; ?>
  </tbody>
</table>

