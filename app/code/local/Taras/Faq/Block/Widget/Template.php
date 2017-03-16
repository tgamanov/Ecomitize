<?php

class Taras_Faq_Block_Widget_Template extends Mage_Core_Block_Template
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('taras_faq/widget.phtml');
    }


    public function getWidgetCollectionById($id){
        return Mage::getResourceModel('taras_faq/faq_collection')
            ->addFieldToFilter('id', array('eq' => $id))->getFirstItem();
    }
}