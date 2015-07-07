<?php

include_once('OrderingInterface.php');

class AdditionalCashRegistersProfit implements OrderingInterface {

    private $percentage = 0.07;

    const lowPriority = 2;


    public function getPercentage() {
        return $this->percentage;
    }

    public static function getOrder() {
        return self::lowPriority;
    }
}
