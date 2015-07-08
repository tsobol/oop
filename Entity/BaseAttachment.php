<?php
/**
 * The base class of the attachments classes.
 * 
 * @abstract
 * @author PENTALOG\tsobol
 */
abstract class BaseAttachment {
   /**
    * The supplimentary profit to add to the initial profit 
    * if the current attachment is attached to the market
    * 
    * @var float
    */
   const plusProfit=null;
   
   /**
    * Short description of the attachment
    * 
    * @var string
    */
   const label=null;
   
   /**
    * 
    * @return float
    */
   public function getPlusProfit(){
       return static::plusProfit;
   }
   
   /**
    * Display a short description of the attachment 
    * 
    * @return string
    */
   public function __toString() {
        return static::label;
   }
}
