<?php

/**
 * Description of AdditionalProfit
 *
 * @author PENTALOG\tsobol
 */
require_once('BaseProfit.php');

class AdditionalProfit extends BaseProfit {

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
     * @param integer $count (Number of the additional cash registers)
     */
    public function __construct($count=0) {
        $this->count = $count;
    }

}
