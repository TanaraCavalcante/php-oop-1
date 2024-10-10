<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
include __DIR__ .'/php-classes/movie.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="mb-5">
        <img src="img/logo.png" alt="">
        <h2> NaraFlix</h2>
    </header>
    <main>
     
    <section class="container-style">
            <div class="row gap-3 ">
               <?php foreach($movies as $movie){?>
                <div class="card p-2 text-center" style="width: 13rem; heigth: 30rem;" >
                    <img src="<?= $movie->poster ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie->getTitle();?> </h5>
                        <p class="card-text"><?= $movie->getGenre();?></p>
                        <h6 class="card-text"><?= $movie->getYear();?></h6>
                    </div>
                </div>
               <?php } ?>
            </div>
        </section>
  
    </main>
</body>
</html>