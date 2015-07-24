<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulare</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="../CSS/general.css">
        <link rel="stylesheet"  href="../CSS/insert.css">       
    </head>
    <body background="gray">
        <?php require_once('menu-header.html') ?>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel panel-info panel-market">
                        <div class="panel-heading">Adaugă un market</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Tip:</label>
                                    <select>
                                        <option>MiniMarket</option>
                                        <option>Market</option>
                                        <option>SuperMarket</option>
                                        <option>HyperMarket</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12" for="name">Nume:</label>
                                    <input class="form-control col-md-6" type="text" placeholder="Introduceti numele">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12" for="adresa">Adresa:</label>
                                    <input class="form-control col-md-6" type="text" placeholder="Introduceti adresa">    
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12" for="numarInregistrare">Număr de înregistrare:</label>
                                    <input class="form-control col-md-6" type="text" placeholder="Introduceti numarul de inregistrare">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12">Numărul de case disponibile:</label>
                                    <input  type="text" class="form-control col-md-6">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12">Numărul minim de case lucrătoare:</label>
                                    <input type="text" class="form-control col-md-6">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12">Profit minim garantat:</label>
                                    <input type="text" class="form-control col-md-6">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12">Dotări:</label>
                                    <select>
                                        <option>Brutărie</option>
                                        <option> Cofetărie </option>
                                        <option>  Secție de vin</option>
                                    </select>                                
                                </div>
                                <hr>
                                <input id="input-insert" type="submit" value="Salvează" class="form-control btn-succes"> 
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-info panel-attachment">
                        <div class="panel-heading">Adaugă o dotare</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12" for="name">Nume:</label>
                                    <input class="form-control col-md-6" type="text">
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-4 col-xs-12">Profit:</label>
                                    <input class="form-control col-md-6" type="text">                              
                                </div>
                                <hr>
                                <input id="input-insert" type="submit" value="Salvează" class="form-control btn-succes"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <?php require_once('footer.html') ?>
    </body>
</html>
