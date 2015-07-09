<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/myStyle.css">
    </head>



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

    