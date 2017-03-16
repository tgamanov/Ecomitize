<?php

class Taras_Dynamic_Model_Value extends Mage_Eav_Model_Entity_Attribute_Source_Config
{

    public function __construct()
    {
        $this->_configNodePath = 'global/options_container/value';
    }
}