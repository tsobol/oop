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
        <link rel="stylesheet" type="text/css" href="CSS/myStyle.css">
        <style>
            .menu{
                display    : table;
                background : lightblue;
                width      : 320px;
                text-align : center;
            }
            .btn{
                display    : table-cell;
                width      : 33%;
                background : #fff;
                border     : 1px solid #666;
                padding    : 5px 10px;
            }
        </style>


    </head>
    <body>

        <div class="menu">
            <a href="#" id="btn1" class="btn">Btn1</a>
            <a href="#" id="btn2" class="btn">Btn2</a>
            <a href="#" id="btn3" class="btn">Btn3</a>
        </div>

        <?php
        require_once('Factory/MarketFactory.php');
        require_once('Entity/Brutarie.php');
        require_once('Entity/Cofetarie.php');
        require_once('Entity/SectieVin.php');
        require_once('Entity/SectieVin.php');

        class MainClass {

            public static function main() {
                $market_types = array("MiniMarket", "Market", "SuperMarket", "HyperMarket");
                for ($i = 0; $i < 4; $i++) {
                    echo "<p class='title'>-------$market_types[$i]-------</p>";
                    echo "<p class='solid'> setari initiale </p>";
                    $object = MarketFactory::build("$market_types[$i]");
                    $object->printData();


                    $caseDisponibile = $object->getCaseDisponibile();
                    echo "<p class='solid'> Case Lucratoare=$caseDisponibile fara Dotari (+7% pentru fiecare casa in plus) </p>";

                    $object->setCaseLucratoare($caseDisponibile);
                    $object->printData();
                    //+Dotari disponibile, numarul de case initial
                    //Adauga dotari doar pentru SuperMarket si HyperMarket

                    if ($i > 1) {
                        $object->setCaseLucratoare($object->getCaseLucratoareInitial());
                        echo "<p class='solid'> + Dotarile disponibile (+ profit pentru fiecare dotare)</p> ";
                        $dotari = array(new Brutarie(), new Cofetarie(), new SectieVin());
                        for ($j = 0; $j < 3; $j++) {
                            $object->addAttachment($dotari[$j]);
                            //Pentru SuperMarket adauga doar o dotare
                            if (get_class($object) == "SuperMarket") {
                                break;
                            }
                        }
                        $object->printData();
                    }

                    echo "<p class='solid'> Case Lucratoare= $caseDisponibile + toate dotarile disponibile(+ 7% + profitul dotarii)</p>";
                    $object->setCaseLucratoare($caseDisponibile);
                    $object->printData();
                }
            }

        }

        MainClass::main();
        ?>
    </body>
