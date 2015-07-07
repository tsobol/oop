<?php

require_once('BaseMarket.php');

class Market extends BaseMarket {

    const case_lucratoare_initial = 2;
    const case_disponibile = 3;
    const profit_initial = 40000;
    const attachmentsMandatoryNumber = 0;
    const nume = "market";
    const adresa = 'str...';
    const numar_inregistrare = 534676;

    public function __construct() {
        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct(self::nume, self::adresa, self::numar_inregistrare);
    }

}
