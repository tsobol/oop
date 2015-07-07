<?php

include_once('OrderingInterface.php');

class HolidaysProfit implements OrderingInterface {
    const percentage = 0.05;

    const highPriority = 1;

    public function calculateProfit($market) {
        $profit = $market->getProfit() + $market->getCaseLucratoare * self::percentage * $market->getProfit();
        $market->setProfit($profit);
    }

    public function getOrder() {
        return self::highPriority;
    }

}
