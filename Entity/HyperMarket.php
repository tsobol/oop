<?php
require_once('BaseMarket.php');
/**
 * HyperMarket is a specialisation of BaseMarket. 
 *    
 * @author PENTALOG\tsobol
 */
class HyperMarket extends BaseMarket {
    /**
     * The amount of initial profit of the market.
     * Initial profit does not contain the plus profit of the attachments,
     * additional cash registers or Holidays 
     * @var integer
     */
    const profit_initial = 100000;
    
    /**
     * The initial number of the working cash registers
     * 
     * @var integer
     */
    const case_lucratoare_initial = 6;
    /**
     * The number of available cash registers. 
     * This value is greater than or equal to constante case_lucratoare_initial
     * @var integer
     */
    const case_disponibile = 10;
    /**
     * The required number of the attachments
     * @var integer
     */
    const attachmentsMandatoryNumber = 3;
    /**
     * @var string
     */
    const nume="hyper-market";
    /**
     * @var string
     */
    const adresa='str...';
    /**
     * @var integer
     */
    const numar_inregistrare=534675;
    
    public function __construct() {

        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct(self::nume,self::adresa,self::numar_inregistrare);
    }

  }
