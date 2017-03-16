<?php

class Taras_Faq_Block_Widget extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface
{
    protected function _toHtml() {
        $settings = explode(',', str_replace(' ', '', $this->getFaqSettings()));
        Mage::getBlockSingleton('taras_faq/widget_template')->setWidgetSettings($settings);

        return Mage::helper('taras_faq')->getFaqWidgetHtml();
    }
}