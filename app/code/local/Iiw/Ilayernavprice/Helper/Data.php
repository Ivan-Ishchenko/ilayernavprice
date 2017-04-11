<?php

class Iiw_Ilayernavprice_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * Get format output price intervals from configuration
     *
     * @return int
     */
    public function getConfigFormatOutputPriceIntervals() {
        return (int)Mage::getStoreConfig('catalog/layered_navigation/iiw_format_output_price_intervals');
    }

}