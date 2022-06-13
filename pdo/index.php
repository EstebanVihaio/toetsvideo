<?php
// echo 'PDO is here to stay!';
require('../functions.php');

$db = new Database();

$db->query("SELECT `id`, `country`, `capital`, `continent`, `population` FROM `country`;");

$result = $db->resultSet();

$rows = "";

foreach ($result as $key => $value)
{
  //Probeer alle hoofdsteden uit de databasetabel country op het scherm te krijgen.
  $rows .= "<tr>
              <td>$value->country</td>
              <td>$value->capital</td>
              <td>$value->continent</td>
              <td>$value->population</td>
            </tr>";
}

?>

<a href="./create.php">Nieuw record</a>
<table>
  <thead>
    <tr>
      <th>Land</th>
      <th>Hoofdstad</th>
      <th>Continent</th>
      <th>Aantal inwoners</th>
    </tr>
  </thead>
  <tbody>
    <?php echo $rows; ?>
  </tbody>
</table>

