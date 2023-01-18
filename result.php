<?php
$height = $_GET["height"];
$weight = $_GET["weight"];
$height2 = $height * $height / 10000;
$result = round($weight/$height2,1)?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KMI skaičiuoklė</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="index.css";
</head>
<body class="bg-secondary ">
<section class="d-flex row">

<div class="container justify-content-between align-items-center flex-wrap d-flex " style="min-height: 100vh">
    <div class="col-lg-8 text-center align-items-center">
        <div class="card p-3">

            <div class="card-body ">
                <h5 class="card-title d-flex row justify-content-between p-3">
                    <p class="col-md-2">KMI</p>
                    <p class="col-md-4">Būklė</p>
                    <p class="col-md-4">Ligų rizika</p>
                </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex row justify-content-between">
                    <p class="col-md-2"><18,5</p>
                    <p class="col-md-4">Per mažas svoris</p>
                    <p class="col-md-4">Padidėjusi rizika</p>
                </li>
                <li class="list-group-item d-flex row justify-content-between ">
                    <p class="col-md-2">18,5–24,9</p>
                    <p class="col-md-4">Normalus svoris</p>
                    <p class="col-md-4">Minimali rizika</p>
                </li>
                <li class="list-group-item d-flex row justify-content-between">
                    <p class="col-md-2">25–29,9</p>
                    <p class="col-md-4">Antsvoris</p>
                    <p class="col-md-4">Padidėjusi rizika</p>
                </li>
                <li class="list-group-item d-flex row justify-content-between">
                    <p class="col-md-2">30–34,9</p>
                    <p class="col-md-4">I laipsnio nutukimas</p>
                    <p class="col-md-4">Didelė rizika</p>
                </li>
                <li class="list-group-item d-flex row justify-content-between">
                    <p class="col-md-2">35–39,9</p>
                    <p class="col-md-4">II laipsnio nutukimas</p>
                    <p class="col-md-4">Labai didelė rizika</p>
                </li>
                <li class="list-group-item d-flex row justify-content-between">
                    <p class="col-lg-2">> 40</p>
                    <p class="col-lg-4">III laipsnio nutukimas</p>
                    <p class="col-lg-4">Itin didelė rizika</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="mt-3 d-flex col-lg-4 flex-column justify-content-center align-items-end">
    <form class="bg-light p-5 rounded shadow1 d-flex-column">
        <p class="name">KMI skaičiuoklė</p>
        <hr>
        <div class="d-flex row mb-3">
            <label for="ugis" class="col-2 col-lg-4 col-form-label">Ūgis: </label>
            <div class="col-10 col-lg-8 d-flex flex-row">
                <input type="number" name="ugis"  disabled  class="form-control rounded-pill text-end"  placeholder="<?=  $height ?>" min="0" id="ugis">
            </div>
        </div>
        <div class="row mb-3">
            <label for="svoris" class="col-2 col-lg-4 col-form-label">Svoris: </label>
            <div class="col-10 col-lg-8">
                <input type="number" name="svoris"  disabled class="form-control rounded-pill" placeholder="<?=  $weight ?>" id="svoris">
            </div>
        </div>
        <hr>
        <p>Jūsų KMI: <?= $result;?> </p>
        <a href="index.php" > Skaičiuoti kitą KMI</a>

    </form>

    </div>


</div>
</section>



</body>
</html>