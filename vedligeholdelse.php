<?php
$title = "Til Vedligeholdere";

include("./templates/header.php"); ?>

<form class="container">
    <div class="row">
        <div class="col border mt-5">
            <div class="form-group">
                <label for="amountM3">Mængde</label>
                <input type="number" class="form-control" id="amountM3" placeholder="Indtast mængden i kubikmeter">
            </div>
            <div class="form-group">
                <label for="collectionDate">Dato for afhentning</label>
                <input type="text" class="form-control" id="collectionDate" placeholder="Indtast datoen hvorpå afhentningen skal ske">
            </div>
            <div class="form-group">
                <label for="collectionAddress">Adresse</label>
                <input type="email" class="form-control" id="collectionAddress" placeholder="Indtast adresse hvor afhentning skal finde sted">
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <button type="submit" class="btn btn-block btn-success">Bestil afhentning</button>
        </div>
    </div>
</form>



<?php include("./templates/footer.php");?>