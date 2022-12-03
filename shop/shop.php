<?php
  
 
  if (isset($_POST['name']) && isset($_POST['price'])) {
    $file = './files/product.txt';
    $productInfo = $_POST['name'] . '|' . $_POST['price'] . PHP_EOL;
    $files = fopen($file, 'a');
    fwrite($files, $productInfo);
    fclose($files);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form action="/project/shop/shop.php" method="POST">
    <div class="container">
      <br>
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Product:</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="продукт..." name="name">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Price:</label>
          <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="цена..." name="price">
        </div>
        <br>
        <button class="submit">Сохранить</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>