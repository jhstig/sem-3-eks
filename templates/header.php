<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark kansasRed">
        <a class="navbar-brand" href="./index.php">KANSAS Vedligeholdelse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarId" aria-controls="navBarId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navBarId">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($title=="Til Forhandlere" or $title=="Ordreoversigt"){echo 'active';} ?>">
                    <a class="nav-link" href="./index.php">Til Forhandlere</a>
                </li>
                <li class="nav-item <?php if($title=="Til Vedligeholdere"){echo "active";} ?>">
                    <a class="nav-link" href="./vedligeholdelse.php">Til Vedligeholdere</a>
                </li>
                <li class="nav-item <?php if($title=="Til Kansas"){echo "active";} ?>">
                    <a class="nav-link" href="./kansas.php">Til Kansas</a>
                </li>
                <li class="nav-item <?php if($title=="Til Kunder"){echo "active";} ?>">
                    <a class="nav-link" href="./kunder.php">Til Kunder</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row" style="min-height:600px">
            <div class="col">




