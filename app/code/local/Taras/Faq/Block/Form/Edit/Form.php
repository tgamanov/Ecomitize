<?php

class Taras_Faq_Block_Form_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $collection = Mage::getResourceModel('taras_faq/faq_collection');

        $id = $this->getRequest()->getParam('id');
        if ($id){
            $faq = $collection->addFieldToFilter('id', array('eq' => $id))->getFirstItem();
            $data = array(
                'question'  => $faq->getQuestion(),
                'answer'    => $faq->getAnswer(),
                'is_active' => $faq->getIsActive()
            );
        } else {
            $data = array();
        }

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('id' => $id)),
            'method' => 'post',
            'enctype' => 'multipart/form-data',
        ));

        $form->setUseContainer(true);

        $this->setForm($form);

        $fieldset = $form->addFieldset('faq_form', array(
            'legend' =>$this->__('FAQ - Field')
        ));

        $fieldset->addField('question', 'text', array(
            'label'     => $this->__('Question'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'question',
            'style' => 'width:400px;'
        ));

        $fieldset->addField('answer', 'editor', array(
            'label'     => $this->__('Answer'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'answer',
            'style' => 'width:400px; height:200px;',
            'config'    => Mage::getSingleton('cms/wysiwyg_config')->getConfig()
        ));

        $fieldset->addField('is_active', 'select', array(
            'label'     => $this->__('Active'),
            'name'      => 'is_active',
            'style' => 'width:400px;',
            'values' => array(false => $this->__('No'), true => $this->__('Yes'))
        ));

        $form->setValues($data);

        return parent::_prepareForm();
    }


    protected function _prepareLayout()
    {
        $return = parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        return $return;
    }
}