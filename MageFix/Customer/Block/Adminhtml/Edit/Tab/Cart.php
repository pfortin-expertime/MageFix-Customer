<?php

namespace MageFix\Customer\Block\Adminhtml\Edit\Tab;

/**
 * Adminhtml customer orders grid block
 */
class Cart extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Cart
{
    
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('MageFix_Customer::tab/cart.phtml');
    }
    
    /**
     * {@inheritdoc}
     */
    protected function _prepareCollection()
    {
        $quote = $this->getQuote();

        if ($quote) {
            $collection = $quote->getItemsCollection(false);
        } else {
            $collection = $this->_dataCollectionFactory->create();
        }

        $collection->addFieldToFilter('parent_item_id', ['null' => true]);

        $this->setCollection($collection);

        if ($collection->isLoaded()) {
            return $this;
        } else {
            return parent::_prepareCollection();
        }
    }

}
