<?php

include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Game.php';
include_once __DIR__ . '/Models/Nutrition.php';
include_once __DIR__ . '/Models/Thing.php';

$product_1 = new Nutrition(
    'https://arcaplanet.vtexassets.com/arquivos/ids/221840/expecial-cane-adult-light-pollo-e-riso.jpg?v=1776352586',
    'Royal Canin Mini Adult',
    'cane',
    24,
    400,
    'prosciutto, riso'
);
$product_2 = new Nutrition(
    'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',
    'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',
    'cane',
    34,
    500,
    'manzo, cereali'
);
$product_3 = new Nutrition(
    'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',
    'Almo Nature Cat Daily Lattina',
    'gatto',
    14,
    300,
    'tonno, pollo, prosciutto'
);
$product_4 = new Nutrition(
    'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',
    'Mangime per Pesci Guppy in Fiocchi',
    'pesce',
    4,
    100,
    'cereali, alghe'
);
$product_5 = new Thing(
    'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg',
    'Voliera Wilma in Legno',
    'uccello',
    144,
    'Legno',
    '39 x 26 x h 37 cm'
);
$product_6 = new Thing(
    'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg',
    'Cartucce Filtranti per Filtro EasyCrystal',
    'pesce',
    2,
    'Materiale espanso',
    'ND'
);
$product_7 = new Game(
    'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',
    'Kong Classic',
    'cane',
    12,
    'Galleggia e rimbalza',
    '8,5 cm x 10 cm '
);
$product_8 = new Game(
    'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',
    'Topini di peluche Trixie',
    'gatto',
    4,
    'Morbido con codina di corda',
    '8,5 cm x 10 cm '
);

$products = [$product_1, $product_2, $product_3, $product_4, $product_5, $product_6, $product_7, $product_8]



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Shop</title>
</head>

<body>
    <div class="container">
        <h1 class="mb-5">Boolshop</h1>
        <h3>I nostri prodotti</h3>

        <div class="shop d-flex flex-wrap justify-content-center">
            <?php foreach ($products as $product) : ?>
                <div class="card">
                    <img src=<?= $product->getImg() ?> class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3><?= $product->getTitle() ?></h3>
                        <div class="categoria"> <?= $product->getAnimal() ?></div>
                        <div class="prezzo"><strong>Prezzo: </strong><?= $product->getPrice() ?></div>
                    </div>
                </div>
            <? endforeach ?>
        </div>
    </div>


</body>

</html>