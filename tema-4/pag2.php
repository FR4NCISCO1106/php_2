<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
  echo "La foto se registro en el servidor.<br>";
  $nom=$_FILES['foto']['name'];
  echo "<img src=\"$nom\">";
?>


</body>
</html>