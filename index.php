<?php
$title = "Til Forhandlere";

include("./templates/header.php");
?>

<div class="container">
    <div class="row mt-3 ">
        <div class="col"></div>
        <div class="col-3">
            <button id="btnNewOrder" type="button" class="btn btn-info" >Opret ny ordre</button>
        </div>
        <div class="col-3">
            <button id="btnOldOrders" type="button" class="btn btn-info" style="background:grey;border:none;">Se ordreoversigt</button>
        </div>
        <div class="col"></div>
    </div>
</div>



<div id="newOrder" style="">
    <form class="container">
        <div class="row mt-3 justify-content-between">
            <div class="col">
                Ordrenr. 52131
            </div>
            <div class="col text-right">
                Oprettelsesdato: 01-12-2021
            </div>
        </div>
        <div class="row mt-2" style="">
            <div class="col-5 border scrollable" style="height:400px;">
                Scannede produkter
                <?php for($i=0;$i<4 ;$i++){ ?>
                    <div class="row">
                        <div class="col border m-2">
                            ID: 432 <br>
                            Modelnr: 127348-540 <br>
                            Navn: GREEN CRAFTSMAN JACKET 4538 <br>
                            Farve: Grå/Sort <br>
                            Stoftype: Dope dye / Piece dye <br>
                            Størrelse: XL <br>
                            Salgsdato: 01-07-2019 <br>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col border" style="min-height:300px;">
                        <div class="form-group">
                            <label for="buyerNameReg">Købers navn</label>
                            <input type="text" class="form-control" id="buyerNameReg" aria-describedby="buyerNameRegHelp" placeholder="Navn på kunde">
                            <small id="buyerNameRegHelp" class="form-text text-muted">Skriv navn eller virksomhedsnavn for kunden.</small>
                        </div>
                        <div class="form-group">
                            <label for="buyerPhoneReg">Købers tlf.nr</label>
                            <input type="text" class="form-control" id="buyerPhoneReg" placeholder="Kundes tlf.">
                        </div>
                        <div class="form-group">
                            <label for="buyerEmailReg">Købers email</label>
                            <input type="email" class="form-control" id="buyerEmailReg" placeholder="Kundes email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col border" style="min-height:100px;">
                        Vælg behandling
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="treatment1">
                            <label class="form-check-label" for="treatment1">
                                Vask
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="treatment2">
                            <label class="form-check-label" for="treatment2">
                                Mindre skade
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="treatment3">
                            <label class="form-check-label" for="treatment3">
                                Reparation
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-block btn-success">Registrer</button>
            </div>
        </div>
    </form>
</div>


<div id="oldOrders" style="display:none;">
    <div class="container ">
        <div class="row my-3">
            <div class="col"></div>
            <div class="col">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" placeholder="Søg efter ordrenr." aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="button">Søg</button>
                </form>
            </div>
            <div class="col"></div>
            
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
                        <th scope="row">52130</th>
                        <td>30-11-2021</td>
                        <td>Johnny</td>
                        <td>88888881</td>
                        <td>Johnny@leasy.dk</td>
                        <td>Reparation</td>
                        <td>800 kr.</td>
                        <td>Til vedligeholdelse</td>
                        <td>05-12-2021</td>
                    </tr>
                    <tr>
                        <th scope="row">52131</th>
                        <td>01-12-2021</td>
                        <td>Peter</td>
                        <td>88888888</td>
                        <td>Peter@leasy.dk</td>
                        <td>Reparation</td>
                        <td>400 kr.</td>
                        <td>Til vedligeholdelse</td>
                        <td>05-12-2021</td>
                    </tr>
                    <tr>
                        <th scope="row">52131</th>
                        <td>01-12-2021</td>
                        <td>Peter</td>
                        <td>88888888</td>
                        <td>Peter@leasy.dk</td>
                        <td>Reparation</td>
                        <td>400 kr.</td>
                        <td>Til vedligeholdelse</td>
                        <td>05-12-2021</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>







<?php include("./templates/footer.php");?>
<script>
//buttons
const newOrdersBtn = document.getElementById("btnNewOrder");
const oldOrdersBtn = document.getElementById("btnOldOrders");

// functions
newOrdersBtn.onclick = function() {
    document.getElementById('newOrder').style.display='block';
    document.getElementById('oldOrders').style.display='none';
    newOrdersBtn.style.background='';
    oldOrdersBtn.style.background='grey';
    oldOrdersBtn.style.border='none';
};
oldOrdersBtn.onclick = function() {
    document.getElementById('newOrder').style.display='none';
    document.getElementById('oldOrders').style.display='block';
    newOrdersBtn.style.background='grey';
    newOrdersBtn.style.border='none';
    oldOrdersBtn.style.background='';
};

</script>