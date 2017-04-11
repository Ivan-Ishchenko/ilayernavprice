<?php

/**
 * Overridden class Mage_Catalog_Block_Layer_Filter_Price
 */
class Iiw_Ilayernavprice_Block_Catalog_Layer_Filter_Price extends Mage_Catalog_Block_Layer_Filter_Price {

    /**
     * Layer navigation price helper instance
     *
     * @var Iiw_Ilayernavprice_Helper_Data
     */
    protected $_layerNavPriceHelper;


    /**
     * Retrieve Layer navigation price helper instance
     *
     * @return Iiw_Ilayernavprice_Helper_Data
     */
    protected function _getLayerNavPriceHelper() {
        if (is_null($this->_layerNavPriceHelper)) {
            $this->_layerNavPriceHelper = Mage::helper('ilayernavprice');
        }

        return $this->_layerNavPriceHelper;
    }

    /**
     * Public method for retrieve Layer navigation price helper
     *
     * @return Iiw_Ilayernavprice_Helper_Data
     */
    public function getLayerNavPriceHelper() {
        return $this->_getLayerNavPriceHelper();
    }

    /**
     * Initialize Price filter module
     *
     */
    public function __construct() {
        parent::__construct();

        if ($this->getLayerNavPriceHelper()->getConfigFormatOutputPriceIntervals() == 2) {
            $this->setTemplate('iiw-ilayernavprice/price-filter.phtml');
        }
    }
}
