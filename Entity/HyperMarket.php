<?php

require_once('SuperClass.php');

class HyperMarket extends BaseClass {

    const profit_initial = 100000;
    const case_lucratoare_initial = 6;
    const case_disponibile = 10;

    public function __construct($nume, $adresa, $numar_inregistrare) {

        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct($nume, $adresa, $numar_inregistrare);
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