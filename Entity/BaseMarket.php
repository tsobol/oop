<?php

include_once('PlusProfit/AdditionalProfit.php');
include_once('PlusProfit/HolidaysProfit.php');
require_once('AttachmentManagement.php');

abstract class BaseMarket {

    protected $profit;
    protected $caseLucratoare;
    private static $isHoliday = false;
    protected $nume;
    protected $adresa;
    protected $numarInregistrare;
    protected $attachments = array();
    protected $plusProfit = array();

    const case_lucratoare_initial = null;
    const case_disponibile = null;
    const profit_initial = null;
    const attachmentsMandatoryNumber = null;

    /**
     * 
     * @param String $nume 
     * @param String $adresa
     * @param int $numarInregistrare
     */
    public function __construct($nume, $adresa, $numarInregistrare) {
        $this->nume = $nume;
        $this->adresa = $adresa;
        $this->numarInregistrare = $numarInregistrare;
        if (self::$isHoliday == true) {
            array_push($this->plusProfit, new HolidaysProfit());
        }
    }

    /**
     * 
     * @return type
     */
    public function getProfit() {
        return $this->profit;
    }

    /**
     * 
     * @param integer $profit
     */
    public function setProfit($profit) {
        $this->profit = $profit;
    }

    /**
     * 
     * @return type
     */
    public function getCaseLucratoare() {
        return $this->caseLucratoare;
    }

    public function getCaseDisponibile() {
        return static::case_disponibile;
    }

    public function getCaseLucratoareInitial() {
        return static::case_lucratoare_initial;
    }

    public function getAttachments() {
        return $this->attachments;
    }

    public function getAttachmentsMandatoryNumber() {
        return static::attachmentsMandatoryNumber;
    }

    public function pushAttachment($attachment) {
        array_push($this->attachments, $attachment);
    }

    /**
     * 
     * @param type $nr
     */
    public function setCaseLucratoare($nr) {
        if ($nr > static::case_disponibile || $nr < static::case_lucratoare_initial) {
            exit("\nNumar de case lucratoare invalid\n");
        }
        $this->caseLucratoare = $nr;
        $dif = $this->caseLucratoare - static::case_lucratoare_initial;
        if ($dif == 0) {
            $this->unsetAdditionalProfitObject();
        }
        if ($dif != 0) {
            $this->addAdditionalProfitObject();
        }
    }

    public function calculateProfit() {
        $this->profit = static::profit_initial;
        $this->addAttachmentsProfit();
        $this->calculatePlusProfit();
        return $this->profit;
    }

    /**
     * 
     */
    public function printData() {
        if (AttachmentManagement::validate($this)) {
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
     * Sort the plusProfit array from the highest priority (1) to the lower (other number)
     */
    public static function sortPlusProfit($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a->getOrder() < $b->getOrder()) ? -1 : 1;
    }

    /**
     * Add to the initial profit the attachments' profit
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
     * and the holidays
     */
    public function calculatePlusProfit() {
        usort($this->plusProfit, array("BaseMarket", "sortPlusProfit"));
        foreach ($this->plusProfit as $key => $object) {
            $object->calculateProfit($this);
        }
    }

    /**
     * Insert int the plusProfit array an additionalProfit object 
     */
    public function addAdditionalProfitObject() {
        $additionalProfit = new AdditionalProfit();
        if (!in_array($additionalProfit, $this->plusProfit)) {
            array_push($this->plusProfit, $additionalProfit);
        }
    }

    /**
     * Delete from the plusProfit array the additionalProfit object
     */
    public function unsetAdditionalProfitObject() {
        $additionalProfit = new AdditionalProfit();
        if (in_array($additionalProfit, $this->plusProfit)) {
            $key = array_search($additionalProfit, $this->plusProfit);
            unset($this->plusProfit[$key]);
        }
    }

}
