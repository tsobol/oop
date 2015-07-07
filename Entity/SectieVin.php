<?php
class SectieVin{
	
	const plusProfit=10000;
        const label="sectie de vin";
	public function getPlusProfit(){
	     return self::plusProfit;
	}
        
        public function __toString() {
            return self::label;                    
        }
}
