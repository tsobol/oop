<?php    
require_once('Entity/Market.php');
require_once('Entity/MiniMarket.php');
require_once('Entity/SuperMarket.php');
require_once('Entity/HyperMarket.php');

class MarketFactory{

	public static function build($market_type,$nume,$adresa,$numarInregistrare){
        
        if ($market_type==''){
        	echo "Invalid Market Type";
        	$object=null;
        }
        else {
        	$class_type=ucwords($market_type);
        	if(class_exists($class_type)){
        		$object= new $class_type($nume,$adresa,$numarInregistrare);
           	}
        return $object;
        }
	}
}
?>