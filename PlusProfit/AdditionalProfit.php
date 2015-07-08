<?php

/**
 * Description of AdditionalProfit
 *
 * @author PENTALOG\tsobol
 */
require_once('OrderingInterface.php');

class AdditionalProfit implements OrderingInterface {

    /**
     * 
     * The supplement to add to the profit
     */
    const percentage = 0.07;

    /**
     * The priority in the calculation of the additional profit 
     */
    const priority = 2;

    /**
     * 
     * @return number
     */
    public function getOrder() {
        return self::priority;
    }

    /**
     * Calculates the additional profit due to the supplimentary number of cash registers
     *    
     * @param type BaseMarket
     */
    public function calculateProfit($market) {
        $dif = $market->getCaseLucratoare() - $market->getCaseLucratoareInitial(); 
        $profit = $market->getProfit() + $dif * self::percentage * $market->getProfit();
        $market->setProfit($profit);
    }

}
