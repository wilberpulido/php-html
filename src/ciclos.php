<?php 
  $while = 0;  
  $fruits = ['Pear','Apple','Banana','Strawberry'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>
<body>

<ol>
  <?php for($x = 0; $x < 10; $x++):  ?>
    <?= "<li> $x </li>" ?>
  <?php endfor ?>
  <br>
  <?php while($while < 5):  ?>
    <?= '<li> Ciclo while </li>' ?>
    <?php $while++; ?>
  <?php endwhile ?>
  <br>
  <?php foreach($fruits as $key => $fruit): ?>
    <?= "<li> key: $key, fruit: $fruit </li>" ?>
  <?php endforeach ?>
</ol>
  
</body>
</html>