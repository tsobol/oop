<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="JS/home.js"></script>
        <link rel="stylesheet"  href="../CSS/general.css">
        <link rel="stylesheet"  href="CSS/home_page.css">
        <link rel="stylesheet"  href="../CSS/styles.css">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>TEST</title>

        <!-- Bootstrap -->


    </head>
    <body background="gray">
        <div id="wrapper">
            <div id="header">
                <?php require_once('View/menu-header.html') ?>
            </div>
            <div id="content">
                <main>
                    <br>
                    <div class="jumbotron">
                        <div id="site-title" class="container-fluid">
                            <h1 style="color:white; text-align: center; " >Manage your Markets</h1>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="arrow">
                        <image class="responsive" id="arrow_image" src="../images/arrow.png"/>
                    </div>
                    <div class="container">
                        <p id="message">WHAT YOU CAN DO</p>
                        <a style="display:block" href="View/add.php">
                            <div class="hidden-xs col-md-3 col-md-offset-1 col-sm-offset-3 lg-image image-swap" id="add-menu-picture"></div>
                        </a>
                        <div class="hidden-xs col-md-3 col-md-offset-1 col-sm-offset-3 lg-image image-swap" id="register-menu-picture"></div>
                        <div class=" hidden-xs col-md-3 col-md-offset-1 col-sm-offset-3 lg-image image-swap" id="analyze-menu-picture"></div>
                        <div class="hidden-xs col-md-3 col-md-offset-1 col-sm-offset-3 lg-image  image-swap" id="compare-menu-picture"></div>
                        <a style="display:block" href="View/add.php">
                            <div class="visible-xs   xs-image image-swap" id="xs-add-menu-picture"></div>
                        </a>
                        <div class="visible-xs  xs-image image-swap" id="xs-register-menu-picture"></div>
                        <div class="visible-xs xs-image image-swap" id="xs-analyze-menu-picture"></div>
                        <div class="visible-xs  xs-image image-swap" id="xs-compare-menu-picture"></div>


                    </div>
                </main>
            </div>
        </div>
        <div id="footer">
            <?php require_once('View/footer.html') ?>
        </div>
    </body>
