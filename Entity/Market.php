<?php

require_once('BaseMarket.php');

/**
 * A specialisation for the BaseMarket
 */
class Market extends BaseMarket {

    /**
     * The initial number of the working cash registers
     * 
     * @var integer
     */
    const case_lucratoare_initial = 2;

    /**
     * The number of available cash registers. 
     * This value is greater than or equal to constante case_lucratoare_initial
     * @var integer
     */
    const case_disponibile = 3;

    /**
     * The amount of initial profit of the market.
     * Initial profit does not contain the plus profit of the attachments,
     * additional cash registers or Holidays 
     * @var integer
     */
    const profit_initial = 40000;

    /**
     * The required number of the attachments
     * @var integer
     */
    const attachmentsMandatoryNumber = 0;
    /**
     * @var string
     */
    const nume = "market";
    /**
     * @var string
     */
    const adresa = 'str...';
    /**
     * @var integer
     */
    const numar_inregistrare = 534676;

    public function __construct() {
        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct(self::nume, self::adresa, self::numar_inregistrare);
    }

}
