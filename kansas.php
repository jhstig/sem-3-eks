<?php
$title = "Til Kansas";

include("./templates/header.php"); ?>

<div class="container">
    <div class="row my-3">
    <div class="col">
            Klik på et modelnummer for at ændre i detaljer
        </div>
        <div class="col text-bottom">
            <button type="button" class="btn btn-block btn-info">Tilføj nyt modelnummer</button>
        </div>
        
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Modelnr.</th>
                        <th scope="col">Navn</th>
                        <th scope="col">Farver</th>
                        <th scope="col">Stoftyper</th>
                        <th scope="col">Størrelser</th>
                        <th scope="col">Reservedelsnumre</th>
                        <th scope="col">Redigering</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">127348-540</th>
                        <td>GREEN CRAFTSMAN JACKET 4538</td>
                        <td>Grå/Sort <br> Grå/Hvid</td>
                        <td>Dope dye/Piece dye</td>
                        <td>XS-XXL</td>
                        <td>127348-540-1 <br> 127348-540-2 <br> 127348-540-3 <br> 127348-540-4 <br> 127348-540-5 <br> 127348-540-6</td>
                        <td><button type="button" class="btn btn-warning">Rediger</button></td>
                    </tr>
                    <tr>
                        <th scope="row">127348-535</th>
                        <td>GJACKET 4555 STFP</td>
                        <td>Grå/Sort <br> Grå/Hvid</td>
                        <td>Dope dye/Piece dye</td>
                        <td>S-XL</td>
                        <td>127348-535-1 <br> 127348-535-2 <br> 127348-535-3 <br> 127348-535-4 <br> 127348-535-5</td>
                        <td><button type="button" class="btn btn-warning">Rediger</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include("./templates/footer.php");?>