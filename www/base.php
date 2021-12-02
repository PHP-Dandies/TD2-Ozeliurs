<?php
include 'utils.inc.php';
start_page();
?>

<?php
    $dbLink = mysqli_connect("localhost:3306", "root") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , "mysql") or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>

<?php
$query = 'SELECT * FROM USER';

if(!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
    
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

?>

<table class="striped">
  <caption>
    Table USER
  </caption>
  <thead>
    <tr>
      <th>ID</th>
      <th>SEX</th>
      <th>MAIL</th>
      <th>PASS</th>
      <th>PHONE</th>
      <th>COUNTRY</th>
      <th>CG</th>
      <th>DATE</th>
    </tr>
  </thead>
  <tbody>

<?php
while($dbRow = mysqli_fetch_assoc($dbResult)) {
  $message = '</tr>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["ID"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["SEX"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["MAIL"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["PASS"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["PHONE"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["COUNTRY"].'</td>'.PHP_EOL;
  $message .= '    <td>'.$dbRow["CG"].'</td>'.PHP_EOL;
  $message .= '    <td>'.date('d/m/Y', strtotime($dbRow['DATE'])).'</td>'.PHP_EOL;
  $message .= '<tr>'.PHP_EOL;
  echo $message;
}
?>

</tbody>
  </table>

<?php
end_page();
?>