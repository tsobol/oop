<?php

require_once('OrderingInterface.php');

/**
 * Description of BaseProfit
 *
 * @author PENTALOG\tsobol
 */
class BaseProfit implements OrderingInterface {

    /**
     * The supplement to add to the profit
     */
    const percentage = null;

    /**
     * The priority in the calculation of the additional profit 
     */
    const priority = null;

    /**
     * An indicator used for calculation of the supplimentary profit
     * 
     * @var integer
     */
    protected $count;

    /**
     * 
     * @return number
     */
    public function getOrder() {
        return static::priority;
    }

    public function setCount($count) {
        $this->count = $count;
    }

    /**
     *  Calculates the additional profit based on the given profit 
     * 
     * @param type $profit
     * @param type $count
     * @return type
     */
    public function calculateProfit($profit) {

        $new_profit = $profit + $this->count * static::percentage * $profit;
        return $new_profit;
    }

}
