<?php
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <title>PetShop</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center my-4">Pet Shop Online</h1>
    <?php foreach ($products as $product) { ?>
      <div class="product my-5 text-center">
        <?php echo ($product->printInfo()) ?>
      </div>
    <?php } ?>
  </div>
</body>

</html>