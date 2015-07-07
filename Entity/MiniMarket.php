<?php
require_once('BaseMarket.php');
 class MiniMarket extends BaseMarket{
	const case_disponibile=2;
	const case_lucratoare_initial='1';
	const profit_initial='30000';
	
	public function __construct(){
		$this->profit=self::profit_initial;
		$this->caseLucratoare=self::case_lucratoare_initial;
		parent::__construct('mini-market','str. Independentei',876453);
               
	}
}