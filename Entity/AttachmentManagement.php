<?php

/**
 * This class was designed for manage the attachments of a market.
 *
 * @author PENTALOG\tsobol
 */
class AttachmentManagement {

    /**
     * Verify if the market contains the required number of attachments
     * 
     * @param BaseMarket $market
     * @return boolean
     */
    public static function validate($attachments, $attachmentsMandatoryNumber) {
        if ($attachmentsMandatoryNumber == count($attachments)) {
            return true;
        } else {
            return false;
        }
    }

}
