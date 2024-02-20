<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario Image</title>
</head>
<body>
  <form action="server/save-image.php" method="post" enctype="multipart/form-data" >
    <label for="name"> NOMBRE:</label>
    <input type="text" name="name" id="name">
    <label for="image"> Imagen:</label>
    <input type="file" name="image" id="image">
    <button type="submit" > Enviar </button>

  </form>
  
</body>
</html>