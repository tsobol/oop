<?php

/**
 * @author PENTALOG\tsobol
 */
require_once('BaseMarket.php');

/**
 * A specialisation of the BaseMarket
 */
class SuperMarket extends BaseMarket {

    /**
     * The initial number of the working cash registers
     * 
     * @var integer
     */
    const case_lucratoare_initial = 3;

    /**
     * The number of available cash registers. 
     * This value is greater than or equal to constante case_lucratoare_initial
     * @var integer
     */
    const case_disponibile = 5;

    /**
     * The amount of initial profit of the market.
     * Initial profit does not contain the plus profit of the attachments,
     * additional cash registers or Holidays 
     * @var integer
     */
    const profit_initial = 60000;

    /**
     * The required number of the attachments
     * @var integer
     */
    const attachmentsMandatoryNumber = 1;
    /**
     * @var string 
     */
    const nume = "super-market";
    /**
     * @var string
     */
    const adresa = 'str...';
    /**
     * @var integer
     */
    const numar_inregistrare = 934675;

    public function __construct() {
        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct(self::nume, self::adresa, self::numar_inregistrare);
    }

}
