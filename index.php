<?php
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-oop-2</title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">E-commerce</h1>
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-4">
                    <div class="card bg-warning">
                        <img src="<?php echo $product->getName(); ?>" class="card-img-top" alt="<?php echo $product->getName(); ?>">
                        <!-- Contenuto -->
                        <div class="card-content mx-3">
                            <h3 class="title text-center"><?php echo $product->getName(); ?></h3>
                            <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?> €</p>
                            <?php if(method_exists($product, 'getExpiration')) { ?>
                            <p class="card-text">Data di scadenza: <?php echo $food->getExpiration(); ?></p>                            
                            <?php } ?>
                            <?php if(method_exists($product, 'getGames')) { ?>
                            <p class="card-text">Gioco: <?php echo $toys->getGames(); ?></p>                            
                            <?php } ?>
                            <?php if(method_exists($product, 'getSize')) { ?>
                            <p class="card-text">Dimensioni: <?php echo $toys->getSize(); ?></p>                            
                            <?php } ?>
                            <div>
                                <?php echo $product->getCategory()->getIcon() ?>
                            </div>
                            <a href="#" class="btn bg-white my-3 d-flex justify-content-center">Aggiungi</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>