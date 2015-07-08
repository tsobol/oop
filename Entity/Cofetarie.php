<?php

require_once('BaseAttachment.php');

/**
 * Cofetarie is an attachment for a market
 *
 * @author PENTALOG\tsobol
 */
class Cofetarie extends BaseAttachment {

    /**
     * The supplimentary profit to add to the initial profit 
     * if the current attachment is attached to the market
     * 
     * @var float
     */
    const plusProfit = 30000;

    /**
     * Short description of the attachment
     * 
     * @var string
     */
    const label = 'cofetarie';

}
