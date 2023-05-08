<?php

require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Gioco.php';
require_once __DIR__ . '/Models/Relax.php';

$_caneGrande = new Animale('Cane', '<i class="fa-solid fa-dog"></i>', 'py-3 px-3');
$_canePiccolo = new Animale('Cane', '<i class="fa-solid fa-dog"></i>', 'py-2 px-2');
$_gattoGrande = new Animale('Gatto', '<i class="fa-solid fa-cat"></i>', 'py-3 px-3');
$_gattoPiccolo = new Animale('Gatto', '<i class="fa-solid fa-cat"></i>', 'py-2 px-2');



$cuccia = new Relax($_canePiccolo, 50, './images/cuccia.jpg', 'Il trono del Re', 'Giulius', 'Relax', 'resina', 'cuccia', 'large');//cuccia
$cuccia->ottieniPeso(3);
$cuscino = new Relax($_caneGrande, 20, './images/cuscino.jpg', 'Il cuscino gigante', 'Giulius', 'Relax', 'cotone', 'cuscino', 'large');//cuscino
$cuscino->ottieniPeso(0.5);
$crocchette = new Cibo($_caneGrande, 50, './images/crocchette.jpg', 'Crocchette Buone', 'Monoprotein', 'Cibo', 'Adult', 'secco', 'cinghiale');//crocchette
$crocchette->ottieniPeso(12);
$umido = new Cibo($_gattoGrande, 7, './images/umido.jpg', 'Polpa di topo', 'Mario', 'Cibo', 'Puppy', 'umido', 'topo');//umido
$umido->ottieniPeso(0.250);
$palla = new Gioco($_canePiccolo, 16, './images/palla.jpg', 'Palla matta', 'Pino', 'Gioco', 'plastica', 'palla');//palla
$palla->ottieniPeso(0.1);
$corda = new Gioco($_gattoPiccolo, 10, './images/corda.jpg', 'Corda annodata', 'Gaspare', 'Gioco', 'corda', 'corda');//corda
$corda->ottieniPeso(0.3);

$prodotti = [
    $cuccia,
    $cuscino,
    $crocchette,
    $umido,
    $palla,
    $corda
];
foreach($prodotti as $prodotto){
    try {
        $prodotto->validazionePeso($prodotto->peso);
    } catch (Exception $e) {
        echo "Si è verificato un errore: " . $e->getMessage();
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pet shop</title>
</head>
<body>
    <header>
        <h1 class='text-center bg-primary fw-bolder text-white'>PET SHOP</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($prodotti as $prodotto){?>
                    <div class="col-3">
                        <div class="card position-relative text-center" style="width: 18rem;">
                            <img src="<?php echo $prodotto->img ?>" class="card-img-top" alt="<?php echo $prodotto->titolo ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $prodotto->titolo ?></h5>
                                <h6 class="card-title"><?php echo $prodotto->prezzo ?>€</h6>
                                <div class="card-title">Produttore: <strong><?php echo $prodotto->brand ?></strong></div>
                                <div class="card-title">Categoria: <strong><?php echo $prodotto->categoria ?></strong></div>
                                <div class="card-title">Peso prodotto: <strong><?php echo $prodotto->settaPeso() ?> Kg</strong></div>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                            <div class="position-absolute top-0 end-0 p-5 rounded-5">
                                <span class='<?php echo $prodotto->animale->grandezzaIcona ?> text-bg-dark border border-dark rounded-pill'>
                                    <?php echo $prodotto->animale->icon ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>
