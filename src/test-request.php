<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>
  
<script>
  const formData = new FormData();

  formData.append('nombre','Wilber');
  formData.append('edad','29');

  fetch ("server/vardump.php?color=green",{
    body: formData,
    method: "POST"
  })
  .then(res => res.text())
  .then(data=>{
    console.log(data);
  });

</script>
</body>
</html>