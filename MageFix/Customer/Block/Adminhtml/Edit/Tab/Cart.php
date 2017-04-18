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

}
