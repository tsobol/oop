<?php
class  Brutarie{
	const plusProfit=20000;
        const label='brutarie';
        
	public function getPlusProfit(){
		return self::plusProfit;
	}
        public function __toString() {
            return self::label;
        }
}