<?php

/**
 * SectieVin is an attachment for a market
 *
 * @author PENTALOG\tsobol
 */
require_once('BaseAttachment.php');

class SectieVin extends BaseAttachment {

    /**
     * The supplimentary profit to add to the initial profit 
     * if the current attachment is attached to the market
     * 
     * @var float
     */
    const plusProfit = 10000;

    /**
     * Short description of the attachment
     * 
     * @var string
     */
    const label = "sectie de vin";

}
