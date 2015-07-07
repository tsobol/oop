<?php

require_once('BaseMarket.php');

class HyperMarket extends BaseMarket{

    const profit_initial = 100000;
    const case_lucratoare_initial = 6;
    const case_disponibile = 10;

    public function __construct() {

        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct('hyper-market','str...',875600);
    }

    public function addAttachments($object) {
        if ($this->attachments == null) {
            array_push($this->attachments, $object);
        } elseif (in_array($object, $this->attachments)) {
            echo "\nDotarea deja exista pentru acest magazin\n";
        } else {
            array_push($this->attachments, $object);
        }
    }

    public function removeAnAttachments($object) {
        $key = array_search($object, $this->attachments);
        unset($this->attachments[$key]);
    }
}