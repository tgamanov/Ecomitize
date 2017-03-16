<?php

class Taras_Faq_ListController extends Mage_Core_Controller_Front_Action
{
    public function indexAction(){
        echo $this->getLayout()->createBlock('taras_faq/faq')->toHtml();
    }
}