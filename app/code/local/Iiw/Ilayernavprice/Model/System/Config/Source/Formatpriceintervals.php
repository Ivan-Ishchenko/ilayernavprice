<?php

class Iiw_Ilayernavprice_Model_System_Config_Source_Formatpriceintervals {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(

            array('value' => 1, 'label' => Mage::helper('adminhtml')->__('Default')),
            array('value' => 2, 'label' => Mage::helper('adminhtml')->__('Dropdown')),
        );
    }

}