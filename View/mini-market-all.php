<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Minimarkets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="../CSS/general.css">
        <link rel="stylesheet"  href="../CSS/mini-market-all.css">      
        <script src="/highcharts/js/jquery.min.js"></script>
        <script src="/highcharts/js/highcharts.js"></script>
        <link rel="stylesheet"  href="../CSS/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <script>
            $(function () {
                $('#top').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Top markets'
                    },
                    xAxis: {
                        categories: ['Minimarket', 'Market', 'Supermarket', 'Hypermarket']
                    },
                    yAxis: {
                        title: {
                            text: 'Profit'
                        }
                    },
                    series: [{
                            data: [20000, 15000, 12000, 11000]
                        }]
                });
            });
        </script>
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
                    <div id="search-bar">
                        <form  role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search a market">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default panel-image-gallery">
                                <div class="col-md-6 col-sm-6 col-xs-11 single-image">
                                    <a href="../View/single-market.php" class="thumbnail">
                                        <figure>
                                            <img src="../images/store1.jpg" alt="Kaufland" style="width:200px;height:200px">
                                            <figcaption><p >Kaufland</p></figcaption>
                                        </figure> 

                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 single-image">
                                    <a href="../images/store2.jpeg" class="thumbnail">
                                        <figure>
                                            <img src="../images/store2.jpeg" alt="Nr.1" style="width:200px;height:200px;">
                                            <figcaption><p>Nr.1</p></figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 single-image">
                                    <a href="../images/store3.jpeg" class="thumbnail">
                                        <figure>
                                            <img src="../images/store3.jpeg" alt="Nr.1" style="width:200px;height:200px;">
                                            <figcaption><p>Thimb</p></figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 single-image">
                                    <a href="../images/store4.jpg" class="thumbnail">
                                        <figure>
                                            <img src="../images/store4.jpg" alt="Nr.1" style="width:200px;height:200px;">
                                            <figcaption><p>VellMart</p></figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 single-image">
                                    <a href="../images/store5.jpeg" class="thumbnail">
                                        <figure>
                                            <img src="../images/store5.jpg" alt="Nr.1" style="width:200px;height:200px;">
                                            <figcaption><p>Thimb</p></figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 single-image">
                                    <a href="../images/store5.jpg" class="thumbnail">
                                        <figure>
                                            <img src="../images/store6.jpg" alt="Nr.1" style="width:200px;height:200px;">
                                            <figcaption><p>VellMart</p></figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 top-chart clearfix">
                            <div class="panel panel-default panel-image-gallery">
                                <div><p> Top markets</p></div>
                                <div id="top"></div>
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
        </div>
    </body>
</html>
