<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditionals</title>
</head>
<body>
  <!-- Esto no se debe hacer -->
  <?= '<h1> Esto no se debe hacer </h1>' ?>

  <?php
  if (true) {
    echo '<p>Esta condicional tambien es verdadera</p>';
  } 
  ?>

<!-- Esto es aceptable y funciona -->
  <?= '<h1> Esto es aceptable y funciona </h1>' ?>
  <?php if (true) { ?>

    <?= 'Esta condicional es verdadera' ?>
  <?php } ?>

<!-- Esto es aceptable y funciona -->
<?= '<h1> Esto si deberias hacerlo </h1>' ?>
  <?php if (true): ?>
    <!-- Si fuera necesario el else -->
    <!-- <?php else: ?> -->
    <?= 'Esta condicional es verdadera' ?>
  <?php endif ?>
  

</body>
</html>