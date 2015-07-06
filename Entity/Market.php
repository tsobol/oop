<?php
require_once('SuperClass.php');

class Market extends BaseClass{
    const case_lucratoare_initial=2;
    const case_disponibile=3;
    const profit_initial=40000;

    public function __construct($nume,$adresa,$numar_inregistrare){
    	$this->profit=self::profit_initial;
     	$this->caseLucratoare=self::case_lucratoare_initial;
    	parent::__construct($nume,$adresa,$numar_inregistrare);	
    }
}