<?php

class Taras_Faq_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('FAQ'));

        $this->loadLayout()
            ->_setActiveMenu('cms/page')
            ->_addContent($this->getLayout()->createBlock('taras_faq/grid_faq'))
            ->renderLayout();
    }

    /**
     * New Action
     */
    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * Edit Action
     */
    public function editAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('cms/page')
            ->_addContent($this->getLayout()->createBlock('taras_faq/form_edit'))
            ->renderLayout();
    }

    /**
     * Save Action
     */
    public function saveAction()
    {
        $request = $this->getRequest();
        if ($request->getParams())
        {
            $data = array(
                'question'  => $request->getParam('question'),
                'answer'    => $request->getParam('answer'),
                'is_active' => $request->getParam('is_active')
            );
            $model = Mage::getModel('taras_faq/faq');
            $id = $request->getParam('id');
            if ($id) {
                $model->load($id);
            }
            $model->setData($data);

            try {
                if ($id) {
                    $model->setId($id);
                }
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Successfully saved.'));
                $this->_redirect('*/*/');

            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/');
            }
            return;
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Nothing to save'));
        $this->_redirect('*/*/');
    }

    /**
     * Delete Action
     */
    public function deleteAction()
    {
        $request = $this->getRequest();
        $id = $request->getParam('id');
        if ($id) {
            try {
                $model = Mage::getModel('taras_faq/faq');
                $model->setId($id);
                $model->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Has been deleted.'));
                $this->_redirect('*/*/');
                return;
            }
            catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Nothing to delete.'));
        $this->_redirect('*/*/');
    }
}