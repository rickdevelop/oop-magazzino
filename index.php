<?php
  require 'red_wine.php';
  require 'white_wine.php';
  $Syrha = new red_wine('Syrha', '0,75 lt', '15,90 €');

  $fontana = new red_wine('Fontana dei grilli', '0,75', '10,00 €');

  $Lupatri = new red_wine('Lu patri', '0,75 lt', '20,00 €');
  $Lupatri->marca = 'Lu patri';
  $Lupatri->litri = '0,75';
  $Lupatri->prezzo = '20,00';

  $archineri = new white_wine('Archineri - bianco - etna', '0,75 lt', '30,00 €');
  $planeta = new white_wine('Planeta', '0,75 lt', '25,00 €');
  $inzolia = new white_wine('Alico Inzolia', '0,75 lt', '20,00 €');
?>
<h2>Vini rossi:</h2>
<ul>
  <li><?php echo $Syrha->printProduct() ?></li>

  <li><?php echo $fontana->printProduct() ?></li>

  <li><?php echo $Lupatri->printProduct() ?></li>
</ul>

<h2>Vini bianchi:</h2>
<ul>
  <li><?php echo $archineri->printProduct() ?></li>

  <li><?php echo $planeta->printProduct() ?></li>
  
  <li><?php echo $inzolia->printProduct() ?></li>
</ul>
