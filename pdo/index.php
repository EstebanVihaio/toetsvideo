<?php
// echo 'PDO is here to stay!';
require('../functions.php');

$db = new Database();

$db->query("SELECT `id`, `merk`, `model`, `topsnelheid`, `prijs` FROM `car`;");

$result = $db->resultSet();

$rows = "";

foreach ($result as $key => $value)
{
  //Probeer alle hoofdsteden uit de databasetabel country op het scherm te krijgen.
  $rows .= "<tr>
              <td>$value->merk</td>
              <td>$value->model</td>
              <td>$value->topsnelheid</td>
              <td>$value->prijs</td>
            </tr>";
}

?>
<h2>De vijf duurste auto's ter wereld</h2>
<a href="./create.php">Nieuw record</a>
<table>
  <thead>
    <tr>
      <th>Merk</th>
      <th>Model</th>
      <th>Topsnelheid</th>
      <th>Prijs</th>
    </tr>
  </thead>
  <tbody>
    <?php echo $rows; ?>
  </tbody>
</table>

