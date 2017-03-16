<?php

class Taras_Faq_Block_Grid_Faq_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('taras_faq/faq_collection');

        $this->setCollection($collection);

        parent::_prepareCollection();
    }

    /**
     * Prepare Grid Columns
     *
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('id', array(
            'header' => $this->__('ID'),
            'index' => 'id',
            'sortable' => true
        ));

        $this->addColumn('question', array(
            'header' => $this->__('Question'),
            'index' => 'question',
            'sortable' => false
        ));

        $this->addColumn('answer', array(
            'header' => $this->__('Answer'),
            'index' => 'answer',
            'sortable' => false
        ));

        $this->addColumn('is_active', array(
            'header' => $this->__('Is Active'),
            'index' => 'is_active',
            'sortable' => false,
            'type'  => 'options',
            'options' => array(0 => $this->__('No'), 1 => $this->__('Yes'),
            )
        ));

        return parent::_prepareColumns();
    }

    /**
     * Get Row Grid Url
     *
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}