<?php

class Taras_Faq_Block_Faq extends Mage_Core_Block_Template
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('taras_faq/list.phtml');
    }


    public function getFullCollection(){
        return Mage::getResourceModel('taras_faq/faq_collection');
    }

    public function getActiveFaq(){
        return Mage::getResourceModel('taras_faq/faq_collection')
            ->addFieldToFilter('is_active', array('eq' => true));
    }
}