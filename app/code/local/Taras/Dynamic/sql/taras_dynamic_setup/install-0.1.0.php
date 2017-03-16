<?php

$installer = $this;
$catalogInstaller = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$catalogInstaller->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'custom_attribute', array(
    'group'                      => 'General',
    'type'                       => 'varchar',
    'label'                      => 'Dynamic Values',
    'input'                      => 'select',
    'source'                     => 'taras_dynamic/value',
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
));

$installer->endSetup();