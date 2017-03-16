<?php

class Taras_Faq_Block_Form_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();

        $this->_objectId = 'id';
        $this->_blockGroup = 'taras_faq';
        $this->_controller = 'form';
        $this->_mode = 'edit';
        $this->_headerText = $this->__('FAQ - Data');
        $this->_updateButton('save', 'label', $this->__('Save'));

    }
}