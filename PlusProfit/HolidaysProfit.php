<?php

/**
 * Description of AdditionalProfit
 *
 * @author PENTALOG\tsobol
 */
require_once('BaseProfit.php');

class HolidaysProfit extends BaseProfit {

    /**
     * The supplement to add to the profit
     */
    const percentage = 0.05;

    /**
     * The priority in the calculation of the additional profit 
     */
    const priority = 1;
    
    /**
     * 
     * @param integer $count (Total number of the working cash registers)
     */
    public function __construct($count=0) {
        $this->count=$count;
    }
}
