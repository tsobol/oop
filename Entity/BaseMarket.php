<?php

/**
 * @author PENTALOG\tsobol
 */
include_once('PlusProfit/AdditionalProfit.php');
include_once('PlusProfit/HolidaysProfit.php');
require_once('AttachmentManagement.php');

/**
 * The base class for the market type classes
 * 
 * @abstract
 *  
 */
abstract class BaseMarket {

    /**
     * The profit of the market
     * 
     * @var float
     */
    protected $profit;

    /**
     * The number of thw working cash registers
     * 
     * @var integer
     */
    protected $caseLucratoare;

    /**
     * Identifies if it is holidays time
     * @var boolean 
     */
    private static $isHoliday = false;

    /**
     * The name of the market
     * @var string
     */
    protected $nume;

    /**
     * The address of the market
     * 
     * @var string 
     */
    protected $adresa;

    /**
     * The registration number of the market
     * 
     * @var integer
     */
    protected $numarInregistrare;

    /**
     * It contains the attachments of the market
     * 
     * @var array of BaseAttachment objects
     */
    protected $attachments = array();

    /**
     * The array can contain at most two objects: 
     * one instance of the HolidaysProfit class 
     * and one instance of the AdditionalProfit class 
     * 
     * @var array 
     */
    protected $plusProfit = array();

    /**
     * The initial number of the working cash registers
     * 
     * @var integer
     */
    const case_lucratoare_initial = null;

    /**
     * The number of available cash registers. 
     * This value is greater than or equal to constante case_lucratoare_initial
     * @var integer
     */
    const case_disponibile = null;

    /**
     * The amount of initial profit of the market.
     * Initial profit does not contain the plus profit of the attachments,
     * additional cash registers or Holidays 
     * @var integer
     */
    const profit_initial = null;

    /**
     * The required number of the attachments
     * @var integer
     */
    const attachmentsMandatoryNumber = null;

    /**
     * 
     * @param string $nume 
     * @param string $adresa
     * @param integer $numarInregistrare
     */
    public function __construct($nume, $adresa, $numarInregistrare) {
        $this->nume = $nume;
        $this->adresa = $adresa;
        $this->numarInregistrare = $numarInregistrare;
        if (self::$isHoliday == true) {
            array_push($this->plusProfit, new HolidaysProfit(static::case_lucratoare_initial));
        }
    }

    /**
     *  
     * @return float
     */
    public function getProfit() {
        return $this->profit;
    }

    /**
     * 
     * @param integer 
     */
    public function setProfit($profit) {
        $this->profit = $profit;
    }

    /**
     * 
     * @return integer
     */
    public function getCaseLucratoare() {
        return $this->caseLucratoare;
    }

    /**
     * 
     * @return integer
     */
    public function getCaseDisponibile() {
        return static::case_disponibile;
    }

    /**
     * 
     * @return integer
     */
    public function getCaseLucratoareInitial() {
        return static::case_lucratoare_initial;
    }

    /**
     * 
     * @return array
     */
    public function getAttachments() {
        return $this->attachments;
    }

    /**
     * 
     */

    /**
     * Add an attachment to the market 
     * 
     * @param BaseAttachment $attachment
     */
    public function addAttachment(BaseAttachment $attachment) {
        if ($this->validateAttachment($attachment)) {
            array_push($this->attachments, $attachment);
        } else {
            exit("<br>Can not add more attachments or this attachment already is added<br>");
        }
    }

    /**
     * 
     * @param BaseAttachment $attachment
     * @return boolean 
     */
    public function validateAttachment($attachment) {
        if (count($this->attachments) < static::attachmentsMandatoryNumber) {
            if (!in_array($attachment, $this->attachments)) {
                return true;
            }
        }
        return false;
    }

    /**
     * 
     * @param integer $nr
     */
    public function setCaseLucratoare($nr) {
        if ($this->validateNrCaseLucratoare($nr)) {
            $this->caseLucratoare = $nr;
        } else {
            exit('<br>Numar de case lucratoare invalid');
        }

        $this->updatePlusProfitArray();
    }

