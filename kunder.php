<?php
$title = "Til Kunder";

include("./templates/header.php"); ?>


<div class="row ">
    <div class="col-4">

    </div>    
    <div class="col-4">
        <p>Kære kunde, <br>
        Indtast dit ordrenr. for at se status på ordren.</p>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control" type="search" value="52341">
            <button class="btn btn-success my-2" type="button">Søg</button>
        </form>
    </div>
    <div class="col-4">

    </div>
</div>
<div class="row">
    <div class="col">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Ordrenr.</th>
                <th scope="col">Oprettelsesdato</th>
                <th scope="col">Køber</th>
                <th scope="col">Tlf.</th>
                <th scope="col">Email</th>
                <th scope="col">Ordretype</th>
                <th scope="col">Pris</th>
                <th scope="col">Status</th>
                <th scope="col">Opdateringsdato</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">52341</th>
                <td>30-11-2021</td>
                <td>Johnny</td>
                <td>88888881</td>
                <td>Johnny@leasy.dk</td>
                <td>Reparation</td>
                <td>400 kr.</td>
                <td>Klar til afhentning</td>
                <td>05-12-2021</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
        

<?php include("./templates/footer.php");?>