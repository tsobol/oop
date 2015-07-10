<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TEST</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="page-header ">
            <h1 class="text-center"> Markets <small> some text here</small>
            </h1>
        </div>
        <div class="container">
            <div class="well well-sm text-center" >Formular: 07/07/2015</div>
            <div class="well well-lg">


                <?php
                require_once('Factory/MarketFactory.php');
                require_once('Entity/Brutarie.php');
                require_once('Entity/Cofetarie.php');
                require_once('Entity/SectieVin.php');
                require_once('Entity/SectieVin.php');

                $object = MarketFactory::build("MiniMarket");
                $object->setCaseLucratoare(2);
                ?>
                <div class="row">
                    <div class="col-md-4">Nume:</div>
                    <div class="col-md-8">MiniMarket</div>
                </div>
                <div class="row">
                    <div class="col-md-4"><abbr>Adresa:</div>
                    <div class="col-md-8">str. Dacia 2</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Numar de inregistrare:</div>
                    <div class="col-md-8">235673</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Case lucratoare:</div>
                    <div class="col-md-3"> 2 </div>
                    <div class="col-md-2">din <code>2</code> disponibile </div>
                    <div class="col-md-3">suplimentare:<code> 1 </code></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">Profit initial:</div>
                    <div class="col-md-8">10000</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Profit pentru case suplimentare:</div>
                    <div class="col-md-8">3400</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Profit de sarbatori:</div>
                    <div class="col-md-8">3400</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">Profit total:</div>
                    <div class="col-md-8">16800</div>
                </div>

            </div>
        </div>
        
    </body>
</html>

