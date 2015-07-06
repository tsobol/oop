<?php

include_once('OrderingInterface.php');

class HolidaysProfit implements OrderingInterface {

    private $percentage = 0.05;

    public static function getOrder() {
        return 1;
    }

    public function getPercentage() {
        return $this->percentage;
    }
}
