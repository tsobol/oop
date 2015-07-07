<?php

require_once('BaseMarket.php');

class SuperMarket extends BaseMarket {

    const case_lucratoare_initial = 3;
    const case_disponibile = 5;
    const profit_initial = 60000;
    const attachmentsMandatoryNumber = 1;
    const nume="super-market";
    const adresa='str...';
    const numar_inregistrare=934675;

    public function __construct() {
        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
       parent::__construct(self::nume,self::adresa,self::numar_inregistrare);
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
