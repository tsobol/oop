<?php
class Cofetarie{
	const plusProfit=30000;
        const label='cofetarie';
	public function getPlusProfit(){
		return self::plusProfit;
	}
        
        public function __toString() {
            return self::label;
        }
}

?>