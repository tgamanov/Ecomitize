<?php

class Taras_Faq_Block_Grid_Faq extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'grid_faq';
        $this->_blockGroup = 'taras_faq';

        $this->_headerText = $this->__('FAQ');
        parent::__construct();
    }
}