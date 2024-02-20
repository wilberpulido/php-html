<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario GET</title>
</head>
<body>
  <form action="server/vardump.php" method="get">
    <label for="name"> NOMBRE:</label>
    <input type="text" name="name" id="name">
    <label for="age"> EDAD:</label>
    <input type="text" name="age" id="age">
    <button type="submit" > Enviar </button>

  </form>
  
</body>
</html>