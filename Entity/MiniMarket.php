<?php
require_once('SuperClass.php');
 class MiniMarket extends BaseClass{
	const case_disponibile=2;
	const case_lucratoare_initial='1';
	const profit_initial='30000';
	
	public function __construct($nume,$adresa,$numar_inregistrare){
		$this->profit=self::profit_initial;
		$this->caseLucratoare=self::case_lucratoare_initial;
		parent::__construct($nume,$adresa,$numar_inregistrare);
               
	}
}