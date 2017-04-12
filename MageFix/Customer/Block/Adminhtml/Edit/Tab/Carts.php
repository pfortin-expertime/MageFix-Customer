<?php

namespace MageFix\Customer\Block\Adminhtml\Edit\Tab;

/**
 * Obtain all carts contents for specified client
 */
class Carts extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Carts 
{
    
    /**
     * @return bool
     */
    public function canShowTab()
    {
        if ($this->_getCustomer()->getId()) {
            return true;
        }
        return false;
    }
	
    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabLabel()
    {
        return __('Shopping cart');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabTitle()
    {
        return __('Shopping cart');
    }
	
    /**
     * Tab should be loaded trough Ajax call
     *
     * @return bool
     */
    public function isAjaxLoaded()
    {
        return false;
    }
}
