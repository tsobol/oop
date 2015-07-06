<?php

require_once('Factory/MarketFactory.php');
require_once('Entity/Brutarie.php');
require_once('Entity/Cofetarie.php');
require_once('Entity/SectieVin.php');
require_once('Entity/SectieVin.php');

class MainClass {

    public static function main() {
   
/*  $object = MarketFactory::build("MiniMarket", 'name', 'address', 497467);
  $object->printData();
   echo "<b><br><br> case=2 </b>";
  $object->setCaseLucratoare(2);
  $object->printData();
      echo "<b><br><br> case=1 </b>";   
     $object->setCaseLucratoare(1);
  $object->printData();  */ 
        
    $market_types = array("MiniMarket", "Market", "SuperMarket", "HyperMarket");
        for ($i = 0; $i < 4; $i++) {
            echo "<p style='color:green'><br><br>-------$market_types[$i]-------</p>";
             echo "<b><br><br> setari initiale </b>";
            $object = MarketFactory::build("$market_types[$i]", 'name', 'address', 497467);
            $object->printData();


            $caseDisponibile = $object->getCaseDisponibile();
            echo "<b><br><br> Case Lucratoare=$caseDisponibile fara Dotari (+7% pentru fiecare casa in plus) </b>";

            $object->setCaseLucratoare($caseDisponibile);
            $object->printData();
            //+Dotari disponibile, numarul de case initial
            //Adauga dotari doar pentru SuperMarket si HyperMarket          
            
            if ($i > 1) {
                $object->setCaseLucratoare($object->getCaseLucratoareInitial());
                echo "<b><br><br> + Dotarile disponibile (+ profit pentru fiecare dotare)</b> ";
                $dotari = array(new Brutarie(), new Cofetarie(), new SectieVin());
                for ($j = 0; $j < 3; $j++) {
                    $object->addAttachments($dotari[$j]);
                    //Pentru SuperMarket adauga doar o dotare
                    if (get_class($object) == "SuperMarket") {
                        break;
                    }
                }
                $object->printData();
            }
            
             echo "<b><br><br> Case Lucratoare= $caseDisponibile + toate dotarile disponibile(+ 7% + profitul dotarii)</b>";
             $object->setCaseLucratoare($caseDisponibile);  
             $object->printData();
        }
    }
}

MainClass::main();

