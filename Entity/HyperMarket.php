<?php

require_once('BaseMarket.php');

class HyperMarket extends BaseMarket {

    const profit_initial = 100000;
    const case_lucratoare_initial = 6;
    const case_disponibile = 10;
    const attachmentsMandatoryNumber = 3;
    const nume="hyper-market";
    const adresa='str...';
    const numar_inregistrare=534675;

    public function __construct() {

        $this->profit = self::profit_initial;
        $this->caseLucratoare = self::case_lucratoare_initial;
        parent::__construct(self::nume,self::adresa,self::numar_inregistrare);
    }

  }
