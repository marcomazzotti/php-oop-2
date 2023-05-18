<?php

require_once __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Pet Shop Online</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">Pet Shop</h1>
    <hr>
    <div class="row">
      <?php foreach ($products as $product) { ?>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo $product->img ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name ?></h5>
              <p class="card-text">Descrizione: <br> <?php echo $product->description ?></p>
              <p class="card-text">Prezzo: € <?php echo $product->price ?></p>
              <p class="card-text">Categoria: <?php echo $product->category->name ?><i class="<?php echo $product->category->icon ?> ms-1"></i></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>