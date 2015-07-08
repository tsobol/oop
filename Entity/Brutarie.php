<?php

require_once('BaseAttachment.php');

/**
 * Brutarie is an attachment for a market
 * 
 * @author PENTALOG\tsobol
 */

class Brutarie extends BaseAttachment {

    /**
     * The supplimentary profit to add to the initial profit 
     * if the current attachment is attached to the market
     * 
     * @var float
     */
    const plusProfit = 20000;
    /**
    * Short description of the attachment
    * 
    * @var string
    */
    const label = 'brutarie';

}
