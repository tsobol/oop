<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TEST</title>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="CSS/general.css">
        <link rel="stylesheet"  href="CSS/home_page.css">
        
    </head>
    <body>
        <header>
            <br>
            <div class="container-fluid">
                <div class="outer-menu">
                    <div class="inner-menu">
                        <ul class="menu" >
                            <li class="col-md-1 col-md-offset-2"><a href="#">Markets</a></li>
                            <li class="dropdown active col-md-2">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">MiniMarkets
                                    <span class="caret"></span>                          
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">miniMarket1</a></li>
                                    <li><a href="#">miniMarket2</a></li>
                                </ul>
                            </li>
                            <li class="col-md-1 "><a href="../index.php"><image src="../images/logo.png"/></a> </li>
                            <li class="col-md-1"><a href="#">SuperMarkets</a></li>
                            <li class="dropdown col-md-2">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">HyperMarkets
                                    <span class="caret"></span> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">market1</a></li>
                                    <li><a href="#">market2</a></li>
                                    <li><a href="#">market3</a></li>
                                </ul>
                            </li>               
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
        </header>

        <main>
            <br>
            <div class="jumbotron">
                <div class="container-fluid">
                    <h1 style="color:white; text-align: center; " >Manage your Markets</h1>
                </div>
            </div>
            <br>
            <br>
            <div class="arrow">
                <image id="arrow_image" src="../images/arrow.png"/>
            </div>
            <div class="container">
                <p id="message">WHAT CAN YOU DO</p>
                <div class="col-md-4 col-md-offset-1 image-swap" id="add-menu-picture"></div>
                <div class="col-md-4 col-md-offset-1 image-swap" id="register-menu-picture"></div>
                <div class="col-md-4 col-md-offset-1 image-swap" id="analyze-menu-picture"></div>
                <div class="col-md-4 col-md-offset-1 image-swap" id="compare-menu-picture"></div>
            </div>
        </main>


        <<footer>
            <hr>
            <div class="footer">
                <p>Created by: Tatiana Sobol </p>
            </div>
        </footer> 



    </body>
