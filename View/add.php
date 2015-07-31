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
        <script src="../JS/add-market.js"></script>
        <link rel="stylesheet/less" type="text/css" href="../CSS/insert.less" />
        <link rel="stylesheet/less" type="text/css" href="../CSS/general.less" />
        <link rel="stylesheet"  href="../CSS/styles.css">
         <script src="../less.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    </head>
    <body background="gray">
        <div id="wrapper">
            <div id="header">
                <?php require_once('menu-header.html') ?>
            </div>
            <div id="content">
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class ="col-md-6 col-xs-12">
                            <div class="panel panel-info panel-market">
                                <div class="panel-heading">Adaugă un market</div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-xs-4">Tip:</label>
                                            <select name="market_type" id="market_type">
                                                <option>MiniMarket</option>
                                                <option>Market</option>
                                                <option>SuperMarket</option>
                                                <option>HyperMarket</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4" for="name">Nume:</label>
                                            <input name="name" id="name" class="form-control " type="text" placeholder="Introduceti numele"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4" for="adresa">Adresa:</label>
                                            <input name="address" id="address" class="form-control " type="text" placeholder="Introduceti adresa">    
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4" for="numarInregistrare">Număr de înregistrare:</label>
                                            <input name="registration" id="registration" class="form-control " type="text" placeholder="Introduceti numarul de inregistrare">
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4">Numărul de case disponibile:</label>
                                            <input name="available_registers" id="available_registers" type="text" class="form-control col-md-6">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4">Numărul minim de case lucrătoare:</label>
                                            <input name="working_registers" id="working_registers" type="text" class="form-control col-md-6">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4">Profit minim garantat:</label>
                                            <input name="minimum_gain" id="minimum_gain" type="text" class="form-control col-md-6">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-xs-4">Dotări:</label>
                                            <select name="attachments" id="attachments">
                                                <option>Brutărie</option>
                                                <option> Cofetărie </option>
                                                <option>  Secție de vin</option>
                                            </select>                                
                                        </div>
                                        <hr>
                                        <button id="insert-market" type="button" class="btn">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div class="alert" id="result"></div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="panel panel-info panel-attachment">
                                <div class="panel-heading">Adaugă o dotare</div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="control-label col-xs-4 " for="name">Nume:</label>
                                            <input name="attachment_name" id="attachment_name" class="form-control " type="text">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-4 ">Profit:</label>
                                            <input name="attachment_gain" id="attachment_gain" class="form-control " type="text">                              
                                        </div>
                                        <hr>
                                        <button id="insert-attachment" type="button" class="btn">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div class="alert" id="result-attachment"></div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div id="footer">
            <?php require_once('footer.html') ?>
        </div>
    </body>
</html>
