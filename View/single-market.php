<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Markets | Fourchette</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../JS/add-gain.js"></script>
        <link rel="stylesheet"  href="../CSS/general.css">
        <link rel="stylesheet"  href="../CSS/insert-form.css">       
        <link rel="stylesheet"  href="../CSS/single-market.css">  
        <link rel="stylesheet"  href="../CSS/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>  
    </head>
    <body background="gray">
        <?php require_once('menu-header.html') ?>
        <br>
        <br>
        <div class="container" id="wall">

            <div class="market-image">
                <div id="market-name">Kaufland</div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    Information
                </div>
                <div class="panel-body inform-area form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-xs-8">
                            Name: 
                        </label>
                        <span class="col-xs-4 title">Kaufland</span>
                    </div>
                    <div  class="form-group">
                        <label class="control-label col-xs-8">
                            Minimum cash registers:
                        </label>
                        <span class="col-xs-4">3</span>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-xs-8">
                            Maximum cash registers:
                        </label>
                        <span class="col-xs-4">5</span>
                    </div>    
                    <div class="form-group">

                        <label class="control-label col-xs-4">
                            Attachments:
                        </label>
                        <span class="col-xs-8"> bakery, sweetshop, winery </span>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-8">
                            Initial gain: 
                        </label>
                        <span class="col-xs-4"> 10 000</span>
                    </div>
                </div>
            </div>


            <div id="pen">
                <span class="glyphicon glyphicon-edit"></span>
            </div>  
            <h1> Register your work</h1>

            <div class="row " style="margin-bottom: 40px;">
                <div class="col-md-4 col-sm-12">
                    <div class="panel insert-form">
                        <div class="panel-heading">Gain form</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-xs-6 "> Date:</label>
                                    <input type="date" id="date"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-6">Working cash registers:</label>
                                    <input id="cash-registers" class="form-control" type="number" min="3" max="5" placeholder="3"/>                                    
                                </div>
                                <div class="checkbox">
                                    <label><input  type="checkbox"><p> Holidays</p></label>
                                </div>
                                <hr>
                                <!-- Trigger the modal with a button -->
                                <button id="input-insert" type="button" class="btn btn-default">Save</button>
                            </form>
                        </div>
                    </div>
                    <div id="result" class="alert">

                    </div>
                </div>

                <div class="col-md-8 col-sm-12">            
                    <div class="panel panel-gain">
                        <div class="panel-heading">
                            Registered gain
                        </div>
                        <div class="panel-body">
                            <div class="info-table col-sm-12 hidden-xs">
                                <table class="table table-striped table-fixed">
                                    <thead>
                                        <tr>
                                            <th class=" col-sm-3 col-xs-6 ">Date</th>
                                            <th class="col-sm-3">Cash registers</th>
                                            <th class="col-sm-2">Holidays</th>
                                            <th class="col-sm-2">
                                                <a href="#" data-toggle="tooltip" title="Supllementary gain of attachments">Plus Profit 1</a>
                                            </th>
                                            <th class="col-sm-2">
                                                <a href="#" data-toggle="tooltip" title="The gain of additional cash registers">Plus Profit 2</a>
                                            </th>
                                            <th class="col-sm-2">
                                                <a href="#" data-toggle="tooltip" title="The gain of the holidays">Plus Profit 3</a>
                                            </th>
                                            <th class="col-sm-1">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-sm-3">13/07/2015</td>
                                            <td class="col-sm-3">3</td>
                                            <td class="col-sm-2">yes</td>
                                            <td class="col-sm-2">3000</td>
                                            <td class="col-sm-2">1000</td>
                                            <td class="col-sm-2">2000</td>
                                            <td class="col-sm-1">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">13/07/2015</td>
                                            <td class="col-sm-3">3</td>
                                            <td class="col-sm-2">yes</td>
                                            <td class="col-sm-2">3000</td>
                                            <td class="col-sm-2">1000</td>
                                            <td class="col-sm-2">2000</td>
                                            <td class="col-sm-1">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">13/07/2015</td>
                                            <td class="col-sm-3">3</td>
                                            <td class="col-sm-2">yes</td>
                                            <td class="col-sm-2">3000</td>
                                            <td class="col-sm-2">1000</td>
                                            <td class="col-sm-2">2000</td>
                                            <td class="col-sm-1">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">13/07/2015</td>
                                            <td class="col-sm-3">3</td>
                                            <td class="col-sm-2">yes</td>
                                            <td class="col-sm-2">3000</td>
                                            <td class="col-sm-2">1000</td>
                                            <td class="col-sm-2">2000</td>
                                            <td class="col-sm-1">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-3">13/07/2015</td>
                                            <td class="col-sm-3">3</td>
                                            <td class="col-sm-2">yes</td>
                                            <td class="col-sm-2">3000</td>
                                            <td class="col-sm-2">1000</td>
                                            <td class="col-sm-2">2000</td>
                                            <td class="col-sm-1">160000</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>

                            <div class="info-table visible-xs">
                                <table class="table table-striped table-fixed">
                                    <thead>

                                        <tr>
                                            <th class="col-xs-6 visible-xs">Date</th>
                                            <th class="col-xs-6 visible-xs">Total</th>
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td class="col-xs-6 visible-xs">13/07/2015</td>
                                            <td class="col-xs-6 visible-xs">160000</td>
                                        </tr>          

                                        <tr>
                                            <td class="col-xs-6 visible-xs">13/07/2015</td>
                                            <td class="col-xs-6 visible-xs">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-6 visible-xs">13/07/2015</td>
                                            <td class="col-xs-6 visible-xs">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-6 visible-xs">13/07/2015</td>
                                            <td class="col-xs-6 visible-xs">160000</td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-6 visible-xs">13/07/2015</td>
                                            <td class="col-xs-6 visible-xs">160000</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <p class="row"> <span class="col-xs-6">Date:</span>13/07/2015</p>
                        <p class="row"><span class="col-xs-6">Working cash registers:</span>3</p>
                        <p class="row"><span class="col-xs-6">Holidays:</span>yes</p>
                        <p class="row"><span class="col-xs-6"> 
                                <a href="#" data-toggle="tooltip" title="Supllementary gain of attachments">Plus Profit 1</a>
                            </span>1000</p>
                        <p class="row"> <span class="col-xs-6">
                                <a href="#" data-toggle="tooltip" title="The gain of additional cash registers">Plus Profit 2</a>
                            </span>2000</p>
                        <p class="row"> <span class="col-xs-6">
                                <a href="#" data-toggle="tooltip" title="The gain of the holidays">Plus Profit 3</a>
                            </span>3000</p>
                        <p class="row"> <span class="col-xs-6">Total profit:</span>160000</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
