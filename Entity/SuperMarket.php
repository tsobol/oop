<?php

require_once('BaseMarket.php');

class SuperMarket extends BaseMarket {

    const case_lucratoare_initial = 3;
    const case_disponibile = 5;
    const profit_initial = 60000;
    const attachmentsMandatoryNumber = 1;

    public function __construct() {
        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct('super-market', 'str. Titulescu', 765388);
    }

    public function addAttachments($object) {
        if ($this->attachments == null) {
            $this->attachments = array($object);
        } else {
            exit("\nSuperMarket-ul primeste doar o dotare!\n");
        }
    }

    public function removeAttachments() {
        $this->attachments = null;
    }

}

?>