    /**
     * 
     * @param integer $nr
     * @return boolean
     */
    public function validateNrCaseLucratoare($nr) {
        if ($nr > static::case_disponibile || $nr < static::case_lucratoare_initial) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * 
     * @return integer
     */
    public function getCaseLucratoareSuplimentare() {
        return $this->caseLucratoare - static::case_lucratoare_initial;
    }

    public function updatePlusProfitArray() {

        $this->updateHolidayProfitObject();
        $this->updateAdditionalProfitObject();
    }

    /**
     * Update plusProfit array by adding or eliminate an HolifayProfit object
     */
    public function updateHolidayProfitObject() {
       $this->unsetAProfitObject("HolidayProfit");
        if (self::$isHoliday == true) {            
            $this->addHolidayProfitObject($this->getCaseLucratoare());
        }
    }

    /**
     * Update plusProfit array by adding or eliminate an AdditionalProfit object
     */
    public function updateAdditionalProfitObject() {
        $caseSuplimentare = $this->getCaseLucratoareSuplimentare();
        $this->unsetAProfitObject("AdditionalProfit");
        if ($caseSuplimentare != 0) {
            $this->addAdditionalProfitObject($caseSuplimentare);
        }
    }

    /**
     * Calculate the total amount of the profit by adding to the initial
     * profit the supplimentary profit due to the attachments,
     * additional cash registers an Holidays 
     * 
     * @return float
     */
    public function calculateProfit() {
        $this->profit = static::profit_initial;
        $this->addAttachmentsProfit();
        $this->calculatePlusProfit();
        return $this->profit;
    }

    /**
     * Display the information of the market 
     * if the required number of attachments is satisfied 
     */
    public function printData() {
        if (AttachmentManagement::validate($this->attachments, static::attachmentsMandatoryNumber)) {
            echo "<br>Tip Market : " . get_class($this);
            echo "<br>Numar case lucratoare: " . $this->caseLucratoare;
            echo "<br>Numar case disponibile: " . static::case_disponibile;
            echo "<br>Dotari: ";
            if ($this->attachments != null) {
                foreach ($this->attachments as $key => $value) {
                    echo $value . ", ";
                }
            }
            echo "<br>Profit initial: " . static::profit_initial;
            echo "<br>Profit Final: " . $this->calculateProfit();
        } else {
            echo "You need to add some attachments";
        }
    }

    /**
     * @static
     * 
     * Sort the array attribute plusProfit from the highest priority (1) 
     * to the lower priority (other number)
     */
    public static function sortPlusProfit($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a->getOrder() < $b->getOrder()) ? -1 : 1;
    }

    /**
     * Add to the initial profit the plus profit of the attachments
     */
    public function addAttachmentsProfit() {
        if ($this->attachments != null || count($this->attachments) != 0) {
            foreach ($this->attachments as $key => $value) {
                $this->profit = $this->profit + $value->getPlusProfit();
            }
        }
    }

    /**
     * Calculate the additional profit due to the supplimentary cash registers
     * and the holidays. This information is mantained in pluProfit array.
     */
    public function calculatePlusProfit() {
        usort($this->plusProfit, array("BaseMarket", "sortPlusProfit"));
        foreach ($this->plusProfit as $key => $object) {
            $newProfit = $object->calculateProfit($this->getProfit());
            $this->profit = $newProfit;
        }
    }

    /**
     * Insert in the plusProfit array an AdditionalProfit object 
     */
    public function addAdditionalProfitObject($caseSuplimentare) {
        $additionalProfitObject = new AdditionalProfit($caseSuplimentare);
        array_push($this->plusProfit, $additionalProfitObject);
    }
    /**
     * Insert in the plusProfit array an HolidayProfit object 
     */

    public function addHolidayProfitObject($totalCase) {
        $holidayProfitObject = new HolidaysProfit($totalCase);
        array_push($this->plusProfit, $holidayProfitObject);
    }

    /**
     * Eliminate form plusProfit array a profit object
     * 
     * @param string $profitType
     */
    public function unsetAProfitObject($profitType) {
        foreach ($this->plusProfit as $key => $object) {
            if (get_class($object) === $profitType) {
                unset($this->plusProfit[$key]);
            }
        }
    }

}
