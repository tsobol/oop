<?php
require_once('SuperClass.php');
class SuperMarket extends BaseClass{
	const case_lucratoare_initial=3;
	const case_disponibile=5;
	const profit_initial=60000;

	public function __construct($nume,$adresa,$numar_inregistrare){			
			$this->profit=self::profit_initial;
			$this->caseLucratoare=self::case_lucratoare_initial;
                        parent::__construct($nume,$adresa,$numar_inregistrare);
	}

    public function addAttachments($object){
    	if($this->attachments==null){
	    	$this->attachments=array($object);
        }  else{
    	   exit("\nSuperMarket-ul primeste doar o dotare!\n");
    	}
    }

    public function removeAttachments(){
    	$this->attachments=null;
    }

    }
?>
