<?php

include_once('OrderingInterface.php');

class HolidaysProfit implements OrderingInterface {

    private $percentage = 0.05;
    const highPriority=1;

    public static function getOrder() {
        return self::highPriority;
    }

    public function getPercentage() {
        return $this->percentage;
    }
}
