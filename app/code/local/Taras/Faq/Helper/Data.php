<?php

class Taras_Faq_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getFaqWidgetHtml(){
        return Mage::getBlockSingleton('taras_faq/widget_template')->toHtml();
    }
}