<?php

include_once('OrderingInterface.php');

class AdditionalProfit implements OrderingInterface {

    private $percentage = 0.07;
     
    public static function getOrder() {
        return 2;
    }

    public function getPercentage() {
        return $this->percentage;
    }

   }
